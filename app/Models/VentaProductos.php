<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class VentaProductos extends Pivot
{
    protected $table = 'venta_has_productos';
    protected $fillable = ['Productos_id', 'Venta_id', 'cantidad', 'subtotal', 'created_at'];
}
