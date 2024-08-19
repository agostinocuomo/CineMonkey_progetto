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
        Schema::table('film', function (Blueprint $table) {
            $table->unsignedBigInteger('film_id')->nullable();
            $table->foreign('film_id')->references('id')->on('categories');
            /* $table->foreignId('film_id')->constrained(); */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('film', function (Blueprint $table) {
            $table->dropColumn('film_id');
            $table->dropForeign('film_id');
        });
    }
};
