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
        Schema::create('recensionis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titolo');
            $table->string('recensione');

        /*     $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('user_id')->constrained(); */

          /*   $table->unsignedBigInteger('film_id')->nullable();
            $table->foreign('film_id')->references('id')->on('film');
            $table->foreignId('film_id')->constrained();
 */
           /*  --------FINIRE TABELLE */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recensionis');
    }
};
