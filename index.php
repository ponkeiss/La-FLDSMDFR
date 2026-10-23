<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        html{
            background-color: #FFFFFF;
        }
        body{
            background-color: #ededed;
            min-height: 450px;
            max-width: 1500px;
            border: 1px solid #000000;
            margin: 2px auto;
        }
        .titulo h1{
            font-size: 55px;
        }
        .titulo{
            background-image: url("imagenes/por_cbtis.webp");
            background-size: cover;
            background-repeat: no-repeat;
            height:200px;

            display: flex;
            justify-content: center;

        }
        p{
            font-size: 20px;
            text-align: center;
        }
    </style>
    <title>Bienvenidos :D</title>
</head>
<body>
    <div class="titulo">
        <h1>Mi Portal de Herramientas del Cbtis 217</h1>
    </div>
    <p>Este es un pequeño portal con algunas erramientas que nos ayudaran a resolver algunos ploblemas del día a día</p>
    <p>Creado por: <br>
        Axel Vieyra Alcantar. <br>
        Wendy Daniela Torres Chavez. <br>
        Andrea Ruiz Magaña.
    </p>
    <?php include 'menu.php';?>
</body>
</html>