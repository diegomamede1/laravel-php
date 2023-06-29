@extends('base')
@section('content')
    <div class="mx-auto row">
        <div class="col-12">
            <h1 class="text-center">
                Lista de usuários cadastrados
            </h1>
            <br>
            <a class="btn btn-success" href="{{ route('pessoas.create') }}"> <i class="fa-solid fa-plus"></i> Cadastrar
                usuário</a>
            <br>
            <br>
            <br>
            <table class="table table-striped">

                <tr>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Endereco</th>
                    <th>Telefone</th>
                    <th>Cpf</th>
                    <th>Ações</th>
                </tr>
                @foreach ($Pessoas as $Pessoa)
                    {{-- <a href="{{ route('pessoas.show', $Pessoa) }}"> --}}
                    <tr>
                        <td>{{ $Pessoa->nome }}</td>
                        <td>{{ $Pessoa->sobrenome }}</td>
                        <td>{{ $Pessoa->endereco }}</td>
                        <td>{{ $Pessoa->telefone }}</td>
                        <td>{{ $Pessoa->cpf }}</td>
                        <td><button class="btn btn-primary"> <i class="fa-solid fa-pen-ruler"></i> Editar</button>
                            <button class="btn btn-danger"> <i class="fa-solid fa-trash-can"></i> Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </table>

            {{ $Pessoas->links() }}
        </div>
    </div>
@endsection
