<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 30/07/2015
 * Time: 19:32
 */

namespace MinhaAppTest\Http\Controllers;


use MinhaAppTest\Pessoa;

class PessoaController extends Controller
{

    public function index(){
//
//        $nome = "William Silva";
//        $pessoa = new Pessoa();
//        $pessoa->nome = $nome;
//        $pessoa->cpf = "11860453619";
//        $pessoa->email = "williamsilva808@hotmail.com";
//        $pessoa->save();
//        $pessoa = Pessoa::find(1);
//
//        var_dump($pessoa->nome);

        $pessoas = Pessoa::all();

        return view('pessoas',['pessoas' => $pessoas]);
    }

    public function teste(){
        return view('welcome');
    }
}