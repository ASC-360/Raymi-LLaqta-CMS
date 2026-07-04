<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('path')->nullable();

            $table->enum('neighborhood', [
                'La Laguna',
                'Yance',
                'Santo Domingo',
                'Luya Urco',
                'Higos Urcio',
                'Señor de los Milagros',
                '16 de Octubre'
            ])->default('La Laguna');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};