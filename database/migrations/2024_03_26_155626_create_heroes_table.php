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
        Schema::create('heroes', function (Blueprint $table) {
        
            $table->timestamps();

            $table->bigIncrements('id');
            $table -> string('name');
            $table -> integer('hp');
            $table -> integer('atq');
            $table -> integer('def');
            $table -> integer('luck');
            $table -> integer('coins');
            $table -> integer('xp');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};

