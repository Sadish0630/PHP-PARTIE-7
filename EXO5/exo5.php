<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 7 EXO 5</title>
</head>

<body>
    <h1>Formulaire</h1>
    <form action="index.php">
            <label>Vous êtes : </label>
        <select name="sex">
            <option value="Monsieur">Monsieur</option>
            <option value="Madame">Madame</option>
        </select>
            <label>Votre nom : </label><input type="text" name="firstname">
            <label>Votre prénom : </label><input type="text" name="lastname">
            <input type="submit" value="S'inscrire">
        <?php
        if (isset($_GET['sex']) && isset($_GET['firstname']) && isset($_GET['lastname'])) {
            echo 'Vous êtes, ' . $_GET['sex'] . ' ' . $_GET['firstname'] . ' ' .  $_GET['lastname'];
        }
        ?>
    </form>
</body>

</html>