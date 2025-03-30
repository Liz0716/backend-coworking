<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservaciones extends Model
{
    protected $table = 'reservaciones';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['id_user','id_espacio','estado','precio','hora_inicio','hora_fin','fecha'];

    //Relacion con la tabla de usuarios
    public function usuario(){
        return $this->belongsTo(User::class,'id_user');
    }

    //Relacion con la tabla de espacios
    public function espacio(){
        return $this->belongsTo(Espacios::class,'id_espacio');
    }
}
