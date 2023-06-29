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
                    <th>#</th>
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
                        <td>{{ $Pessoa->id }}</td>
                        <td>{{ $Pessoa->nome }}</td>
                        <td>{{ $Pessoa->sobrenome }}</td>
                        <td>{{ $Pessoa->endereco }}</td>
                        <td>{{ $Pessoa->telefone }}</td>
                        <td>{{ $Pessoa->cpf }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('pessoas.edit', $Pessoa) }}">
                                <i class="fa-solid fa-pen-ruler"></i>
                                Editar
                            </a>
                            <a class="btn btn-danger" href="{{ route('pessoas.destroy', $Pessoa) }}">
                                <i class="fa-solid fa-trash-can"></i>
                                Excluir
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>

            {{ $Pessoas->links() }}
        </div>
    </div>
@endsection
