<?php
print"Los numeros registrados son :<P>";

$vrnum1 = $_REQUEST["num_1"];
$vrnum2 = $_REQUEST["num_2"];
$vrnum3 = $_REQUEST["num_3"];

echo "$vrnum1 <br>";
echo "$vrnum2 <br>";
echo "$vrnum3 <p>";
if ($vrnum1 > $vrnum2 and $vrnum1 > $vrnum3){
    echo "El numero mayor: ". $vrnum1;
}
elseif($vrnum2 > $vrnum1 and $vrnum2 > $vrnum3){
    echo" El numero mayor: ".$vrnum2;
}
elseif($vrnum3 > $vrnum1 and $vrnum3 > $vrnum2){
    echo" El numero mayor: ". $vrnum3;
}
echo "<P>";
echo '<a href="http://localhost/ADSI_2338368/ejercond_2/Formulario_3.php"><input type="submit" name="btn_enviar" value="Regresar"></a>';
?>






