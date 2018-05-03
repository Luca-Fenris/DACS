<html>
	<head>
		<meta charset="UTF-8">
		<title>Entra ai</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
		<style type="text/css">
			.div_main {
			    background-color: #bdbdbd;
			    width: 20%;
			    margin-top: 10%;
			    margin-left: 40%;
			    margin-right: 40%;
			}
			
			.div_second {
			    background-color: #bdbdbd;
			    width: 80%;
			    margin-top: 10%;
			    margin-left: 10%;
			    margin-right: 10%;
			}

			.input_button {
			    background-color: #212121;
			    width: 100%;
			    border: none;
			    color: white;
			    padding: 2% 2%;
			    text-align: center;
			    text-decoration: none;
			    display: inline-block;
			    font-size: 16px;
			    cursor: pointer;
			}
		</style>
	</head>

	<?php
		$dir = get_template_directory_uri();
		echo "<body background = '$dir\images\background.jpg'>"
	?>
		
		<div>
			<form class="w3-container" method="POST" action="save.php">
			  <p>
			  <label>E-mail</label>
			  <input class="w3-input" type="email"></p>
			  <p>
			  <label>Nome</label>
			  <input class="w3-input" type="text"></p>
			  <p>
			  <label>Senha</label>
			  <input class="w3-input" type="password"></p>
			  <p>
			  <label>Confirmar Senha</label>
			  <input class="w3-input" type="passwordConf"></p>
			  <p>
			  <input type="submit" class="input_button" value="Entrar">
			</form>
		</div>
		
		<div class="div_second">
			<p align="center">Desculpe pela simplicidade Walter, perdi muita aula e não deu para fazer tudo que queria para o projeto</p>
		</div>
	</body>
</html>