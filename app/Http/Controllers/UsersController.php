<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function allUsers()
    {
    	// $users = \DB::select('SELECT * FROM users WHERE id=:id', ['id'=>1]);
    		$users = DB::table('users')->where('id', 1)->get();
    		return view ('users.aprendendo_rotas', ['users'=>$users]);
    }
    //MOSTRA UMA LISTA DE REGISTROS
    public function index()
    {
    	# code...
    }
    //EXIBE FORMULARIO DE CRIAÇÃO DE REGISTRO
    public function create()
    {
    	# code...
    }
    //ARMAZENA NOVO REGISTRO
    public function store()
    {
    	DB::table('users')->insert(
    		'id' => 2,
    		'name' => 'Novo',
    		'email' => 'teste@teste.com'
    	);
    }
    //EXIBE UM REGISTRO ESPECIFICO
    public function show($id)
    {
    	# code...
    }
    //EXIBE FORMULARIO DE EDIÇÃO DE REGISTRO
    public function edit($id)
    {
    	# code...
    }
    //ATUALIZA REGISTRO ESPECIFICO
    public function update($id)
    {
    	$affected = DB::table('users')
    		->where('id', $id)
    		->update('name' => 'Atuualizado');
    }
    //REMOVE UM REGISTRO ESPECIFICO
    public function destroy($id)
    {
    	$deleted = DB::table('users')->delete();
    }
}
