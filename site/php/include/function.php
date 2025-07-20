<?php
function enregistrerNouvelUtilisateur(PDO $pdo, string $pseudo, string $email, string $password): bool {
    // Vérifie si l'utilisateur existe déjà (par email ou pseudo)
    $verif = $pdo->prepare("SELECT COUNT(*) FROM sit_utilisateur WHERE utilisateur_email = ? OR utilisateur_pseudo = ?");
    $verif->execute([$email, $pseudo]);

    if ($verif->fetchColumn() > 0) {
        return false; // utilisateur déjà existant
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("
        INSERT INTO sit_utilisateur (utilisateur_pseudo, utilisateur_email, utilisateur_password)
        VALUES (?, ?, ?)
    ");

    return $stmt->execute([$pseudo, $email, $hashedPassword]);
}
