<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sistema de Notas</title>
    <link rel="stylesheet" href="./css/tabela.css">
</head>

<body>
    <?php 
        include("cabecarioUser.php");
    ?>
    <div align="center">
        <form action="inicioUser.php" method="POST">
            <label>Número da nota:</label> &nbsp;
            <input type="text" name="nota" id="nota">
            <button type="submit">Buscar</button>
        </form>
        <?php 
            if(isset($_REQUEST["nota"])){
                global $nota;
                $nota = $_REQUEST["nota"];
            }
        ?>
    </div>
    <br><br><br>
    <div>
        <form>
            <table border="1" cellspacing="0" cellpadding="5" align="center">
                <thead>
                    <tr>
                        <td> NÚMERO DA NOTA </td>
                        <td> MOTORISTA </td>
                        <td> TELEFONE </td>
                        <td> DATA </td>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    // Arquivo que faz conexão com o banco de dados
                    include_once ("./crud/conexao.php");
                    if(isset($_REQUEST["nota"])){

                        //Cria uma nova conexão
                        $bd = new Conexao();
                        $registro =  $bd->sql_query("select num_nota, nome_moto, tell_moto, data_nota from motorista, notas where motorista.cod_moto = notas.cod_moto and num_nota='$nota';");	

                        //Preenche a tabela com os dados existentes no banco de dados
                        while ($res = mysql_fetch_array($registro) ) {
                            echo "<tr>";
                                echo "<td>" . $res[0] . "</td>";
                                echo "<td>" . $res[1] . "</td>";
                                echo "<td>" . $res[2] . "</td>";
                                echo "<td>" . $res[3] . "</td>";
                            echo "</tr>";
                
                        }
                    }else{
                        $bd = new Conexao();
                        $registro =  $bd->sql_query("select num_nota, nome_moto, tell_moto, data_nota from motorista, notas where motorista.cod_moto = notas.cod_moto;");	

                        //Preenche a tabela com os dados existentes no banco de dados
                        while ($res = mysql_fetch_array($registro) ) {
                            echo "<tr>";
                                echo "<td>" . $res[0] . "</td>";
                                echo "<td>" . $res[1] . "</td>";
                                echo "<td>" . $res[2] . "</td>";
                                echo "<td>" . $res[3] . "</td>";
                            echo "</tr>";
                
                        }
                    }
                ?>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>