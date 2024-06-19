@extends('layouts.app')

@section('conteudo')
    <div class="cabecalho">
        <h2>Calculadora</h2>
        <a href="/create">Criar Novo</a>
    </div>
    <div class="container">
        <table class="grid">
            <tr>
                <td>Número 1</td>
                <td>Operação</td>
                <td>Número 2</td>
                <td>Resultado</td>
            </tr>
            @foreach($resultados as $resultado)
            <tr>
                <td>{{ $resultado->num1 }}</td>
                <td>{{ $resultado->operacao }}</td>
                <td>{{ $resultado->num2 }}</td>
                <td>{{ $resultado->resultado }}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection