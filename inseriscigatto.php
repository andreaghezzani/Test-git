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
      <h1>Inserisci un nuovo gatto:</h1>
      <form action="inseriscigattoDB.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Numero targa</label>
        <input name="ntarga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Inserisci numero targa" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Nome gatto</label>
        <input name="nomeg" type="text" class="form-control" id="exampleInputPassword1" placeholder="Inserisci nome gatto" required>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Razza</label>
        <input name="razza" type="text" class="form-control" id="exampleInputPassword1" placeholder="Inserisci razza" required>
        <small id="emailHelp" class="form-text text-muted">Assicurati che il gatto non sia già presente nel database</small>
      </div>
      <div class="form-group">
    <label for="exampleFormControlSelect1">Propietario</label>
    <select class="form-control" name="cf">
      <?php
      $query="SELECT * FROM propietario";
      $result=$connessione->query($query);
      while ($row=$result->fetch_assoc()) {
       ?>
      <option value="<?php echo $row["CF"]; ?>"><?php echo $row["Nominativo"]; ?></option>
    <?php } ?>
    </select>
  </div>
      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
    </div>
  </body>
</html>
