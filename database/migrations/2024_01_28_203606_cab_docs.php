<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cab_docs', function (Blueprint $table) {
            $table->id();
            $table->string("nombre", 200)->default('')->nullable(false);
            $table->dateTime("fecha")->default(now())->nullable(false);
            $table->integer("estado")->default(0)->nullable(false);
            $table->integer("num_listo")->default(0)->nullable(false);
            $table->integer("num_pendiente")->default(0)->nullable(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cab_docs');
    }
};
