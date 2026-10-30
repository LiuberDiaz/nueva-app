<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Introduce los números que recuerdes</h1>
    <form action="recibir.php" method="post">
        <label>1:</label>
        <input type="text" name="num1">

        <br>
        <label>2:</label>
        <input type="text" name="num2">

        <br>
        <label>3:</label>
        <input type="text" name="num3">

        <br>
        <label>4:</label>
        <input type="text" name="num4">

        <br>
        <label>5:</label>
        <input type="text" name="num5">

        <br>
        <label>6:</label>
        <input type="text" name="num6">

        <br>
        <label>7:</label>
        <input type="text" name="num7">

        <br>
        <label>8:</label>
        <input type="text" name="num8">

        <br>
        <label>9:</label>
        <input type="text" name="num9">

        <br>
        <label>10:</label>
        <input type="text" name="num10">

        <br><br>
        <input type="submit" value="Comprobar">

    </form>

    <?php
    if (
        isset($_REQUEST["num1"]) && isset($_REQUEST["num2"]) && isset($_REQUEST["num3"])
        && isset($_REQUEST["num4"]) && isset($_REQUEST["num5"]) && isset($_REQUEST["num6"])
        && isset($_REQUEST["num7"]) && isset($_REQUEST["num8"]) && isset($_REQUEST["num9"]) && isset($_REQUEST["num10"])
    ) {
        $num1 = $_REQUEST["num1"];
        $num2 = $_REQUEST["num2"];
        $num3 = $_REQUEST["num3"];
        $num4 = $_REQUEST["num4"];
        $num5 = $_REQUEST["num5"];
        $num6 = $_REQUEST["num6"];
        $num7 = $_REQUEST["num7"];
        $num8 = $_REQUEST["num8"];
        $num9 = $_REQUEST["num9"];
        $num10 = $_REQUEST["num10"];
    }



    ?>


</body>

</html>