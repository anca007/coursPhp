<?php

if (isset($_REQUEST['btnSubmit'])) {

    $textColor = htmlspecialchars($_REQUEST['textColor']);
    $backgroundColor = htmlspecialchars($_REQUEST['backgroundColor']);

    setcookie('textColor', $textColor);
    setcookie('backgroundColor', $backgroundColor);
}

header('location: q1.php');


