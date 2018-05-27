<?php
$servername = "localhost";
$username = "root";
$password = "";

$connessione = new mysqli($servername, $username, $password);

if ($connessione->connect_error) {
    die("Conessione fallita: " . $connessione->connect_error."<br>");
}
echo "Connected effettuata!<br>";

$query = "DROP DATABASE gattile";
if ($connessione->query($query) === TRUE) {
    echo "Database cancellato!<br>";
} else {
    echo "Errore nel cancellazione del database: " . $connessione->error."<br>";
}

$query = "CREATE DATABASE gattile";
if ($connessione->query($query) === TRUE) {
    echo "Database creato con successo<br>";
} else {
    echo "Errore nella cancellazione del database: " . $connessione->error."<br>";
}

$connessione->query("USE gattile");

if ($connessione->connect_error) {
    die("Conessione fallita: " . $connessione->connect_error."<br>");
}

$query = "CREATE TABLE Propietario (
CF INT(11) PRIMARY KEY,
Nominativo VARCHAR(24) NOT NULL,
Citta VARCHAR(24)
)";
if ($connessione->query($query) === TRUE) {
    echo "Tabella creata con successo<br>";
} else {
    echo "Errore nella creazione della tabella: " . $connessione->error."<br>";
}

$query = "CREATE TABLE Gatto (
NTarghetta INT(11) PRIMARY KEY,
Nome INT(11) NOT NULL,
Razza VARCHAR(24),
codPropietario INT(11),
FOREIGN KEY (codPropietario) REFERENCES Propietario(CF)
)";
if ($connessione->query($query) === TRUE) {
    echo "Tabella creata con successo<br>";
} else {
    echo "Errore nella creazione della tabella: " . $connessione->error."<br>";
}

?>
