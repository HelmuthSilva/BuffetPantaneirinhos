<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Orcamentos;
use App\Pacotes;
use App\Fornecedores;
use App\Contratos;
use PDF;
use Auth;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idf, $idp, $ido)
    {
        $fornecedor = Fornecedores::select('users.name', 'fornecedores.*')
        ->join('users', 'fornecedores.usuario', '=', 'users.id')
        ->where('fornecedores.id', '=', $idf)
        ->get();

        $pacote = Pacotes::select('salgados.*', 'bebidas.*', 'pacotes.*')
        ->join('salgados', 'salgados.id', '=', 'pacotes.salgados')
        ->join('bebidas', 'bebidas.id', '=', 'pacotes.bebidas')
        ->where('pacotes.id', '=', $idp)
        ->get();

        $orcamento = Orcamentos::find($ido);
        
        return view('finalContrato', compact('fornecedor', 'pacote', 'orcamento'));
    }

    public function escolherPacote($id)
    {
        $orcamento = Orcamentos::find($id);
        $pacotes = Pacotes::all();

        return view('escolherPacote', compact('pacotes', 'orcamento'));
    }

    public function escolherFornecedor($id, $ident)
    {
        $orcamento = Orcamentos::find($ident);
        $pacote = Pacotes::find($id);
        $fornecedores = Fornecedores::select('users.name', 'fornecedores.*')
        ->join('users', 'users.id', '=', 'fornecedores.usuario')
        ->get();

        return view('escolherFornecedor', compact('orcamento', 'pacote', 'fornecedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $iden)
    {
        $contrato = new Contratos();

        $contrato->contratante = $request->input('nome');
        $contrato->cpf = $request->input('cpf');
        $contrato->orcamento = $request->input('orcamento');
        $contrato->fornecedor = $request->input('fornecedor');
        $contrato->pacote = $request->input('pacote');
        $contrato->valor = $iden;

        $contrato->save();

        $p = $request->input('orcamento');

        DB::table('orcamentos')
        ->where('orcamentos.id',$p)
        ->update(['orcamentos.status' => 'Concluido']);

        $id = $contrato->id;

        return redirect('gerar-pdf/'.$id);
    }

    public function pdf($id)
    {
        $contrato = Contratos::find($id);
        $idf = $contrato->fornecedor;
        $ido = $contrato->orcamento;
        $idp = $contrato->pacote;
        
        $fornecedor = Fornecedores::select('users.name', 'fornecedores.*')
        ->join('users', 'fornecedores.usuario', '=', 'users.id')
        ->where('fornecedores.id', '=', $idf)
        ->get();

        $pacote = Pacotes::select('salgados.*', 'bebidas.*', 'pacotes.*')
        ->join('salgados', 'salgados.id', '=', 'pacotes.salgados')
        ->join('bebidas', 'bebidas.id', '=', 'pacotes.bebidas')
        ->where('pacotes.id', '=', $idp)
        ->get();

        $orcamento = Orcamentos::find($ido);

//        $pdf = \PDF::loadView('pdfContrato', compact('orcamento', 'fornecedor', 'pacote', 'contrato'));

        return view('pdfContrato', compact('fornecedor', 'pacote', 'orcamento', 'contrato'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
