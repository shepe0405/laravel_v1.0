<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\CrudController;


class ProductsController extends CrudController
{

    protected $model = '\App\Product';
    protected $path = 'products';
}