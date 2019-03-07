<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table='pedidos';
    public $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = [
        'descripcion', 'direccion', 'fecha_entrega', 'imagen_paquete', 'firma', 'id_frente', 'id_atras', 'entregado', 'id_repartidor'
    ];
    public $timestamps = false;
}
