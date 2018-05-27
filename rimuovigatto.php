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
      <h1>Seleziona il codice targa del gatti:</h1>
      <form action="rimuovigattoDB.php" method="post">
      <div class="form-group">
    <label for="exampleFormControlSelect1">Propietario</label>
    <select class="form-control" name="NTarghetta">
      <?php
      $query="SELECT * FROM gatto";
      $result=$connessione->query($query);
      while ($row=$result->fetch_assoc()) {
       ?>
      <option value="<?php echo $row["NTarghetta"]; ?>"><?php echo $row["NTarghetta"]; ?></option>
    <?php } ?>
    </select>
  </div>
  <small id="emailHelp" class="form-text text-muted">Attenzione! una volta eliminato non sarà più possibile tornare indietro</small><br>
      <button type="submit" class="btn btn-danger">Elimina</button>
    </form>
    </div>
  </body>
</html>
