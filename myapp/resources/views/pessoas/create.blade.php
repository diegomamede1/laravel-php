@extends('base')
@section('content')

    <div class="mx-auto" style="width: 1350px;">

            <h5>
                Lista de usuários cadastrados:
            </h5>
            <a class="btn btn-primary" href="{{ route('pessoas.index') }}"> <i class="fa-solid fa-rectangle-list"></i> Listar</a>

        <br>
        <br>

        <h1>
            Formulário de cadastro de pessoas
        </h1>
        <br>

        @if (!empty(session('success')))
            {{ session('success') }}
        @endif

        @if ($errors->all())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <form method="POST" action="{{ route('pessoas.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nome: </label>
                <input type="text" class="form-control" name="nome" required />
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome: </label>
                <input type="text" class="form-control" name="sobrenome" required />
            </div>
            <div class="form-group">
                <label for="endereco">Endereço: </label>
                <input type="text" class="form-control" name="endereco" required />
            </div>
            <div class="form-group">
                <label for="telefone">Telefone: </label>
                <input type="text" class="form-control" name="telefone" required />
            </div>
            <div class="form-group">
                <label for="cpf">CPF: </label>
                <input type="text" class="form-control" name="cpf" required />
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
        <br>
    </div>


@endsection
