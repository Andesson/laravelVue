<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            Schema::disableForeignKeyConstraints();
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('statu_id')->constrained();
            $table->string('cliente_nome');
            $table->string('cliente_fone1');
            $table->string('cliente_fone2');
            $table->string('cliente_endereco');
            $table->double('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
