<?php
echo"Datos del empleados:";
echo"<p>";
$vrnombres = $_REQUEST["text_nombres"];
$vrapellidos = $_REQUEST["text_apellidos"];
echo"Nombre : ".$vrnombres. "   ".$vrapellidos. "<br>";

$vrcargo = $_REQUEST["text_cargo"];
echo"Cargo : ".$vrcargo;
echo"<br>";
$vrsalario = $_GET["num_salario"];
echo"Salario: ". $vrsalario;
echo"<br>";
$vraumento = $vrsalario * 0.25;

echo"Aumento : ". $vraumento. "<br>";
$total =$vrsalario + $vraumento;
echo"Salario total : ". $total;
echo"<p></p>";

echo '<a href="http://localhost/ADSI_2338368/php_1/FORMULARIO%201.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'
?>