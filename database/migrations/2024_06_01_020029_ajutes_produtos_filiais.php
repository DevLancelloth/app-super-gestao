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
        // Cria a tabela 'filiais'
        Schema::create('filiais', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 30);
            $table->timestamps();
        });

        // Cria a tabela 'produto_filiais'
        Schema::create('produto_filiais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo')->default(1);
            $table->integer('estoque_maximo')->default(1);
            $table->foreign('filial_id')->references('id')->on('filiais')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        // Remove as colunas da tabela 'produtos'
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn(['preco_venda', 'estoque_minimo', 'estoque_maximo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove os relacionamentos da tabela 'produto_filiais'
        Schema::table('produto_filiais', function (Blueprint $table) {
            $table->dropForeign(['filial_id']);
            $table->dropForeign(['produto_id']);
        });

        // Exclui a tabela 'produto_filiais'
        Schema::dropIfExists('produto_filiais');

        // Exclui a tabela 'filiais'
        Schema::dropIfExists('filiais');

        // Recria as colunas na tabela 'produtos'
        Schema::table('produtos', function (Blueprint $table) {
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo')->default(1);
            $table->integer('estoque_maximo')->default(1);
        });
    }
};