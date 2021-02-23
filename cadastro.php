<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cadastro Usuários</title>
    
    <style>
        * {
            box-sizing: border-box;
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #FF0000;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-align: center;
            display: inline-block;
            position: relative;
        }

        input[type=submit]:hover {
            background-color: #B22222;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
            position: absolute;
            width: 100%;
        }

        .col-25 {
            text-align: center;
            width: 15%;
            margin-top: 6px;
            display: inline-block;
            position: relative;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>

    <?php
        include ("./crud/gravarUser.php");
        include("restrito.php");
    ?>

</head>
<body>
    <?php
        include ("cabecario.php");
    ?>
    <br><br><br>
    <div class="container">
        <form action="cadastro.php" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="fname">Nome</label>
                </div>
                <div class="col-25">
                    <input type="text" id="nome" name="nome" placeholder="Nome..." require>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Login</label>
                </div>
                <div class="col-25">
                    <input type="text" id="login" name="login" placeholder="Login..." require>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Senha</label>
                </div>
                <div class="col-25">
                    <input type="password" id="senha" name="senha" placeholder="Senha..." require>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Admin?</label>
                </div>
                <div class="col-25">
                    <input type="radio" name="nivel" id="nivel" value="1" require>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>