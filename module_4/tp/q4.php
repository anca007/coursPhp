<?php
if (isset($_REQUEST['submit'])) {
    $ht = filter_var($_REQUEST['ht'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $tva = filter_var($_REQUEST['tva'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    $tvaPart = $ht * $tva / 100;
    $ttc = $ht + $tvaPart;
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
    <label>Prix HT :</label><input type="number" name="ht" step="0.01" value="<?php echo(isset($ht) ? $ht : '') ?>"> €
    <br>
    <label>Taux TVA</label><input type="number" name="tva" step="0.01" value="<?php echo(isset($tva) ? $tva : '') ?>"> %
    <br>
    <input type="submit" value="Calculer" name="submit">
    <br>
    <?php
    if (isset($tvaPart) && isset($ttc)) { ?>
        <label>Montant de la TVA :</label><input type="number" value="<?= $tvaPart ?>" disabled> €
        <br>
        <label>Montant TTC :</label><input type="number" value="<?= $ttc ?>" disabled> €
    <?php } ?>
</form>

</body>
</html>
