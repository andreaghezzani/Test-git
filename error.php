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
      }
    </style>
  </head>
  <body>
    <div class="interno">
      <?php
      $id=$_GET["id"];
      if ($id==0) { //errore insert propietario
        ?>
        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">inserimento del Propietario fallito!</h4>
          <p>Il propetario che hai tentato di inserire già esiste nel database.</p>
          <hr>
          <p class="mb-0">vuoi ritentare a reinserirlo? ritorna <a href="inseriscipropietario.php">qua!</a> </p>
        </div>
        <?php
      }
      if ($id==1) {   //errore insert gatto
        ?>
        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">inserimento del gatto fallito!</h4>
          <p>Il gatto che hai tentato di inserire già esiste nel database.</p>
          <hr>
          <p class="mb-0">vuoi ritentare a reinserirlo? ritorna <a href="inseriscigatto.php">qua!</a> </p>
        </div>
        <?php
      }
      if ($id==2) { //errore canc gatto
        ?>
        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">cancellazione del gatto fallito!</h4>
          <p>Il gatto che hai tentato di cancellare non esiste nel database.</p>
          <hr>
          <p class="mb-0">vuoi ritentare a reinserirlo? ritorna <a href="rimuovigatto.php">qua!</a> </p>
        </div>
        <?php
      }
      if ($id==3) {  //errore di autenticazione
        ?>
        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">Non sei autenticato!</h4>
          <p>Hai tentato di accedere ad una pagina privata agli utenti.</p>
          <hr>
          <p class="mb-0">vuoi effettuare il login? vai <a href="login.php">qua!</a> </p>
        </div>
        <?php
      }
      if ($id==4) {  //errore di autenticazione cred errate
        ?>
        <div class="alert alert-danger" role="alert">
          <h4 class="alert-heading">credenziali errate!</h4>
          <p>Le credenziali che hai inserito sono errate.</p>
          <hr>
          <p class="mb-0">vuoi riprovare? vai <a href="login.php">qua!</a> </p>
        </div>
        <?php
      }
       ?>
    </div>
  </body>
</html>
