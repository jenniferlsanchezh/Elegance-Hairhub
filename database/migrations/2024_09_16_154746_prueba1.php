<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('probando', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_de_la_prueba');
            $table->integer('numero_de_la_prueba');
        });
    }

};
