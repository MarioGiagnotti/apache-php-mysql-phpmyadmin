<?php
//includiamo la connessione al database
include 'connessione.php';

//selezioniamo gli utenti dalla tabella "utenti" del database "test_completo"
$sql = "SELECT * FROM utenti";
$result = $conn->query($sql);

//verifichiamo se ci sono risultati, estraiamo i dati e li visualizziamo in formato tabellare
if ($result->num_rows > 0) {    
    echo "<table border='1'><tr><th>ID</th><th>Cognome</th><th>Nome</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["Cognome"]. "</td><td>" . $row["Nome"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 risultati";
}
$conn->close();
?>