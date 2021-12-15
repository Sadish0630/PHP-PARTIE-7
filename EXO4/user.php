<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 7 EXO 4 bis</title>
</head>

<body>
    <p>
        <?php
        echo 'Votre nom est : ' . $_POST['lastname'];
        ?>
    </p>
    <p>
        <?php
        echo 'Votre prénom est : ' . $_POST['firstname'];
        ?>
    </p>
</body>
</html>