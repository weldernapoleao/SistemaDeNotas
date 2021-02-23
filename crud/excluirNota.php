<?php

    include_once ("conexao.php");
    

    if (isset($_REQUEST["cod_nota"])) { 
        $id = $_REQUEST["cod_nota"];

        $bd = new Conexao();				
    
        $registro =  $bd->sql_query("delete from notas where cod_nota = '$id' ");		
        

        header("location: inicio.php"); 
    }
?>