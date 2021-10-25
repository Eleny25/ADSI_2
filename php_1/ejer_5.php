<?php

echo" SUELDO - VENDEDOR "."<p>";
$vrnombre = $_REQUEST["nombre"];
$vrapellidos = $_REQUEST["apellidos"];
echo "Nombre del vendedor: <p>";
echo "$vrnombre"."  "."$vrapellidos"."<p>";
$vrsueldob = $_REQUEST["sueldo"];
echo "Sueldo base :". $vrsueldob. "<br>";
$vrventa1 = $_GET["venta1"];
$vrventa2 = $_GET["venta2"];
$vrventa3 = $_GET["venta3"];

$comision = 0.10;
echo "Comisiones por 3 ventas: ";
$totalv = $vrventa1 + $vrventa2 + $vrventa3;
$totalc = $totalv * $comision;
echo "$totalc <br>";

$totals = $vrsueldob + $totalc;

echo " Su sueldo total sera de : ".$totals. "<p>";

echo '<a href="http://localhost/ADSI_2338368/php_1/FORMULARIO%205.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'

?>