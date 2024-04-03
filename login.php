<?php



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
    <form method="post" action="login.php">

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email">
        <label for="mdp">Mot de passe</label>
        <input type="password" id="mdp" name="mdp" placeholder="mot de passe">
        <input type="submit" value="Inscription">
    </form>
</body>

</html>