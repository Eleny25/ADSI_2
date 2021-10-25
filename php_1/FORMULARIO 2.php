<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PROMEDIO TIEMPOS</h1>
    <h2>FORMULARIO DE CAPTURA </h2>
    <br>
    <h3>Ingrese tiempos recorridos de los dias: </h3>
    <p></p>
    <form action="ejer_2.php" method = "get">
        <label>Lunes: </label>
        <input type="number" name="tiempo_1"><br>
        <label>Miercoles: </label>
        <input type="number" name="tiempo_2"><br>
        <label>Viernes: </label>
        <input type="number" name="tiempo_3"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>
</body>
</html>