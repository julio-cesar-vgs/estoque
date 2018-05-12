<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

//correção do erro quando tentava fazer link de foreign key
    public function produtos(){
        return $this->hasMany('App\Produto');
    }
}
