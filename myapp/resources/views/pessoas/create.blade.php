@extends('base')


@section('content')

    <h1>
        Formulário de cadastro de pessoas
    </h1>
    <hr>

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
        <label for="name">Nome: </label>
        <input type="text" name="nome" required />
        <br><br>
        <label for="sobrenome">Sobrenome: </label>
        <input type="text" name="sobrenome" required />
        <br><br>
        <label for="endereco">Endereço: </label>
        <input type="text" name="endereco" required />
        <br><br>
        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone" required />
        <br><br>
        <label for="cpf">CPF: </label>
        <input type="text" name="cpf" required />
        <br><br>
        <button type="submit">Enviar</button>
    </form>
@endsection
