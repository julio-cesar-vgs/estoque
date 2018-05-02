<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class AdicionaTamanhoNoProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function ($table) {
            $table->string('tamanho', 100)->nullable($value = false)->after('descricao')->default($value="Produtos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function ($table) {
            $table->dropColumn('tamanho');

        });
    }
}
