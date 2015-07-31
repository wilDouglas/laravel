@extends('app')
@section('content')

    <div class="container">
        <h1>Pessoas</h1>
        <ul>
            @foreach ($pessoas as $pessoa)
                <br>
                <li>Nome: {{ $pessoa->nome }} &nbsp; CPF: {{ $pessoa->cpf }} &nbsp; Email: {{$pessoa->email}}</li>
                <br>

            @endforeach
        </ul>
    </div>
@endsection