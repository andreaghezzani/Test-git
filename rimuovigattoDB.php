<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="gattile";

$connessione = new mysqli($servername, $username, $password,$db);

if ($connessione->connect_error) {
    die("Conessione fallita: " . $connessione->connect_error."<br>");
}

$ntarga=$_POST["NTarghetta"];
$ntarga=ucfirst($ntarga);

$query="SELECT * FROM gatto WHERE NTarghetta=$ntarga";
$result=$connessione->query($query);
$row=$result->num_rows;
if ($row==0) {
  header("location:error.php?id=2");
}
else {
$query="DELETE FROM gatto WHERE NTarghetta='$ntarga'";
  if ($connessione->query($query) === TRUE) {
      header("location:index.php");
  } else {
      echo "Errore nella cancellazione del gatto: " . $connessione->error."<br>";
  }
}
?>
