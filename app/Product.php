<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

	//PERMITIR ALTERAÇÕES EM MASSAS
    protected $fillable = ['title', 'body', 'value', 'qtd', 'url'];


    //Um mutator é um método que criamos na model para manipular os dados do campo.
    public function setUrlAttribute($value)
    {
    	if ($value == "") {
    		$value = $this->attributes['title'];
    	}
    	$this->attributes['url'] = str_slug($value);
    }
}