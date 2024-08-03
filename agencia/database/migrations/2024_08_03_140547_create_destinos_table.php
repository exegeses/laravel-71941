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
        Schema::create('destinos', function (Blueprint $table) {
            $table->smallIncrements('idDestino');
            $table->string('aeropuerto', 45)->unique();
            $table->decimal('precio', 10, 2)->unsigned();
            $table->tinyInteger('idRegion')->unsigned();
            $table->foreign('idRegion')
                        ->references('idRegion')
                        ->on('regiones');
            $table->boolean('activo')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destinos');
    }
};
