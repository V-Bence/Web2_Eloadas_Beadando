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
        Schema::create('pilotas', function (Blueprint $table) {

            
            $table->id();

            
            $table->integer('az')->unique();

            $table->string('nev');
            $table->string('nem');
            $table->date('szuldat');
            $table->string('nemzet');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilotas');
    }
};