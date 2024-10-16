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
        Schema::create('fonprices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('fon_id')
                    ->foreign('fon_id')->references('id')->on('fons')
                    ->onDelete('cascade');
            $table->float('price')->min(0);
            $table->date('date');
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
