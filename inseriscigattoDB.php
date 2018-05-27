<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="gattile";

$connessione = new mysqli($servername, $username, $password,$db);

if ($connessione->connect_error) {
    die("Conessione fallita: " . $connessione->connect_error."<br>");
}

$ntarga=$_POST["ntarga"];
$nomeg=$_POST["nomeg"];
$razza=$_POST["razza"];
$cf=$_POST["cf"];

$ntarga=ucfirst($ntarga);
$nomeg=ucfirst($nomeg);
$razza=ucfirst($razza);
$cf=ucfirst($cf);

$query="SELECT * FROM gatto WHERE NTarghetta=$ntarga";
$result=$connessione->query($query);
$row=$result->num_rows;
if ($row>0) {
  header("location:error.php?id=1");
}
else {
  $query="INSERT INTO Gatto(NTarghetta,Nome,Razza,codPropietario) VALUES ($ntarga,'$nomeg','$razza',$cf)";
  if ($connessione->query($query) === TRUE) {
      header("location:index.php");
  } else {
      echo "Errore nel inserimento del gatto: " . $connessione->error."<br>";
  }
}
?>
