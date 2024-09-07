<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_cl = $_POST['nom_cl'];
    $prenom_cl = $_POST['prenom_cl'];
    $prix = $_POST['prix'];
    $date_inscp = $_POST['date_inscp'];

    // Connexion à la base de données
    $conn = new mysqli('localhost', 'root', '', 'lassal');

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO client (nom_cl, prenom_cl, prix, date_inscp) VALUES ('$nom_cl', '$prenom_cl', '$prix', '$date_inscp')";

    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie";
    
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
?>