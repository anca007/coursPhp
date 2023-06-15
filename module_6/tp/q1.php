<?php

$colors = ['white' => 'Blanc', 'chartreuse' => 'Vert', 'purple' => 'Violet', 'cornflowerblue' => 'Bleu'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
        <?php

            if(isset($_COOKIE['textColor'])){
                echo 'color : ' . htmlspecialchars($_COOKIE['textColor'] . ';');
            }
            if(isset($_COOKIE['backgroundColor'])){
                echo 'background-color : ' . htmlspecialchars($_COOKIE['backgroundColor'] . ';');
            }

        ?>
        }
    </style>
</head>
<body>

<form action="q1t.php" method="post">
    <label for="">Texte : </label>
    <select name="textColor">
        <?php
        foreach ($colors as $key => $color) {
            echo "<option value='$key'>$color</option>";
        }
        ?>
    </select>
    <br>
    <label for="">Fond : </label>
    <select name="backgroundColor">
        <?php
        foreach ($colors as $key => $color) {
            echo "<option value='$key'>$color</option>";
        }
        ?>
    </select>
    <br>
    <input type="submit" value="Modifier" name="btnSubmit">

</form>
</body>
</html>
    





