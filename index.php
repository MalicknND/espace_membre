<?php
require('src/database.php');

if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {

    // On récupère les données du formulaire
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // voir si password et confirm_password sont identiques
    if ($password != $confirm_password) {
        echo "Les mots de passe ne sont pas identiques";
        header('location: ../espace_membre/?error=1&pass=1');
    }
    // On vérifie que l'email n'est pas déjà utilisé
    $req = $db->prepare("SELECT count(*) as numberEmail FROM users WHERE email = ?");
    $req->execute(array($email));

    while ($verif = $req->fetch()) {
        if ($verif['numberEmail'] != 0) {
            header('location: ../espace_membre/?error=1&email=1');
        }
    }

    // hash
    $secret = sha1($email) . time();
    $secret = sha1($secret) . time() . time();

    // cryptage du mot de passe
    $password = "aq1" . sha1($password . "1245") . "25";

    //  envoie de la requete de l'insertion 
    $req = $db->prepare("INSERT INTO users (username, email, password, secret) VALUES (?,?,?,?)");
    $req->execute(array($username, $email, $password, $secret));
    // on redirige vers la page de connexion
    header('location: ../espace_membre/?success=1');
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>Espace Membre</title>
</head>

<body>
    <h1>Inscription</h1>
    <p>Si vous avez dèja un compte <a href="../espace_membre/login.php">Connectez-vous</a></p>


    <?php
    if (isset($_GET['error'])) {
        if (isset($_GET['pass'])) {
            echo '<p id="error">Les mots de passe ne sont pas identiques</p>';
        } else if (isset($_GET['email'])) {
            echo '<p id="error">L\'adresse email est déjà utilisée</p>';
        }
    } else if (isset($_GET['success'])) {
        echo '<p id="success">Inscription validée</p>';
    }
    ?>
    <form method="post" action="../espace_membre/">
        <label for="pseudo">Username</label>
        <input type="text" id="pseudo" name="username" required placeholder="Username">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required placeholder="Email">
        <label for="mdp">Mot de passe</label>
        <input type="password" id="mdp" name="password" required placeholder="mot de passe">
        <label for="mdp2">Confirmer mot de passe</label>
        <input type="password" id="mdp2" name="confirm_password" required placeholder="confirmer le mot de passe">
        <input type="submit" value="Inscription">
    </form>

</body>

</html>