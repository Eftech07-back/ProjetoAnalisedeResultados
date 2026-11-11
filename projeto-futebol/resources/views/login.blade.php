<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Projeto Resultados</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Criar Novo Usuário</h1>
        <form action="{{ route('usuarios.store') }}" method="POST">
            <div class="form-group mb-3"> <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control" minlength="6" required>
            </div>

            <div class="form-group mb-3">
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" id="data_nasc" name="data_nasc" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" class="form-control" maxlength="14">
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>

    </div>


    </label>
</body>

</html>