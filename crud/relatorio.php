<?php
    include("conexao.php");
        
    if (isset($_REQUEST["nome_vend"])) { 
        $login_vend = $_REQUEST["login_vend"];
        $senha_vend = $_REQUEST["senha_vend"];
        $nome_vend = $_REQUEST["nome_vend"];

        $bd = new Conexao();				

        $registro =  $bd->sql_query("select * from motorista");		
        
        echo '<script>Alert("Vendedor cadastrado com sucesso!")</script>';

        header("location: inicio.php"); 
    }
?>