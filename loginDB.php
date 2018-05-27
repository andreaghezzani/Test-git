<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="gattile";

$connessione = new mysqli($servername, $username, $password,$db);

if ($connessione->connect_error) {
    die("Conessione fallita: " . $connessione->connect_error."<br>");
}

$nome=$_POST["nome"];
$password=$_POST["password"];

$file=fopen("accesso.txt","r");

$nomeTXT=fgets($file);

$passwordTXT=fgets($file);

$nomeTXT=trim($nome);
$passwordTXT=trim($password);

if ($nomeTXT==$nome && $passwordTXT==$password) {

}
else {
  header("location:error.php?id=4");
}
?>
