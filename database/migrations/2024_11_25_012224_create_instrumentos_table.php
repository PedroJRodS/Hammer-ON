<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('instrumentos', function (Blueprint $table) {
            $table->string('nome', 125);
            $table->string('modelo', 125);
            $table->string('marca', 125);
            $table->string('tipo', 125);
            $table->double('preço', 11, 11);
            $table->id();
            $table->timestamps();
        });

        Schema::table('instrumentos', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instrumentos');

        Schema::table('instrumentos', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
};
