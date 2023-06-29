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
