<?php
$dbHost = 'Localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'lista-de-contatos';

$conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

/* if($conexao -> connect_errno){
    echo"Erro";
} else {
    echo "Coneção efetuada com Sucesso!!!";
} */

?>