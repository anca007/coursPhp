<?php
if (isset($_REQUEST['login'])) {
    require_once 'connexion.php';

    $id = filter_var($_REQUEST['id'], FILTER_SANITIZE_NUMBER_INT);
    $name = htmlspecialchars($_REQUEST['name']);

    $sql = "SELECT * FROM proprietaires WHERE id_pers = :id AND nom = :name";

    $prep = $pdo->prepare($sql);
    $prep->bindValue('id', $id, PDO::PARAM_INT);
    $prep->bindValue('name', strtoupper($name), PDO::PARAM_STR);

    $prep->execute();

    $user = $prep->fetch(PDO::FETCH_ASSOC);
}

if (isset($_REQUEST['update'])){

    require_once 'connexion.php';
    $lastname = htmlspecialchars($_REQUEST['lastname']);
    $firstname = htmlspecialchars($_REQUEST['firstname']);
    $address = htmlspecialchars($_REQUEST['address']);
    $zp = htmlspecialchars($_REQUEST['zp']);
    $city = htmlspecialchars($_REQUEST['city']);
    $id = htmlspecialchars($_REQUEST['id']);

    $sql = 'UPDATE proprietaires SET 
                         nom = :lastname,
                         prenom = :firstname, 
                         adresse = :address, 
                         codepostal = :zp, 
                         ville = :city
                         WHERE id_pers = :id';

    $prep = $pdo->prepare($sql);

    $prep->bindValue('lastname', $lastname);
    $prep->bindValue('firstname', $firstname);
    $prep->bindValue('address', $address);
    $prep->bindValue('zp', $zp);
    $prep->bindValue('city', $city);
    $prep->bindValue('id', $id);

    $prep->execute();

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

<?php
if (!isset($user)) {
    ?>
    <form action="" method="post">
        <label for="">Numéro d'identification</label><input type="number" name="id"><br>
        <label for="">Nom de famille</label><input type="text" name="name"><br>
        <input type="submit" value="Connexion" name="login">
    </form>
<?php } else { ?>
    <form action="q3.php?idUser=<?= $user['id_pers'] ?>" method="post">
        <label for="">Nom de famille : </label><input type="text" value="<?= $user['nom'] ?>" name="lastname"><br>
        <label for="">Prénom : </label><input type="text" value="<?= $user['prenom'] ?>" name="firstname"><br>
        <label for="">Adresse : </label><input type="text" value="<?= $user['adresse'] ?>" name="address"><br>
        <label for="">Code Postal :</label><input type="text" value="<?= $user['codepostal'] ?>" name="zp"><br>
        <label for="">Ville :</label><input type="text" value="<?= $user['ville'] ?>" name="city"><br>
        <input type="hidden" value="<?= $user['id_pers'] ?>" name="id">
        <input type="submit" value="Modifier" name="update">
    </form>

<?php } ?>


</body>
</html>
