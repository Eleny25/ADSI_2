<?php
 echo "Promedio de tiempo de una persona en recorrer una ruta <br>";
 echo "<br>";
 echo "<br>";
 echo "Tiempos obtenidos durante la semana: <br>";

 $vrlunes = $_REQUEST["tiempo_1"];
 $vrmiercoles= $_REQUEST["tiempo_2"];
 $vrviernes = $_REQUEST["tiempo_3"];
 echo " Dia Lunes: ".$vrlunes."<br>";
 echo " Dia Miercoles: ".$vrmiercoles."<br>";
 echo "Dia Viernes: ".$vrviernes."<br>";
 $suma = $vrlunes + $vrmiercoles + $vrviernes;
 $promedio = $suma / 3;
 echo "<br>";
 echo "El promedio de los tiempos recorridos es: ". $promedio."<br>";
 echo"<p>";
 
 echo '<a href="http://localhost/ADSI_2338368/php_1/FORMULARIO%202.php"><input type="submit" name="btn_enviar" value="Regresar"></a>'


?>