<?php
  // inicialização da sessão
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sistema de Notas</title>
</head>

<body>
    <form action="validacao.php" method="POST">
      <img src="./img/login.png" alt="" width="152" height="72"><br>
      <label>Login</label><br>
      <input type="text" name="login" id="login" placeholder="Usuario" required autofocus><br>
      <label >Senha</label><br>
      <input type="password" name="senha" id="senha" placeholder="Senha" required><br><br>
      <button type="submit">Entrar</button>
      <p>&copy; Neswi</p>
    </form>
</body>
</html>