<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fonpricesweeklies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('pazartesi');
            $table->integer('salı');
            $table->integer('çarşamba');
            $table->integer('perşembe');
            $table->integer('cuma');
            $table->integer('cumartesi');
            $table->integer('pazar');
            $table->foreign('name')->references('code')->on('fons')->onDelete('cascade');
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
