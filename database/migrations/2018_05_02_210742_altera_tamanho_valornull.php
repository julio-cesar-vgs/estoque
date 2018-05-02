<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AlteraTamanhoValornull extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function ($table) {
            $table->string('nome', 150)->nullable($value = false)->change();
            $table->text('descricao')->default($value = "Não Informado")->change();
            $table->decimal('valor', 8, 2)->nullable($value = false)->change();
            $table->integer('quantidade')->nullable($value = false)->change();
            $table->string('tamanho',100)->nullable($value=false)->default($value = "Medidas do Produto")->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
