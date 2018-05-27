<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="gattile";

$connessione = new mysqli($servername, $username, $password,$db);

if ($connessione->connect_error) {
    die("Conessione fallita: " . $connessione->connect_error."<br>");
}
?>
<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Home</title>
    <style media="screen">
      .interno{
        text-align: center;
        margin-right: 40%;
        margin-left: 40%;
      }
    </style>
  </head>
  <body>
    <div class="interno">
      <h1>Tabella gatti</h1>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">NTarga</th>
      <th scope="col">Nome</th>
      <th scope="col">Razza</th>
      <th scope="col">CF Propietario</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $nominativo=$_POST["nominativo"];
    $query="SELECT NTarghetta,Nome,Razza,CF FROM gatto,propietario WHERE propietario.Nominativo='$nominativo' AND propietario.CF=gatto.codPropietario";
    $result=$connessione->query($query);
    while ($row=$result->fetch_assoc()) {
     ?>
    <tr>
      <th><?php echo $row["NTarghetta"] ?></th>
      <th><?php echo $row["Nome"] ?></th>
      <th><?php echo $row["Razza"] ?></th>
      <th><?php echo $row["CF"] ?></th>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
  </body>
</html>
