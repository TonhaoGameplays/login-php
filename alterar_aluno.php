<?php

include "connect.php";

$nome = $_POST["nomeusuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$avatar = $_FILES["avatar"];
$tipo = $_POST["tipo_de_usuario"];


if($dados = $conn->query("UPDATE dados SET email = '$email', nomeusuario = '$nome', senha = '$senha', avatar = '$avatar', tipo_de_usuario = '$tipo'")){
    header("location: sucesso1.html");
}
else{
    echo $nome, $senha, $email;
}

