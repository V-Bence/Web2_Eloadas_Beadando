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
        Schema::create('eredmenies', function (Blueprint $table) {
            $table->id(); 

            
            $table->date('datum');
            $table->integer('pilotaaz');  
            $table->integer('helyezes')->nullable();
            $table->string('hiba')->nullable();   
            $table->string('csapat');
            $table->string('tipus');
            $table->string('motor');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eredmenies');
    }
};
