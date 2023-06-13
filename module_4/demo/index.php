<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>

<form action="treatment.php" method="POST">
    <label for="login">Identifiant</label><input type="text" id="login" name="login"><br>
    <label for="password">Mot de passe</label><input type="password" id="password" name="password"><br>
    <label for="color">Couleur</label>
    <select name="color" id="color">
        <?php

        foreach (['red', 'purple', 'green'] as $color) {
            echo "<option value='$color'>$color</option>";
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Se connecter" name="submit">
</form>


</body>
</html>
