<?php

include "connect.php";

$confirmacao = $_POST['email'];
$confirma_senha = $_POST['senha'];

$conf = $conn->query("SELECT * FROM dados WHERE email = '$confirmacao' AND senha = '$confirma_senha'");

if($linha = mysqli_fetch_array($conf)) {
    header("location: alterardados.html");

}
else{
    header("location: secaodestruida.html");
}


?>