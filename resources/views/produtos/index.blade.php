@extends('app')
@section('content')

    <div class="row">
        <div class="container">
            <a href="{{url('produtos/create')}}" class="btn btn-info">Adicionar Produto</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="container">
            <table class="table table-bordered table-responsive">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <td>{{$produto->id}}</td>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->descricao}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{url('produtos/'.$produto->id.'/edit')}}">Alterar</a>
                            <a class="btn btn-danger" href="{{ url('produtos/' . $produto->id . "/delete") }}">Remover</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection