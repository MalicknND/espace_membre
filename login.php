<?php

session_start(); // On démarre la session AVANT toute chose

if (isset($_SESSION['connect'])) {
    header('location: ../espace_membre/');
}

require('src/database.php');

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    // On récupère les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];
    $error = 1;

    // cryptage du mot de passe
    $password = "aq1" . sha1($password . "1245") . "25";

    // On vérifie que l'email et le mot de passe sont corrects

    $req = $db->prepare('SELECT * FROM users WHERE email = ?');
    $req->execute(array($email));

    while ($user = $req->fetch()) {
        if ($password == $user['password']) {
            $error = 0;
            // session
            $_SESSION['connect'] = 1;
            $_SESSION['username'] = $user['username'];

            if ($_POST['connect']) {
                setcookie('log', $user['secret'], time() + 365 * 24 * 3600, '/', null, false, true);
            }
            header('location: ../espace_membre/login.php?success=1');
        }
    }
    if ($error == 1) {
        header('location: ../espace_membre/login.php?error=1');
    }
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>Login</title>
</head>

<body>
    <h1>Connexion</h1>
    <p>Si vous avez pas un compte <a href="../espace_membre/">Inscrivez-vous</a></p>
    <?php

    if (isset($_GET['error'])) {
        echo '<p id="error">Adresse email ou mot de passe incorrect</p>';
    } else if (isset($_GET['success'])) {
        echo '<p id="success">Vous êtes connecté</p>';
    }
    ?>
    <form method="post" action="login.php">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required placeholder="Email">
        <label for="mdp">Mot de passe</label>
        <input type="password" id="mdp" name="password" required placeholder="mot de passe">
        <label for="connect"><input type="checkbox" checked id="connect" name="connect">Connexion automatique</label>

        <input type="submit" value="Connexion">
    </form>
</body>

</html>