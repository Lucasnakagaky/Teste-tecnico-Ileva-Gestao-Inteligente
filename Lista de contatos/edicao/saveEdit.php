<?php

if(isset($_POST['update'])){

    include_once('../formulario/config.php');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    $sqlUpdate = "UPDATE  usuarios 
    SET nome='$nome',email='$email',telefone='$telefone',senha='$senha'
    WHERE id=$id";

    $result = $conexao->query($sqlUpdate);
}

header('Location: ../sistema/sistema.php');


?>
