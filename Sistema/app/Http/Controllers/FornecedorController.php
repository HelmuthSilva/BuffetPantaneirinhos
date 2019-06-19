<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\CollectionstdClass;
use App\Fornecedores;
use App\User;
use App\Contratos;
use Auth;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $fornecedores = DB::table('fornecedores')
        ->join('users', 'users.id', '=', 'fornecedores.usuario')
        ->select('users.name', 'fornecedores.*')
        ->get();

        return view('rankingFornecedor', compact('fornecedores', 'role'));
    }

    public function formulario()
    {
        return view('formFornecedor');
    }

    public function individuo()
    {
        $id = Auth::id();

        $pessoa = User::find($id);

        $fornecedor = DB::table('users')
        ->join('fornecedores', 'users.id', '=', 'fornecedores.usuario')
        ->select('users.name', 'fornecedores.*')
        ->where('users.id', '=', $pessoa->id)
        ->get();

        return view('inicialFornecedor', compact('fornecedor'));

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
    public function store(Request $request)
    {
        $fornecedor = new Fornecedores();

        $fornecedor->usuario = Auth::id();
        $fornecedor->nomeServico = $request->input('nomeServico');
        $fornecedor->nascimento = $request->input('nascimento');
        $fornecedor->rua = $request->input('rua');
        $fornecedor->bairro = $request->input('bairro');
        $fornecedor->numero = $request->input('numero');
        $fornecedor->telefone = $request->input('telefone');
        $fornecedor->media = 0.0;
        $fornecedor->solicitada = 0;
        $fornecedor->notas = 0;

        $fornecedor->save();

        return redirect('/fornecedor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function mostrarPeloUsuario($id)
    {
        $fornecedor = DB::table('fornecedores')
        ->join('users', 'users.id', '=', 'fornecedores.usuario')
        ->select('users.name', 'fornecedores.*')
        ->where('fornecedores.usuario', '=', $id)
        ->get();

            $time1 = strtotime($fornecedor[0]->nascimento);
            $newformat = date('Y', $time1);
            $final = (float)$newformat;

            $time2 = strtotime(now());
            $newformat2 = date('Y', $time2);
            $final2 = (float)$newformat2;

            $idade = $final2 - $final;

        return view('userFornecedorInfo', compact('fornecedor', 'idade'));

    }

    public function show($id)
    {

        $fornecedor = DB::table('fornecedores')
        ->join('users', 'users.id', '=', 'fornecedores.usuario')
        ->select('users.name', 'fornecedores.*')
        ->where('fornecedores.usuario', '=', $id)
        ->get();

        $time1 = strtotime($fornecedor[0]->nascimento);
        $newformat = date('Y', $time1);
        $final = (float)$newformat;

        $time2 = strtotime(now());
        $newformat2 = date('Y', $time2);
        $final2 = (float)$newformat2;

        $idade = $final2 - $final;

        return view('fornecedorInfo', compact('fornecedor', 'idade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fornecedor = DB::table('fornecedores')
        ->join('users', 'users.id', '=', 'fornecedores.usuario')
        ->select('users.name', 'fornecedores.*')
        ->where('fornecedores.usuario', '=', $id)
        ->get();

        var_dump($fornecedor[0]->media);

        return view('editFornecedor', compact('fornecedor'));
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
        $forn = DB::table('fornecedores')
        ->join('users', 'users.id', '=', 'fornecedores.usuario')
        ->select('users.name', 'fornecedores.*')
        ->where('fornecedores.usuario', '=', $id)
        ->get();

        $identificador = $forn[0]->id;

        $fornecedor = Fornecedores::find($identificador);

        $fornecedor->usuario = Auth::id();
        $fornecedor->nomeServico = $request->input('nomeServico');
        $fornecedor->nascimento = $request->input('nascimento');
        $fornecedor->rua = $request->input('rua');
        $fornecedor->bairro = $request->input('bairro');
        $fornecedor->numero = $request->input('numero');
        $fornecedor->telefone = $request->input('telefone');
        $fornecedor->media = $fornecedor->media;
        $fornecedor->solicitada = $fornecedor->solicitada;
        $fornecedor->notas = $fornecedor->notas;

        $fornecedor->save();

        return redirect('/');
    }

    public function avaliacao($id)
    {
        $fornecedor = Contratos::select('fornecedores.*', 'users.name')
        ->join('orcamentos', 'orcamentos.id', '=', 'contratos.orcamento')
        ->join('fornecedores', 'fornecedores.id', '=', 'contratos.fornecedor')
        ->join('users', 'users.id', '=', 'fornecedores.usuario')
        ->where('orcamentos.id', '=', $id)
        ->get();

        return view('avaliarFornecedor', compact('fornecedor'));

    }

    public function avaliar(Request $request, $id)
    {
        $fornecedor = Fornecedores::find($id);
        $nota = $request->input('nota');

        $quant = $fornecedor->solicitada += 1;

        $fornecedor->solicitada = $quant;
        $fornecedor->notas += $nota;
        $fornecedor->media = $nota/$quant;

        $fornecedor->save();

        return view('posAvaliacao');

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
