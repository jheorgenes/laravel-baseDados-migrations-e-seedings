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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 150)->nullable();
            $table->string('password', 200)->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps(); //Create columns: created_at and update_at
            $table->softDeletes(); //Create column: deleted_at (Não exclui no banco de dados)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
