<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::match(['get', 'post'], '/hello/{name?}', function ($name = "World") {
    //return view('welcome');
    return 'Hello '.$name.'!';
});

Route::resource('users', 'UsersController');

Route::resource('products', 'ProductsController');
/*COMO ISSO TEMOS AS SETE ROTAS QUE TEMOS AS FUNCOES NA CONTROLLER
GET /products - index - products.index
GET /products/create - create - products.create
POST /products - store - products.store
GET /products/{id} - show - products.show
GET /products/{id}/edit - edit - products.edit
PUT/PATCH /products/{id} - update - products.update
DELETE /products/{id} - destroy - products.destroy


*/