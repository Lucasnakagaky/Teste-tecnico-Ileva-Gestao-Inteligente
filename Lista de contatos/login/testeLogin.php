<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    # Acessa

    include_once('../formulario/config.php');

    $email = ($_POST['email']);
    $senha = ($_POST['senha']);
    
    $sql = "SELECT * FROM usuarios WHERE  email = '$email' and senha = '$senha'"; 

    $result = $conexao -> query($sql);

    if(mysqli_num_rows($result) < 1){

        unset($_SESSION['email']);
        unset( $_SESSION['senha'] );
        header('Location: ../login/login.php');

    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: ../sistema/sistema.php');
    };

}
else{
    header('Location: login.php');
}


?>