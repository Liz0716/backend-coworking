<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Espacios extends Model
{
    protected $table = 'espacios';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['nombre', 'capacidad', 'precio_hora','disponibilidad'];
}
