<?php



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
    <p>Si vous avez pas un compte <a href="../espace_membre/login.php">Inscrivez-vous</a></p>
    <form method="post" action="index.php">
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email">
        <label for="mdp">Mot de passe</label>
        <input type="password" id="mdp" name="mdp" placeholder="mot de passe">
        <label for="mdp2">Confirmer mot de passe</label>
        <input type="password" id="mdp2" name="mdp2" placeholder="confirmer le mot de passe">
        <input type="submit" value="Inscription">
    </form>

</body>

</html>