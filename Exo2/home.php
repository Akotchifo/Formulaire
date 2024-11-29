<?php
session_start();  
if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
} else {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>

    <h2>Bienvenue, <?php echo htmlspecialchars($name); ?> !</h2>
    <p>Votre adresse email est : <?php echo htmlspecialchars($email); ?></p>

</body>
</html>
