<?php
    if(isset($_REQUEST['submit'])){
        $choice = strip_tags($_REQUEST['submit']);
        header('location: ' . $choice . '.php');
    }
?>

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
<form method="post">
    <input type="submit" value="<h1>acheter</h1>" name="submit">
    <input type="submit" value="vendre" name="submit">
    <input type="submit" value="louer"name="submit">
</form>
</body>
</html>