<?php 
    // A sessão precisa ser iniciada em cada página diferente
    if(!isset($_SESSION)) session_start();

    $nivelAcesso = 1;

    //Verifica se não há a variável da sessão que identifica o usuário
    if(!isset($_SESSION["UsuarioID"]) OR ($_SESSION["UsuarioNivel"] != $nivelAcesso)){
        //Destrói a sessão por segurança
        session_destroy();

        //Redireciona o visitante de volta pro login
        header("Location: index.php"); exit;
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PÁGINA NÃO ENCONTRADA</title>
</head>
<body>
    <h1>Página restrita para Administradores</h1>
    <p>Olá, <?php echo $_SESSION["UsuarioNome"]; ?>!</p>
</body>
</html>
