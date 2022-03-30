<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAutor extends Model
{
   
    public $timestamps = false;
    protected $table = 'tbl_autor';
    protected $fillable = [
        'nome_autor',
        'data_nasc',
    ];
}
