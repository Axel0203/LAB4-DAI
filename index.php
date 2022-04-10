<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB4-Desarrollo de Aplicaciones en Internet</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="carrusel">
        <div class="contenido">
            
            <form action="index.php" class="myform" method="get">
                <h1>Ejercicio 1</h1>
                <?php
                $nombre = $_GET["nombre"];
                $email = $_GET["email"];
                $direccion = "?nombre=Axel&email=axndct2003@gmail.com";
                ?>
                <label for="e1-nombre">Nombre del usuario</label>
                <input type="text" id="e1-nombre" value="<?=$nombre?>" readonly><br>
                <label for="e2-email">Email del usuario</label>
                <input type="email" id="e2-email" value="<?=$email?>" readonly><br>
                <a href="<?=$direccion?>">EJECUTAR</a>
            </form>

            <form action="index.php" class="myform" method="get">
                <h1>Ejercicio 2</h1>
                <?php
                $num1 = $_GET["num1"];
                $num2 = $_GET["num2"];
                $num3 = $_GET["num3"];
                $num4 = $_GET["num4"];
                $suma = $num1 + $num2;
                $producto = $num3 * $num4;
                $direccion2 = "?num1=10&num2=20&num3=30&num4=40";
                ?>
                <label for="e2-num1">Número 1</label>
                <input type="number" id="e2-num1" value="<?=$num1?>" readonly><br>
                <label for="e2-num2">Número 2</label>
                <input type="number" id="e2-num2" value="<?=$num2?>" readonly><br>
                <label for="e2-num3">Número 3</label>
                <input type="number" id="e2-num3" value="<?=$num3?>" readonly><br>
                <label for="e2-num4">Número 4</label>
                <input type="number" id="e2-num4" value="<?=$num4?>" readonly><br>
                <a href="<?=$direccion2?>">EJECUTAR</a>
                <label for="resultado1">Resultado 1</label>
                <input type="text" id="resultado1" value="<?=$suma?>" readonly><br>
                <label for="resultado2">Resultado 2</label>
                <input type="text" id="resultado2" value="<?=$producto?>" readonly><br> 
                
            </form>
            <form action="index.php" class="myform" method="get">
                <h1>Ejercicio 3</h1>
                <?php
                $num1_1 = $_GET["e3-num1"];
                $num2_1 = $_GET["e3-num2"];
                if (intval($num1_1) > intval($num2_1)) {
                    $op1 = intval($num1_1) + intval($num2_1);
                    $op2 = $num1_1 - $num2_1; 
                } else {
                    $op1 = intval($num1_1) * intval($num2_1);
                    $op2 = intval($num2_1) / intval($num1_1);
                }
                ?>
                <label for="e3-num1">Número 1</label>
                <input name="e3-num1" type="number" id="e3-num1" value="<?=$num1_1?>"><br>
                <label for="e3-num2">Número 2</label>
                <input name="e3-num2" type="number" id="e3-num2" value="<?=$num2_1?>"><br>
                <input type="submit" value="EJECUTAR"><br>
                <label for="resultado1">Resultado 1</label>
                <input type="text" id="resultado1" value="<?=$op1?>" readonly><br>
                <label for="resultado2">Resultado 2</label>
                <input type="text" id="resultado2" value="<?=$op2?>" readonly><br> 
            </form>
            <form action="index.php" class="myform" method="get">
                <h1>Ejercicio 4</h1>
                <?php
                $num1_3 = $_GET["e4-num1"];
                $num2_3 = $_GET["e4-num2"];
                $num3_3 = $_GET["e4-num3"];
                $maxvalue = max(intval($num1_3), intval($num2_3), intval($num3_3));
                ?>
                <label for="e4-num1">Número 1</label>
                <input name="e4-num1" type="number" id="e4-num1" value="<?=$num1_3?>"><br>
                <label for="e4-num2">Número 2</label>
                <input name="e4-num2" type="number" id="e4-num2" value="<?=$num2_3?>"><br>
                <label for="e4-num3">Númeor 3</label>
                <input name="e4-num3" type="number" id="e4-num3" value="<?=$num3_3?>"><br>
                <input type="submit" value="EJECUTAR"><br>
                <label for="resultado1">El número mayor es</label>
                <input type="text" id="resultado1" value="<?=$maxvalue?>" readonly><br>
            </form>
        </div>
        <ul class="indicadores">
            <li class="indicador activo"></li>
            <li class="indicador"></li>
            <li class="indicador"></li>
            <li class="indicador"></li>
        </ul>
    </div>
    <script src="js/main.js"></script>
</body>
</html>