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
      <th scope="col">Codice fiscale</th>
      <th scope="col">Nominativo</th>
      <th scope="col">Città</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $citta=$_POST["citta"];
    $query="SELECT * FROM propietario WHERE Citta='$citta'";
    $result=$connessione->query($query);
    while ($row=$result->fetch_assoc()) {
     ?>
    <tr>
      <th><?php echo $row["CF"] ?></th>
      <th><?php echo $row["Nominativo"] ?></th>
      <th><?php echo $row["Citta"] ?></th>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
  </body>
</html>
