<?php

use App\Categoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('CategoriaTableSeeder');

        Model::reguard();
    }
}

/**
 * Criação da funcao para adicionar itens automaticamente no banco de dados.
 * Class CategoriaTableSeeder
 */
class CategoriaTableSeeder extends Seeder
{

    public function run()
    {
        Categoria::create(['nome' => 'ELETRODOMESTICO']);
        Categoria::create(['nome' => 'ELETRONICA']);
        Categoria::create(['nome' => 'BRINQUEDO']);
        Categoria::create(['nome' => 'ESPORTES']);
    }
}