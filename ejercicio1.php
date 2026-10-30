<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcular índice de masa coporal</h1>

    <form action="ejercicio1.php" method="post">
        <label>Peso en Kg:</label>
        <input type="text" name="peso">
        <br><br>
        <label>Altura en metros:</label>
        <input type="text" name="altura">
        <br><br>
        <input type="submit" value="CALCULAR">
    </form>

    <?php
    if(isset($_REQUEST["peso"]) && isset($_REQUEST["altura"])){

    $peso = $_REQUEST["peso"];
    $altura = $_REQUEST["altura"];

    $indiceMasaCorporal = $peso / ($altura*$altura);

    echo("Su índice de masa corporal es: " . $indiceMasaCorporal);
    }
    ?>
</body>
</html>