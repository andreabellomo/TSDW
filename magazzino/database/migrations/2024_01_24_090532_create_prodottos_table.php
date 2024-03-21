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
        Schema::create('prodottos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome");
            $table->integer("giacenza");
        });

        Schema::table('prodottos', function (Blueprint $table) {
            $table->foreignId("categoria_id")->constrained("categorias")->onDelete("cascade")->onUpdate("cascade");
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodottos');
    }
};
