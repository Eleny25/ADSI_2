<?php
$vr_dato= $_REQUEST["dato"];

if ($vr_dato=="A") {
    echo"tarjeta de credito";
}
    if ($vr_dato=="B") {
        echo"bono o cupon";
    }
        if ($vr_dato=="C") {
            echo"pago de contado";
        }

?>