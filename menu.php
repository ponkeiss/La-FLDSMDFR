<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .botones{
            margin-bottom:50px;
            display: flex;
            justify-content: center;
        }
        .botones li{
            list-style: none;
        }
        .btn{
            display: inline-block;
            padding: 5px 25px;
            border: 2px solid #0d0d0d;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-right:15px;
            border-radius:10px;
            color: inherit;
            text-decoration:none;
        }
        .btn:hover{
            background-color: #6cd5e3;
        }
    </style>
</head>
<body>
    <div class="botones">
        <li>
            <a class="btn" href="index.php">Inicio</a>
            <a class="btn" href="calculadora.php">Calculadora</a>
            <a class="btn" href="promedio.php">Promedio</a>
            <a class="btn" href="tabla.php">Tablas</a>
            <a class="btn" href="evaluador.php">Evaluador</a>
        </li>
    </div>
</body>
</html>
