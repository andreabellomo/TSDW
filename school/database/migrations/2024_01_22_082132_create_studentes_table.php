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
        Schema::create('studentes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome");
            $table->string("cognome");
            $table->integer("eta");
        });

        Schema::table("studentes", function(BluePrint $table){
            $table->foreignID("class_id")->constrained("classes")->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentes');
    }
};
