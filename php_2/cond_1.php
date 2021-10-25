<?php
$vr_anio= $_REQUEST["num_año"];
$vr_resul = 2021 - $vr_anio;

if ($vr_resul >=18) {
    echo"Mayor de edad".$vr_resul;
}else{
    echo"Es menor de edad".$vr_resul;
    ;
}

echo '<a href="http://localhost/ADSI_2338368/php_2/Formulario_1.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'


?>