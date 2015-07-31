<?php
/**
 * Created by PhpStorm.
 * User: William
 * Date: 31/07/15
 * Time: 10:47
 */

namespace MinhaAppTest\Http\Controllers;


use MinhaAppTest\Http\Requests\ProdutoRequest;
use MinhaAppTest\Produto;

class ProdutoController extends Controller
{
    public function index()
    {

        $produtos = Produto::all();
        return view('produtos.index', ["produtos" => $produtos]);
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(ProdutoRequest $request)
    {
        $input = $request->except('_token');
        Produto::create($input);

        return redirect('produtos');
    }

    public function delete($id)
    {
        Produto::find($id)->delete();
        return redirect('produtos');
    }

    public function edit($id){
        $produto = Produto::find($id);
        return view('produtos.edit',compact('produto'));
    }

    public function update(ProdutoRequest $request, $id){
        $produto = Produto::find($id)->update($request->all());
        return redirect('produtos');
    }
}