<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cssCabecario.css">
    <style>
        body{
            font-family: arial, helvetica, sans-serif;
            font-size: 18px;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 200px;
            background-color: #f1f1f1;
        }

        li a{
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        li a:hover{
            background-color: #555;
            color: white;
        }

        .flex-container{
            display: flex;
        }
        @media (max-width: 800px) {
            .flex-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="flex-container">
        <div style="flex-grow: 1">
            <ul class="menu">
                <li><a href="inicio.php">Início</a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
        </div>
        <div style="flex-grow: 9">
            <img src="./img/logo com contorno.png" alt="" class="img">
        </div>
    </div>
</body>
</html>