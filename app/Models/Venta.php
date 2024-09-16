<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $fillable = [
        'Total_Venta', 'Id_Vendedor', 'Id_Cliente', 'Hora_Venta'
    ];
}
