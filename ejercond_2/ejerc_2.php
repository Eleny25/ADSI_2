<?php
print"Numero Registrados :<P>";

$vrnum1 = 10;
$vrnum2 = 20;
$vrnum3 = 15;
echo $vrnum1."   ".$vrnum2. "  ". $vrnum3. "<p>";
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