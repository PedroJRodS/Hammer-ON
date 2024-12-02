<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->string('nome', 125);
            $table->id();
            $table->timestamps();
        });

        Schema::table('marcas', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('marcas');

        Schema::table('marcas', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
};
