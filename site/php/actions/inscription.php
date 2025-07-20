<?php
require_once '../include/db.php'; // contient la connexion PDO

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO sit_utilisateur (utilisateur_pseudo, utilisateur_email, utilisateur_password)
            VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$pseudo, $email, $password]);

    session_start();
    $_SESSION['is_admin'] = true; // Ou false selon ton besoin

    header('Location: ../eco_ride.php?page=admin/profil');
    exit;
}
