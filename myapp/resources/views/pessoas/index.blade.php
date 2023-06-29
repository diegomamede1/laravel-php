@extends('base')

<style>
    table,
    th,
    td {
        border: 1px solid;
    }

    table {
        width: 100%;
    }

    /* table {
        width: 80%;
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    } */
</style>

@section('content')
    @foreach ($Pessoas as $Pessoa)
        <a href="{{ route('pessoas.show', $Pessoa) }}">
            <style>
                table,
                th,
                td {
                    border: 1px solid;
                }

                table {
                    width: 50%;
                }
            </style>

            <table>
                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Endereco</th>
                    <th>Telefone</th>
                    <th>Cpf</th>
                    <th>Ações</th>
                </tr>
                <tr>
                    <td>{{ $Pessoa->nome }}<br></td>
                    <td>{{ $Pessoa->sobrenome }}<br></td>
                    <td>{{ $Pessoa->endereco }}<br></td>
                    <td>{{ $Pessoa->telefone }}<br></td>
                    <td>{{ $Pessoa->cpf }}<br></td>
                    <td><button>Editar</button><br>
                        <button>Excluir</button></td>

                </tr><br>
            </table>

        </a>
        <hr>
    @endforeach
@endsection
