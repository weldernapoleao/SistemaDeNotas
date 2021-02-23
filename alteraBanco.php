<?php

    include_once ("conexao.php");
    
    if (isset($_REQUEST["nome"])) { 
        $nome = $_REQUEST["nome"];
        $serv = $_REQUEST["servico"];
        $data = $_REQUEST["data"];
        $horario = $_REQUEST["horario"];
        $func = $_REQUEST["funcionario"];
    
        if($serv == 1){
            $serv = "Nulo";
        } else if($serv == 2){
            $serv = "Corte Máquina";
        } else if($serv == 3){
            $serv = "Corte Tesoura";
        } else if($serv == 4){
            $serv = "Barba";
        } else if($serv == 5){
            $serv = "Luzes";
        }else{
            $serv = "Outro";
        }


        if($func == 1){
            $func = "Nulo";
        } else if($func == 2){
            $func = "Jardiel";
        } else if($func == 3){
            $func = "Miguel";
        } else if($func == 4){
            $func = "Eduardo";
        }else{
            $func = "Sem preferencia";
        }

        $bd = new Conexao();				
    
        $registro =  $bd->sql_query("update agenda nomeCliente = '$nome', ");		
        
        echo "<script language=Javascript>Alert('Agendado com sucesso!')</script>";

        header("location: principal.php"); 
    }
?>