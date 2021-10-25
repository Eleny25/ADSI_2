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
        <label>Nombres: </label>
        <input type="text" name="text_nombres"><br>
        <label>Apellidos: </label>
        <input type="text" name="text_apellidos"><br>
        <label>Cargo: </label>
        <input type="text" name="text_cargo"><br>
        <label>Salario: </label>
        <input type="number" name="num_salario"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>
</body>
</html>