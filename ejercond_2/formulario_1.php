<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATOS DE EMPLEADOS </h1>
    <h2>FORMULARIO DE CAPTURA </h2>
    <br>
    <p></p>
    <h3>Ingrese los siguientes datos: </h3>
    <br>
    <form action="ejer_1.php" method = "get">
        <label>Nombre: </label>
        <input type="text" name="nombre"><br>
        <label>Cargo: </label>
        <input type="text" name="cargo"><br>
        <label>Valor venta: </label>
        <input type="number" name="venta"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>
</body>
</html>