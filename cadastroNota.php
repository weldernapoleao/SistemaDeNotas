<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sistema de Notas</title>
    
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
        include("./crud/gravarNota.php");
        include("restrito.php");
    ?>

</head>

<body>
    <?php
        include ("cabecario.php");
    ?>
    <br><br><br>
    <div class="container">
        <form action="cadastroNota.php" method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="fname">Selecione o motorista:</label>
                </div>
                <div class="col-25">
                    <select name="cod_moto">
                        <?php
                            // Arquivo que faz conexão com o banco de dados
                            include_once ("./crud/conexao.php");
                
                            $bd = new Conexao();
                            $registro = $bd->sql_query("select cod_moto,nome_moto from motorista");
                        ?>    
                        <option value="">Selecione...</option>
                        <!-- Contador para que enquanto houver registro ele continua no loopin -->
                        <?php while($prod = mysql_fetch_array($registro)) { ?>
                            <option value="<?php echo $prod['cod_moto'] ?>"><?php echo $prod['nome_moto'] ?></option>
                        <?php } ?>
                      </select>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">Número da nota:</label>
                </div>
                <div class="col-25">
                    <input type="text" id="nota" name="nota" placeholder="Digite o número da nota..." require>
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Data da nota: </label>
                </div>
                <div class="col-25">
                    <input type="date" id="data" name="data" placeholder="Data..." require>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
    </div>
</body>
</html>