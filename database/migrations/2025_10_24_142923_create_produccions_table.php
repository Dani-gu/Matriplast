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
    Schema::create('produccions', function (Blueprint $table) {
        $table->id();
        $table->date('fecha');
        $table->decimal('temperatura', 5, 2); // ej: 123.45
        $table->decimal('presion', 5, 2);
        $table->decimal('cantidad_resina', 8, 2);
        $table->text('observaciones')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produccions');
    }
};
