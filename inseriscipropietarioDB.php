<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="gattile";

$connessione = new mysqli($servername, $username, $password,$db);

if ($connessione->connect_error) {
    die("Conessione fallita: " . $connessione->connect_error."<br>");
}

$cf=$_POST["cf"];
$nominativo=$_POST["nominativo"];
$citta=$_POST["citta"];

$cf=ucfirst($cf);
$nominativo=ucfirst($nominativo);
$citta=ucfirst($citta);

$query="SELECT * FROM Propietario WHERE CF='$cf'";
$result=$connessione->query($query);
$row=$result->num_rows;
if ($row>0) {
  header("location:error.php?id=0");
}
else {
  $query="INSERT INTO Propietario(CF,Nominativo,Citta) VALUES ($cf,'$nominativo','$citta')";
  if ($connessione->query($query) === TRUE) {
      header("location:index.php");
  } else {
      echo "Errore nel inserimento del propietario: " . $connessione->error."<br>";
  }
}
?>
