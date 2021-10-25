<?php
echo"PORCENTAJE DE HOMBRES Y MUJERES"."<p>";

$vrhombres = $_REQUEST["hombres"];
$vrmujeres = $_REQUEST["mujeres"];

$total = $vrhombres + $vrmujeres;

$porcentaje1 = $vrhombres / $total * 100;
$porcentaje2 = $vrmujeres / $total * 100;

echo " El porcentaje de hombres es: ".$porcentaje1. "<p>";
echo " El porcentaje de mujeres es: ".$porcentaje2. "<p>";


echo '<a href="http://localhost/ADSI_2338368/php_1/FORMULARIO%204.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'
?>