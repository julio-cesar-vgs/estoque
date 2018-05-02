<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    // atributo para o eloquent verificar o nome da tabela do banco de dados, pois por padrao o ORM
    // pega o nome da classe mas no plural
    protected $table = 'produtos';

    // atributo que evita a utilizacao quando foi criado os atributos e a data da ultima modificacao dos itens.
    public $timestamps = false;

    //atributo para auxiliar no crud, para quando formos passar todos os atributos para o banco de dados.
    // usamos isto como uma forma de garantir a integridade dos itens que serao carregados na base de dados.
    protected $fillable = array('valor', 'nome', 'descricao', 'tamanho', 'quantidade');
}
