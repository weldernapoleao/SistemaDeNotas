<?php

    include("conexao.php");
    
    if (isset($_REQUEST["nota"])) { 
        $nota = $_REQUEST["nota"];
        $motorista = $_REQUEST["cod_moto"];
        $data = $_REQUEST["data"];

        $bd = new Conexao();				
    
        $registro =  $bd->sql_query("insert into notas (num_nota, cod_moto,data_nota) values ('$nota', '$motorista', '$data')");		
        
        echo " Nota cadastrada com sucesso";

        header("location: inicio.php"); 
    }
?>