<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $fillabel = ['ID', 'codigo', 'nombre', 'precio_venta', 'stock', 'descripcion'];
    public $timestamps = false;
}
