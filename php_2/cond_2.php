<?php
$vr_anio= $_REQUEST["num_año"];
$vr_resul = 2021 - $vr_anio;

if ($vr_anio ==0) {
    echo"El año digitado es incorrecto";
}elseif($vr_resul >= 18) {
    echo"Es mayor de edad";
    echo"Su edad es: ".$vr_resul;
}else{
    echo"Es menor de edad". $vr_resul;
}