<?php
print " valor ventas de un vendedor <br>";
$vrnombre = $_REQUEST["nombre"];
$vrcargo = $_REQUEST["cargo"];
$vrventa = $_REQUEST["venta"];

if ($vrventa < 100000) {
    $vrtotal = $vrventa * 0.02 + $vrventa;

    echo "su valor total de ventas mas comision es: " . $vrtotal;
}
    elseif ($vrventa >= 100000 or $vrventa < 200000) {
        $vrtotal = $vrventa * 0.04 + $vrventa;

        echo "su valor total de ventas mas comision es: " . $vrtotal;
    }
        elseif ($vrventa >= 200000 or $vrventa < 400000) {
            $vrtotal = $vrventa * 0.06 + $vrventa;

            echo "su valor total de ventas mas comision es: " . $vrtotal;
        }
            elseif ($vrventa >= 400000 or $vrventa < 600000) {
                $vrtotal = $vrventa * 0.08 + $vrventa;

                echo "su valor total de ventas mas comision es: " . $vrtotal;
            }
                elseif ($vrventa >= 600000 or $vrventa < 1000000) {
                    $vrtotal = $vrventa * 0.10 + $vrventa;

                    echo "su valor total de ventas mas comision es: " . $vrtotal;
                }
                    elseif ($vrventa >= 1000000) {
                        $vrtotal = $vrventa * 0.20 + $vrventa;

                        echo "su valor total de ventas mas comision es: " . $vrtotal;
                    }

echo"<br>";
echo '<a href="http://localhost/ADSI_2338368/ejercond_2/formulario_1.php"><input type="submit" name="btn_enviar" value="Regresar"></a>';