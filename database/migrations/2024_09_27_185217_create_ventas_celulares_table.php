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
        Schema::create('ventas_celulares', function (Blueprint $table) {
            $table->id();
            $table->string('Marca', 60);
            $table->string('Modelo', 60);
            $table->decimal('Precio', 8,2)->unsigned();
            $table->integer('Cantidad')->default(1);
            $table->date('Fecha_Venta')->nullable();
            $table->enum('Estado', ['Nuevo', 'Usado'])->default('nuevo');
            $table->string('Imei', 15)->unique();
            $table->string('Vendedor', 200)->index();
            $table->boolean('Garantia')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas_celulares');
    }
};
