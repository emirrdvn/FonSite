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
       
        Schema::create('fonpricesmonthlies', function (Blueprint $table) {
            $monthlies =range(1, 30) ;
            $table->id();
            $table->string('name');
            foreach($monthlies as $monthly){
                $table->integer($monthly);
            }
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
