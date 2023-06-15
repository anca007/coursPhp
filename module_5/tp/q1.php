<?php
    require_once 'q1bis.php';
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
    <table>
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Carburant</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if($results){

                    foreach ($results as $modele){
                        echo '<tr>';
                        echo "<td>" . $modele['id_modele'] ."</td>";
                        echo "<td>" . $modele['marque'] ."</td>";
                        echo "<td>" . $modele['modele'] ."</td>";
                        echo "<td>" . $modele['carburant'] ."</td>";
                        echo '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>

</body>
</html>
