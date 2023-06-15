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

<form action="q2t.php" method="post">
    <label for="">Identifiant</label><input type="text" name="id"><br>
    <label for="">Marque</label><input type="text" name="mark"><br>
    <labelfor="">Modèle</label><input type="text" name="model"><br>
    <label for="">Carburant</label>
    <input type="radio" name="fuel" value="essence"><label for="">Essence</label>
    <input type="radio" name="fuel" value="diesel"><label for="">Diesel</label>
    <input type="radio" name="fuel" value="GPL"><label for="">GPL</label>
    <input type="radio" name="fuel" value="electrique"><label for="">Electrique</label>
    <input type="submit" name="btnSubmit" value="Ajouter">
</form>

</body>
</html>
