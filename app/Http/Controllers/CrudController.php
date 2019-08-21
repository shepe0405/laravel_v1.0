<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


abstract class CrudController extends Controller
{
    protected $model_instance;

    //MOSTRA UMA LISTA DE REGISTROS
    public function index()
    {
    	$data = $this->getModel()->all();
    	return view ($this->path.'.index', ['data'=>$data]);
    }
    //EXIBE FORMULARIO DE CRIAÇÃO DE REGISTRO
    public function create()
    {
    	return view ($this->path.'.create');
    }
    //ARMAZENA NOVO REGISTRO
    public function store(Request $request)
    {
    	$this->getModel()->create($request->all());
    	return redirect()->route($this->path.'.index');
    }
    //EXIBE UM REGISTRO ESPECIFICO
    public function show($id)
    {
    	$data = $this->getModel()->find($id);
    	return view ($this->path.'.show', ['data'=>$data]);
    }
    //EXIBE FORMULARIO DE EDIÇÃO DE REGISTRO
    public function edit($id)
    {
    	$data = $this->getModel()->find($id);
    	return view ($this->path.'.edit', ['data'=>$data]);
    }
    //ATUALIZA REGISTRO ESPECIFICO
    public function update(Request $request, $id)
    {
    	$data = $this->getModel()->find($id);
    	$data->update($request->all());
    	return redirect()->route($this->path.'.index');
    }
    //REMOVE UM REGISTRO ESPECIFICO
    public function destroy($id)
    {
        $data = $this->getModel()->find($id);
        $data->delete();
        return redirect()->route($this->path.'.index');
    }
    public function getModel()
    {
        if ($this->model_instance === null) {
            $this->model_instance = new $this->model;
        }
        return $this->model_instance;
    }
}