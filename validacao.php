<?php
    include("./crud/conexao.php");

    // Verifica se houve POST e se o login ou senha é(são) vazio(s)
    if(!empty($_POST) AND (empty($_POST["login"]) OR empty($_POST["senha"]))){
        header("Location: index.php"); exit;
    }

    //cria uma conexão com o banco de dados
    $bd = new Conexao();

    $login = mysql_real_escape_string($_POST["login"]);
    $senha = mysql_real_escape_string($_POST["senha"]);

    //Validação do login e senha
    $registro =  $bd->sql_query("select cod_user, nome, nivel from usuario where (login = '$login') and (senha = '$senha') and (nivel = 1) LIMIT 1");


    if(mysql_num_rows($registro) == 1){
        
        //Salva os dados encontrados na variável $resultado
        $resultado = mysql_fetch_assoc($registro);

        // Se a sessão não existir, inicia uma
        if (!isset($_SESSION)) session_start();

        // Salva os dados encontrados na sessão
        $_SESSION['UsuarioID'] = $resultado['cod_user'];
        $_SESSION['UsuarioNome'] = $resultado['nome'];
        $_SESSION['UsuarioNivel'] = $resultado['nivel'];

        // Redireciona o visitante
        header("Location: inicio.php"); exit;

    }elseif(mysql_num_rows($registro) == 0){
        //Salva os dados encontrados na variável $resultado
        $resultado = mysql_fetch_assoc($registro);

        // Se a sessão não existir, inicia uma
        if (!isset($_SESSION)) session_start();

        // Salva os dados encontrados na sessão
        $_SESSION['UsuarioID'] = $resultado['cod_user'];
        $_SESSION['UsuarioNome'] = $resultado['nome'];
        $_SESSION['UsuarioNivel'] = $resultado['admin'];

        // Redireciona o visitante
        header("Location: inicioUser.php"); exit;
    }else{
        //Mensagem de erro quando os dados não são encontrados no banco de dados
        echo "Login ou senha inválido"; exit;
        header("Location:index.php");
    }
?>