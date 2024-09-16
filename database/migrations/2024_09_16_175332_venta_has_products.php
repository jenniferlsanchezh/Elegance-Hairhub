<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Venta_Has_Productos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Productos_id')->constrained('Productos', 'id')->onDelete('cascade');
            $table->foreignId('Venta_id')->constrained('Ventas', 'id')->onDelete('cascade');
            $table->integer('cantidad')->default(1);
            $table->integer('subtotal');
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        //
    }
};
