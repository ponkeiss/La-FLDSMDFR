<?php include 'menu.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla de a multiplicar hrmno</title>
</head>
<body>
    <body>
    <h1>Tabla de multiplicar Bv</h1>
    <form method="POST" action="">
        <label for="n">Ingresar numero:</label>
        <br>
        <input type="number" step="any" name="n" id="n" required>
        <br><br>
        <button type="submit" name="calcular">Calcular</button>
        <br><br>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {
    echo("<table>");
    $n = intval($_POST['n']); 
    echo "<table border='1' style='text-align:center; border-collapse:collapse;'>";
    // Titulazo
    echo "<table border='1'>";
    $r = 0;
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
            $r = $i*$n;
            echo "<td>$i x $n = $r </td>";
        echo "</tr>";
    }
        echo "</table>";
    }
    ?>
</body>
</html>
