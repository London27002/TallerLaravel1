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
        Schema::table('ventas_celulares', function (Blueprint $table) {
            $table->string('Color', 40)->nullable()->after('Modelo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ventas_celulares', function (Blueprint $table) {
            $table->dropColumn('Color');

           
        });
    }
};
