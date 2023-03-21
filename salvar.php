<?php

include "connect.php";

$nomeusuario = $_POST["nomeusuario"];
$senha = $_POST["senha"];
$email = $_POST["email"];
$avatar = $_FILES["avatar"]["name"];
$tipo_de_usuario = $_POST["tipo_de_usuario"];

$separa = explode(".", $avatar);
$separa = array_reverse($separa);

$tipo = $separa[0];
$avatar_final = $nomeusuario . '.' . $tipo;

$pasta = "img/";

if (move_uploaded_file($_FILES['avatar']['tmp_name'], $pasta . $avatar_final)) {}
    else 
    {
    echo "Não foi possível concluir o upload da imagem.";
    }

//echo"'$nomeusuario' , '$senha', '$email', '$avatar', '$tipo_de_usuario'";

$conn ->query("INSERT INTO dados (nomeusuario, senha, email, avatar, tipo_de_usuario) VALUES ('$nomeusuario' , '$senha', '$email', '$avatar', '$tipo_de_usuario')");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Salvos</title>
    <link rel="stylesheet" type="text/CSS" href="salvar.css">
</head>
<body>
    <div>    
        <h2>Seus dados foram Salvos com sucesso!</h2>
        <br><br>
        <p class="p">Deseja excluir os dados?</p>
        <a href="excluir.html">
        <button class="botao">Ir para a pagina excluir dados</button>
        </a>
        <a href="registro.html">
        <button class="botao">Ir para a pagina de cadastro de dados</button>
        </a>
        <a href="listar.php">
        <button class="botao">Ir para a pagina da lista dos dados</button>
        </a>
    </div>
</body>
</html>