<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATOS DEL VENDEDOR </h1>
    <h2>FORMULARIO DE CAPTURA </h2>
    <br>
    <p></p>
    <h3>Ingrese los siguientes datos: </h3>
    <br>
    <form action="ejer_5.php" method = "get">
        <label>Nombre: </label>
        <input type="text" name="nombre"><br>
        <label>Apellidos: </label>
        <input type="text" name="apellidos"><br>
        <label>Suelo base: </label>
        <input type="num" name="sueldo"><br>
        <label>Valor venta 1: </label>
        <input type="num" name="venta1"><br>
        <label>Valor venta 2: </label>
        <input type="num" name="venta2"><br>
        <label>Valor venta 3: </label>
        <input type="num" name="venta3"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>
</body>
</html>
