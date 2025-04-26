<?php
$servername = "db";
$username = "root";
$password = "root";
$dbname = "test_completo";

// Crea connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica connessione
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>