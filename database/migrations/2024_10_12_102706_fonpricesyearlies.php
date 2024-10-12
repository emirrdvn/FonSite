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
        Schema::create('fonpricesyearlies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('ocak');
            $table->integer('şubat');
            $table->integer('mart');
            $table->integer('nisan');
            $table->integer('mayıs');
            $table->integer('haziran');
            $table->integer('temmuz');
            $table->integer('ağustos');
            $table->integer('eylül');
            $table->integer('ekim');
            $table->integer('kasım');
            $table->integer('aralık');
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