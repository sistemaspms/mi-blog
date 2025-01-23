<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;


    protected $table = 'entradas';


    protected $fillable = ['titulo', 'descripcion' ,'contenido', 'fecha_publicacion','estado', 'categoria_id'];
}