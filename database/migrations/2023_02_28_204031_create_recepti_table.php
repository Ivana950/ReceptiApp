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
        Schema::create('recepti', function (Blueprint $table) {
            $table->id();
            $table->string('naziv');
            $table->string('sastojci');
            $table->string('priprema');
            $table->string('vrijeme_pripreme');
            $table->foreignId('korisnik_id')->constrained('users');
            $table->foreignId('kategorija_id')->constrained('kategorije');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepti');
    }
};
