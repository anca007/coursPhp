<?php
setcookie('monCookie', 'Sylvain', time() + 3600);
setcookie('monCookie2', 'Sylvain', time() + 3600);

//suppression d'un cookie
//setcookie('monCookie2');


var_dump($_COOKIE);