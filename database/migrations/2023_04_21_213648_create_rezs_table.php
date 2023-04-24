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
        Schema::create('rezs', function (Blueprint $table) {
            $table->id();
            $table->string('dan');
            $table->string('mesto');
            $table->integer('brojStola');
            $table->foreignId('restoranId');
            $table->string('utisak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rezs');
    }
};
