<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuarios';
    public $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'id','nombre', 'correo_electronico', 'password', 'estatus', 'fotoPerfil'
    ];
    public $timestamps = false;
}
