<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $motdepass = $_POST['motdepass'];

    // Connexion à la base de données
    $conn = new mysqli('localhost', 'root', '', 'lassal');

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connexion échouée: " . $conn->connect_error);
    }

    // Préparer et exécuter la requête d'insertion
    $sql = "INSERT INTO responsable (nom, prenom, email, motdepass) VALUES ('$nom', '$prenom', '$email', '$motdepass')";

    if ($conn->query($sql) === TRUE) {
        echo "Inscription réussie";
    
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
?>
