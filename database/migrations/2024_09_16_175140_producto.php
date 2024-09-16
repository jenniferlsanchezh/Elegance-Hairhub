<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Productos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_producto');
            $table->integer('Valor_producto');
            $table->string('Foto_producto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
