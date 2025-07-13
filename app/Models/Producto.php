<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Campos que se pueden asignar en masa (mass assignment)
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock'];
}