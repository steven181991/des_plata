<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mov_docs', function (Blueprint $table) {
            $table->id();
            $table->integer("id_cabdoc")->default(0)->nullable(false);
            $table->dateTime("fecha")->default(now())->nullable(false);
            $table->string("nombre", 200)->default('')->nullable(false);
            $table->integer("cantidad")->default(0)->nullable(false);
            $table->integer("estado")->default(0)->nullable(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mov_docs');
    }
};
