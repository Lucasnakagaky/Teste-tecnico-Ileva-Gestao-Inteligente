<?php
include_once('../formulario/config.php');

if (!empty($_GET['id'])) {

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM usuarios  WHERE id= $id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {

        while ($user_data = mysqli_fetch_assoc($result)) {


            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $senha = $user_data['senha'];
        }
    } else {
        header('Location: ../sistema/sistema.php');
    }
} else {
    header('Location: ../sistema/sistema.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de contatos</title>
    <link rel="stylesheet" href="css/edicaoStyle.css">
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
                <img src="img/pexels-photo.jpeg" alt="">

            </div>
            <div class="col-md-6 right">
                <div class="input-box">
                    <form action="saveEdit.php" method="post">
                        <header>Edição</header>
                        <div class="input-field">
                            <label for="nome">Nome</label>
                            <input type="text" class="input" name="nome" id="nome" value="<?php echo $nome ?>">

                        </div>
                        <div class="input-field">
                            <label for="email">E-mail</label>
                            <input type="text" class="input" name="email" id="email" value="<?php echo  $email ?>" required>

                        </div>
                        <div class="input-field">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="input" name="telefone" id="telefone" value="<?php echo  $telefone ?>" required>

                        </div>
                        <div class="input-field">
                            <label for="senha">Senha</label>
                            <input type="text" class="input" name="senha" id="senha" value="<?php echo  $senha ?>" required>

                        </div>
                        <div class="input-field">
                            <input type="hidden" name="id" value="<?php echo  $id ?>">
                            <input type="submit" class="btn btn-primary" name="update" id="submit" value="Salvar">
                        </div>
                        <div class="cancel">
                            <a href="../sistema/sistema.php" class="btn btn-danger">Cancelar</a>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>