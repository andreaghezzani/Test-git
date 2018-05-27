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
      <h1>Login</h1>
      <form action="loginDB.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Nome utente</label>
        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserisci utente" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Inserisci password" required>
      </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
    </div>
  </body>
</html>
