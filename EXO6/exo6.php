<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 7 EXO 6</title>
</head>

<body>
<?php if ((isset($_GET['envoi'])) || (isset($_POST['envoi']))) { ?>
    <p> <?php echo $_GET['civilite'] . ' ' . $_GET['lastname'] . ' ' . $_GET['firstname']; ?> </p> 
<?php } else { ?>
    <form action="index.php" method="get">
        <label for="civilite">Civilité</label>
        <select id="civilite" name="civilite">
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select>
        <label for="lastname">Votre nom</label>
        <input type="text" name="lastname" id="lastname">
        <label for="firstname">Votre prénom</label>
        <input type="text" name="firstname" id="firstname">
        <input type="submit" name="envoi" value="Envoyer">
    </form>
<?php } ?>
</body>
</html>