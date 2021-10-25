<?php

$vrnombre = "Ana";
$vrcontraseña = 123456;


switch ($vrnombre) {
    case 'Ana':
        echo "Bienvenida  $vrnombre  al programa";
        break;
    case  'Carlos':
        echo "Bienvenido  $vrnombre  al programa";
        break;
    default:
        echo "usuario no registrado ".$nombre;
        break;
}

?>