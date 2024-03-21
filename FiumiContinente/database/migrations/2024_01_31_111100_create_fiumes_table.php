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
        Schema::create('fiumes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome");
            $table->integer("lunghezza");
            $table->string("foce");
        });

        Schema::table('fiumes', function (Blueprint $table) {
            $table->foreignId("continente_id")->constrained("continentes")->onDelete("cascade")->onUpdate("cascade");
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiumes');
    }
};
