<?php

include "connect.php";



$email_antigo = $_POST["email_antigo"];
$email_novo = $_POST["email_novo"];


$conn->query("UPDATE dados SET email = '$email_novo' WHERE email = '$email_antigo'");

