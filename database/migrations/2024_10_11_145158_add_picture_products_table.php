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
        // add picture to produts table
        Schema::table('products', function (Blueprint $table) {
            // O méthodo After informa em qual posição da coluna será adicionado o novo campo
            $table->string('picture', 200)->nullable()->after('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
