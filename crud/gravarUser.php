<?php

    include("conexao.php");
    
    if (isset($_REQUEST["nome"])) { 
        $login = $_REQUEST["login"];
        $senha = $_REQUEST["senha"];
        $nome = $_REQUEST["nome"];
        $nivel = $_REQUEST["nivel"];

        $bd = new Conexao();				
    
        $registro =  $bd->sql_query("insert into usuario (login,senha, nome, nivel) values ('$login', '$senha', '$nome', '$nivel')");		
        
        echo "<script language=Javascript>Alert('Motorista cadastrado com sucesso!')</script>";

        header("location: inicio.php"); 
    }
?>