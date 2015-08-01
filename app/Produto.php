<?php

namespace MinhaAppTest;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $fillable = ['nome','descricao'];

    public function avaliacoes(){
        return $this->hasMany('MinhaAppTest\AvaliacaoProduto');
    }

    public function tags(){
        return $this->belongsToMany('MinhaAppTest\Tag');
    }
}
