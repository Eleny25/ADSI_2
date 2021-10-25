<?php
echo"TORNEO DE APERTURA <br>";
echo"<br>";
$vrnombre = $_GET ["nombre"];
$vrpartidog = $_REQUEST ["p_ganados"];
$vrpartidosp = $_REQUEST ["p_perdidos"];
$vrpartidose = $_REQUEST ["p_empatados"];


echo "Nombre del equipo: <p>";

echo "$vrnombre <p>";

echo "Puntos por:  <br>";
$vr1 = $vrpartidog * 3;
$vr2 = $vrpartidosp * - 1;
$vr3 = $vrpartidose * 1;

echo "Partidos ganados: ".$vr1. "<br>";
echo "Partidos perdidos: ".$vr2. "<br>";
echo "Partidos empatados: ".$vr3."<br>";
$suma = $vr1 + $vr2 + $vr3;
echo"<br>";
echo "Puntaje optenido: <br>";
echo $suma. "<p>";

echo '<a href="http://localhost/ADSI_2338368/php_1/FORMULARIO%203.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'
?>