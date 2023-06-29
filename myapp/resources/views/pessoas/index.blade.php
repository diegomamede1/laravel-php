@extends('base')


@section('content')
    @foreach ($Pessoas as $Pessoa)
        <a href="{{ route('pessoas.show', $Pessoa) }}">
            <table>
                {{ $Pessoa->name }} <br>
                {{ $Pessoa->sobrenome }} <br>
                {{ $Pessoa->endereco }} <br>
                {{ $Pessoa->telefone }} <br>
                {{ $Pessoa->cpf }} <br>
            </table>
        </a>
        <hr>
    @endforeach
@endsection
