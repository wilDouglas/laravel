@extends('app')
@section('content')
    <div class="container">
        <h1>Novo Produto</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form action="{{url('produtos/' . $produto->id . "/update")}}" method="post" accept-charset="UTF-8">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" value="{{$produto->nome}}" class="form-control" name="nome">
            </div>
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" id="descricao" value="{{$produto->descricao}}" class="form-control" name="descricao">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Alterar Produto">
            </div>
        </form>
    </div>
@endsection