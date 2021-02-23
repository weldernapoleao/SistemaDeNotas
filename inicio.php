<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sistema de Notas</title>
    <link rel="stylesheet" href="./css/tabela.css">
    <?php 
        include_once ("./crud/excluirNota.php");
        include("restrito.php");
    ?>
</head>

<body>
    <?php 
        include("cabecario.php");
    ?>
    <br><br><br>
    <div>
        <form>
            <table class="tabela" align="center">
                <thead>
                    <tr>
                        <td> NÚMERO DA NOTA </td>
                        <td> MOTORISTA </td>
                        <td> TELEFONE </td>
                        <td> DATA </td>
                        <td> OPÇÃO </td>
                    </tr>
                </thead>
                <tbody>
                <?php
                    // Arquivo que faz conexão com o banco de dados
                    include_once ("./crud/conexao.php");

                    //Cria uma nova conexão
                    $bd = new Conexao();
                    $dataIni = "20210201";
                    $dataFim = "20210228";
                    $registro =  $bd->sql_query("select cod_nota, num_nota, nome_moto, tell_moto, data_nota from motorista, notas where motorista.cod_moto = notas.cod_moto and data_nota between '$dataIni' and '$dataFim';");	

                    //Preenche a tabela com os dados existentes no banco de dados
                    while ($res = mysql_fetch_array($registro) ) {
                        echo "<tr>";
                            echo "<td>" . $res[1] . "</td>";
                            echo "<td>" . $res[2] . "</td>";
                            echo "<td>" . $res[3] . "</td>";
                            echo "<td>" . $res[4] . "</td>";
                            echo "<td>" . 
                                    "<form action='inicio.php' method='POST'>" .
                                        "<input type='hidden' name='cod_nota' id='cod_nota' value='$res[0]'>" .
                                        "<button type='submit'>Excluir</button>" . 
                                    "</form>" .
                                "</td>";
                        echo "</tr>";
                    }
            
                    //unset($bd);
                    //unset($registro);
                ?>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>