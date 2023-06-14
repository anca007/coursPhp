<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if (isset($_REQUEST['submit'])) {

    echo "Mail : " . htmlspecialchars($_REQUEST['mail']) .
        "<br> Navigateur : " . htmlspecialchars($_REQUEST['browser']);

} else {
    ?>

    <form>
        <label for="">Email</label><input type="text" name="mail">
        <input type="hidden" name="browser" value="<?= $_SERVER['HTTP_USER_AGENT'] ?>">
        <input type="submit" value="Valider" name="submit">
    </form>

<?php } ?>
</body>
</html>

<?php



