<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('acessorios', function (Blueprint $table) {
            $table->string('nome', 125);
            $table->string('marca', 125);
            $table->double('preço', 11, 11);
            $table->id();
            $table->timestamps();
        });

        Schema::table('acessorios', function (Blueprint $table) {
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('acessorios');

        Schema::table('acessorios', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
};
