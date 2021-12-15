<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 7 EXO 7</title>
</head>

<body>
    <form action='' method='POST' enctype="multipart/form-data">
        <select name='identity'>
            <option value='Mr'>Mr</option>
            <option value='Miss'>Mme</option>
        </select>
        <label>Nom: </label><input type='text' name='lastname'>
        <label>Prénom: </label><input type='text' name='firstname'>
        <label> Fichier: </label><input type="file" name='pdf'>
        <button type='submit' value='submit'> Envoyer </button>

        <?php
        if (!empty($_POST['identity']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_FILES['pdf'])) {
            echo $_POST['identity'] . ' ' . $_POST['lastname'] . ' ' .  $_POST['firstname'];
            echo ($_FILES['pdf']['name']);
            $fichier = pathinfo($_FILES['pdf']['name']);
            var_dump($fichier);
            echo ($fichier['extension']);
        }
        ?>
    </form>
</body>

</html>