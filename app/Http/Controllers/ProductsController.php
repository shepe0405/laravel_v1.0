<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    //MOSTRA UMA LISTA DE REGISTROS
    public function index()
    {
    	$products = Product::all();
    	return view ('products.index', ['products'=>$products]);
    }
    //EXIBE FORMULARIO DE CRIAÇÃO DE REGISTRO
    public function create()
    {
    	return view ('products.create');
    }
    //ARMAZENA NOVO REGISTRO
    public function store(Request $request)
    {
    	Product::create($request->all());
    	return redirect()->route('products.index');
    }
    //EXIBE UM REGISTRO ESPECIFICO
    public function show($id)
    {
    	$product = Product::find($id);
    	return view ('products.show', ['data'=>$product]);
    }
    //EXIBE FORMULARIO DE EDIÇÃO DE REGISTRO
    public function edit($id)
    {
    	$product = Product::find($id);
    	return view ('products.edit', ['product'=>$product]);
    }
    //ATUALIZA REGISTRO ESPECIFICO
    public function update(Request $request, $id)
    {
    	$product = Product::find($id);
    	$product->update($request->all());
    	return redirect()->route('products.index');
    }
    //REMOVE UM REGISTRO ESPECIFICO
    public function destroy($id)
    {

    }
}