<?php
session_start();

include "connect.php";

$email = $_POST["email"];
$senha = $_POST["senha"];

$logar = $conn->query("SELECT * FROM dados WHERE email ='$email' AND senha = '$senha'");
while ($linha = mysqli_fetch_array($logar)) {
    $tipo = $linha['tipo_de_usuario'];
    $avatar = $linha['avatar'];
    $nome = $linha['nomeusuario'];

}

$contagem = mysqli_num_rows($logar);

if ($contagem == 1) {
    $_SESSION['email_session'] = $email;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['tipo_session'] = $tipo;
    $_SESSION['avatar_session'] = $avatar;
    $_SESSION['nome_session'] = $nome;
    //vai liberar o acesso á pagina principal
    header("location: sucesso.html");
} 
else {
    //Destruir seção

    unset($_SESSION['email_session']);
    unset($_SESSION['senha_session']);
    unset($_SESSION['tipo_session']);

    include "secaodestruida.html";
}


?>



