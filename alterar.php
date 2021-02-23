<html>
<head>
    <meta charset="utf8">
    <?php
        include("gravar.php");
    ?>
</head>
<body>
    <div class="div-agendar">
		
		
<form class="form-horizontal" action="agendar.php" >
    <fieldset>
        <div class="panel panel-primary">
                <div class="panel-body">

                    <!-- Selecionar o serviço -->
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Serviço is required">
                            <label>Serviço :</label>
                            <select name="servico" >
                                <option value="1">Selecione o serviço</option>
                                <option value="2">Corte Máquina</option>
                                <option value="3">Corte Tesoura</option>
                                <option value="4">Barba</option>
                                <option value="5">Luzes</option>
                                <option value="6">Outro</option>
                            </select>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Data is required">
                        <input class="input100" type="date" name="data" placeholder="Data...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Horario is required">
                        <input class="input100" type="time" name="horario" placeholder="Horario...">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Funcionario is required">
                        <label>Funcionário :</label>
                            <select name="funcionario">
                                <option value="1">Selecione o serviço</option>
                                <option value="2">Jardiel</option>
                                <option value="3">Miguel</option>
                                <option value="4">Eduardo</option>
                                <option value="5">Sem preferência</option>

                            </select>
                    </div>

                    <div class="container-login100-form-btn m-t-17">
                        <input type="submit" name="entrar" value=Confirmar class="login100-form-btn">
                        <input type="button" name="cadastrar" value="Cancelar" class="login100-form-btn" onclick="javascript: location.href='inicio.php';">
                    </div>
                </div>
            <div>
        <div>
    </fieldset>
</form>
					
</body>
</html>