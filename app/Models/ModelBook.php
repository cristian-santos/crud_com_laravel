<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    public $timestamps = false;
    protected $table = 'tbl_livro';
    protected $fillable = [
        'nome_livro',
        'nome_autor',
        'cod_isbn',
        'qtd_paginas',
        'preco'
    ];

    public function relUsers()
    {
        return $this->hasOne('App\Models\User','id','id_user');
    }
}
