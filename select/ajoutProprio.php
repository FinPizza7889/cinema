<?php

include '../conf_server.php'; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion a échouée : " . $conn->connect_error);
}

$proprio = $_POST['proprio'];

$sql = "SELECT titre, realisateur, genre FROM films WHERE proprio = '$proprio'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Pour chaque ligne 
    while ($row = $result->fetch_assoc()) {

        echo $row["titre"] . ' réalisé par ' . $row["realisateur"] . ' (Genre : ' . $row["genre"] . ')';
        echo '<br>';
    }
} else {
    echo "Propriétaire inconnu.";
}

$result = $conn->query($sql);
$conn->close();

?>