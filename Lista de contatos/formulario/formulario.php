<?php

if (isset($_POST['submit'])) {

    # Acessa
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,senha)
    VALUES ('$nome','$email','$telefone','$senha')");

    header("Location: ../login/login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de contatos</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">

                <!-------------      image     ------------->
                <img src="img/pexels-cottonbro-studio.jpg" alt="">

            </div>
            <div class="col-md-6 right">
                <div class="input-box">
                    <form action="listaDeContatos.php" method="post">
                        <header>Lista de Contatos</header>
                        <div class="input-field">
                            <label for="nome">Nome</label>
                            <input type="text" class="input" name="nome" id="nome">

                        </div>
                        <div class="input-field">
                            <label for="email">E-mail</label>
                            <input type="text" class="input" name="email" id="email" required>

                        </div>
                        <div class="input-field">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="input" name="telefone" id="telefone" required>

                        </div>
                        <div class="input-field">
                            <label for="senha">Senha</label>
                            <input type="password" class="input" name="senha" id="senha" required>

                        </div>
                        <div class="input-field">
                            <input type="submit" class="btn btn-primary" name="submit" id="submit" value="Cadastrar">
                        </div>
                        <div class="cancel">
                            <a href="../login/login.php" class="btn btn-danger">Cancelar</a>
                        </div>

                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>