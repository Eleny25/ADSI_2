<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PARTIDOS</h1>
    <h2>FORMULARIO DE CAPTURA </h2>
    <br>
    <p></p>
    <form action="ejer_3.php" method = "get">
        <label>Nombre del equipo: </label>
        <input type="text" name="nombre"><br>
        <label>Partidos ganados: </label>
        <input type="number" name="p_ganados"><br>
        <label>Partidos perdidos: </label>
        <input type="number" name="p_perdidos"><br>
        <label>Partidos empatados: </label>
        <input type="number" name="p_empatados"><br>

        <input type="submit" name="btn_enviar" value="Ejecutar">

    </form>
</body>
</html>