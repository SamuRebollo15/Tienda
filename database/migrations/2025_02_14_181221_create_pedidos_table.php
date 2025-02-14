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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();  // ID de pedido
            $table->unsignedBigInteger('usuario_id');  // ID del usuario que realiza el pedido
            $table->unsignedBigInteger('producto_id');  // ID del producto relacionado
            $table->date('fecha_compra');  // Fecha de la compra
            $table->date('fecha_aproximada_entrega');  // Fecha aproximada de entrega
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
