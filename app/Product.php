<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

	//PERMITIR ALTERAÇÕES EM MASSAS
    protected $fillable = ['title', 'body', 'value', 'qtd', 'url'];

}
?>