<?php

include "connect.php";

$nomeusuario = $_POST["nomeusuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$avatar = $_FILES["avatar"]["name"];
$tipo_de_usuario = $_POST["tipo_de_usuario"];

$conn->query("UPDATE dados SET nome = '$nomeusuario', senha = '$senha', email = '$email', avatar = '$avatar', tipo_de_usuario = '$tipo_de_usuario' WHERE email = $email");

echo"Dados Atualizados";



?>