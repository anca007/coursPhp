<?php
var_dump($_REQUEST);
if (isset($_REQUEST['name'])) { ?>
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
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Adresse</th>
                    <th>CP</th>
                    <th>Ville</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= htmlspecialchars($_REQUEST['name']) ?></td>
                    <td><?= htmlspecialchars($_REQUEST['firstname']) ?></td>
                    <td><?= htmlspecialchars($_REQUEST['address']) ?></td>
                    <td><?= htmlspecialchars($_REQUEST['zp']) ?></td>
                    <td><?= htmlspecialchars($_REQUEST['city']) ?></td>
                </tr>
            </tbody>
        </table>
    </body>
    </html>


    <?php
} else {

    //header("location: q1.html");
}
