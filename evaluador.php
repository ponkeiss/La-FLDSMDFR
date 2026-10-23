<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evaluadorcirijillo de calificaciones gg</title>
</head>
<body>
    <body>
    <h1>Evaluador</h1>
    <form method="POST" action="">
        <label for="n">Ingresar tu calificacion:</label>
        <br>
        <input type="number" step="any" name="n" id="n" required>
        <br><br>
        <button type="submit" name="calcular">Calcular</button>
        <br><br>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {
    $n = intval($_POST['n']); 
        if ( $n>=90 && $n<=100 ){
            echo "Rango de calificacion: Nivel - Exelente";
        }else if ( $n>=80 && $n<=89 ){
            echo "Rango de calificacion: Nivel - Muy bien";
        }else if ( $n>=70 && $n<=79 ){
            echo "Rango de calificacion: Nivel - Satisfactorio";
        }else if ( $n>=0 && $n<=69 ){
            echo "Rango de calificacion: Nivel - No acreditado";
        }
    }
    ?>
</body>
</html>