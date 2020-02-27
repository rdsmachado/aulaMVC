<html>
<body>
<div>
						<h3>Login</h3>
						<form action="index.php?acao=login" method ="post">
							Usu&aacute;rio:
							<input type="text" name="usuario"></br></br>
							Senha:
							<input type="password" name="senha"></br></br>
							<input class="botao" type="reset"  value="Limpar">
							<input class="botao" type="submit" name="submit" value="Logar">
						</form>
					</div>


<?php
/* Realiza a inclusão dos arquivos com os códigos View, Controller*/
require_once('Controller/controller.php');
require_once('View/view.php');
    if(isset($_POST['usuario'])){
        $controller = new Controller();
        $controller->login();
    }
?>
</body>
</html>