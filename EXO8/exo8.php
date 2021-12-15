<?php
$allowedExtension = ['pdf'];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARTIE 7 EXO 8</title>
</head>
<body>
    <?php
    $typemimeVerif = $_FILES['files']['type'];
    $extensionFiles = strtolower(pathinfo($_FILES['files']['name'])['extension']);
    if (((!empty($_POST['firstname'])) && (!empty($_POST['lastname'])) && (!empty($_FILES['files']) && (in_array($extensionFiles,$allowedExtension)) && $typemimeVerif == 'application/pdf'))) { ?>
        <p><?= $_POST['civility'] ?></p>
        <p><?= $_POST['firstname'] ?></p>
        <p><?= $_POST['lastname'] ?></p>
        <p><?= $_FILES['files']['name'] ?></p>
        <p>extension valide</p>
    <?php } else { ?>
            <form action="" method="post" enctype="multipart/form-data">
            <label for="id">Civilité :</label>
            <select name="civility" id="civilitySelect">
                <option value="Mr">Mr</option>
                <option value="Mme">Mme</option>
            </select>
            <label>Nom :</label>
            <input type="text" name="lastname">
            <label>Prénom :</label>
            <input type="text" name="firstname">
            <input type="file" name="files" />
            <input type="submit" name="submit" value="Envoyez">
        </form>
    <?php } ?>  
</body>
</html>
