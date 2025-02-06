<?php


$servername = "localhost";
$database = "u392805314_portal";
$username = "u392805314___portale";
$password = "kMs6#@*ksdsKHsSOp29&1sds3NS";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
//echo "Conexão realizada com sucesso";

?>