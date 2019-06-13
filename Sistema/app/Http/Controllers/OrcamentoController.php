<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Orcamentos;
use Auth;

class OrcamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orcamento');
    }

    public function orcamentoIndividual()
    {
        $id = Auth::id();
        $orcamentos = Orcamentos::select('orcamentos.*')
        ->where('orcamentos.usuario', '=', $id)
        ->get();

        return view('meusOrcamentos', compact('orcamentos'));

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
        $orcamento = new Orcamentos();

        $orcamento->usuario = Auth::id();
        $orcamento->nome = $request->input('nome');
        $orcamento->email = $request->input('email');
        $orcamento->telefone = $request->input('telefone');
        $orcamento->data = $request->input('data');
        $orcamento->convidados = $request->input('convidados');
        $orcamento->decoracao = $request->input('decoracao');
        $orcamento->crianca = $request->input('sexo');
        $orcamento->observacao = $request->input('observacao');
        $orcamento->status = "Esperando";
        $orcamento->criado = now();

        $orcamento->save();

        return view('espera');
        
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
