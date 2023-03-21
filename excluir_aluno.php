<?php


include "connect.php";
$email = $_POST["Email"];
$senha = $_POST["senha"];

$selecao = $conn->query("SELECT * FROM dados WHERE email = '$email' AND senha = '$senha'");

if($uai = mysqli_fetch_array($selecao))
{
$conn->query("DELETE FROM dados WHERE email = '$email' AND senha = '$senha'");
    header("location: exclusao_concluida.html");
}
else{
    header("location: exclusao_invalida.html");
}



?>



