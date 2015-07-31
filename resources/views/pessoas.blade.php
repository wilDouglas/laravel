@extends('app')
@section('content')

    <div class="container">
        <h1>Pessoas</h1>
        <table class="table table-responsive">
            <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($pessoas as $pessoa)

                <tr>
                    <td>{{$pessoa->nome}}</td>
                    <td>{{$pessoa->cpf}}</td>
                    <td>{{$pessoa->email}}</td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>

@endsection