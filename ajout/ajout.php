<?php

include '../conf_server.php'; 

$conn = new mysqli($servername, $username, $password, $dbname);

$titre = $_POST['titre'];
$realisateur = $_POST['realisateur'];
$genre = $_POST['genre'];
$proprio = $_POST['proprio'];

$sql = "INSERT INTO films (titre, realisateur, genre, proprio) VALUES ('$titre', '$realisateur', '$genre', '$proprio')";

if (mysqli_query($conn, $sql)) {
    echo "Le film a été ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout du film : " . mysqli_error($conn);
}
$conn->close();

?>