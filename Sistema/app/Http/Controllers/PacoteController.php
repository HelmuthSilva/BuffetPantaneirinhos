<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pacotes;
use Auth;
use App\User;

class PacoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();

        $role = DB::table('users')
        ->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id')
        ->select('roles.name', 'role_user.user_id')
        ->where('users.id', '=', $id)
        ->get();

        $pacotes = Pacotes::all();

        if(count($role) <> 0){
            if($role[0]->name == "Fornecedor"){
                return redirect('/fornecedor');
            }
        }else{
            return view('inicial', compact('pacotes'));
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pacote = Pacotes::find($id);

        $salgado = DB::table('pacotes')
        ->join('salgados','salgados.id','=','pacotes.salgados')
        ->select('salgados.*')
        ->where('pacotes.id','=',$id)
        ->get();

        $bebida = DB::table('pacotes')
        ->join('bebidas','bebidas.id','=','pacotes.bebidas')
        ->select('bebidas.*')
        ->where('pacotes.id', '=', $id)
        ->get();

        return view('verPacote', compact('pacote','salgado','bebida'));
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
