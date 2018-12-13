<html>
	<head>
		<title>Cadastro</title>
		<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "Estilo.css"/>
		<script type = "text/javascript" src = "Validar.js"></script>
	</head>
	
	<body>
		<div id = "Tudo">
			<div id = "Topo">
				<a href = "index.php?valor=1">
					<div id = "Logo"></div>
				</a>

				<div id = "Topo_Menu">
					<table class = "tabelaTopo">
						<tr>
							<td><h3><a href = "index.php?valor=1">Página Principal</a></h3> <br>
							<td><h3><a href = "Cadastro.php?valor=2">Cadastro</a></h3> <br>
							<td><h3>Sua Ficha</h3> <br>
							<td><h3><a href = "QuemSomos.php?valor=4">Quem Somos</a></h3> <br>
							<td><h3><a href = "Contato.php?valor=5">Contato</a></h3> <br>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			<div id = "Centro">
				<div id = "Centro_Menu">
					<center>
						<h3>
							<div id = "Centro_Menu_Componentes">
								<a href = "Anel.php?valor = 6">O Um Anel</a>
							</div>
							<div id = "Centro_Menu_Componentes">
								<a href = "Tolkien.php?valor = 7">J. R. R. Tolkien</a>
							</div>
							<div id = "Centro_Menu_Componentes">
								<a href = "TerraMedia.php?valor = 8">Terra Média</a>
							</div>
							<div id = "Centro_Menu_Componentes">
								<a href = "Silmarillion.php?valor = 9">O Silmarillion</a>
							</div>
							<div id = "Centro_Menu_Componentes">
								<a href = "Hobbit.php?valor = 10">O Hobbit</a>
							</div>
							<div id = "Centro_Menu_Componentes">
								<a href = "Sociedade.php?valor = 11">A Sociedade do Anel</a>
							</div>
							<div id = "Centro_Menu_Componentes">
								<a href = "Torres.php?valor = 12">As Duas Torres</a>
							</div>
							<div id = "Centro_Menu_Componentes">
								<a href = "Retorno.php?valor = 13">O Retorno do Rei</a>
							</div>
						</h3>
					</center>
				</div>
				
				<div id = "Centro_Conteudo">
					<form name = "form" method = "post" action = "SuaFicha.php" onSubmit = "return validar();">
						<h1><center>Cadastro</center></h1>
						<fieldset>
							<legend>Dados</legend>
							<br>
							<p>Nome:
								<br>
								<input type = "text" name = "Nome" size = "30" maxlenght = "40">
							</p>
							<p>Senha:
								<br>
								<input type = "password" name = "Senha" size = "30" maxlenght = "40">
							</p>
						</fieldset>
						<br>
						
						<fieldset>
							<legend>Sexo</legend>
							<br>
							<input type = "radio" name = "sexo" value = "Masculino" checked>Masculino
							<br><br>
							<input type = "radio" name = "sexo" value = "Feminino">Feminino
							<br><br>
						</fieldset>
						<br>
						
						<fieldset>
							<legend>Interesses</legend>
							<br>
							<table border = "0">
								<tr>
									<td><input type = "checkbox" name = "escolhas[]" value = "Cinema">Cinema <br>
									<td><input type = "checkbox" name = "escolhas[]" value = "Teatro">Teatro <br>
									<td><input type = "checkbox" name = "escolhas[]" value = "Esportes">Esportes <br>
									<td><input type = "checkbox" name = "escolhas[]" value = "Tecnologia">Tecnologia <br>
									</td>
								</tr>
							</table>
							<br>
						</fieldset>
						<br>
						
						<fieldset>
							<legend>Mensagem</legend>
							<br>
							<textarea name = "mensagem" cols = "25" rows = "3"></textarea>
							<br>
						</fieldset>
						<br>
						Meio de Transporte:
						<select name = "meiotransporte" size = "1">
							<option selected>Automóvel</option>
							<option>Ônibus</option>
							<option>Motocicleta</option>
							<option>Bicicleta</option>
							<option>Não há (à pé)</option>
						</select>
						<br><br>

						<input id = "but" type = "reset" name = "limpar" value = "Limpar">

						<button id = "but" type = "submit" name = "enviar" value = "Enviar" acesskey = "e">Enviar </button>
					</form>
				</div>
			</div>
			
			<div id = "Rodape">
				<center>
					<a href = "index.php?valor=1">
						<div id = "Logo"></div>
					</a>
					<table  class = "tabelaRodape">
						
						<tr>
							<td><a href = "Bilbo.php?valor=14">Bilbo Bolseiro</a></td>
							<td><a href = "Thorin.php?valor=15">Thorin</a></td>
							<td><a href = "Gandalf.php?valor=16">Gandalf</a></td>
							<td><a href = "Galadriel.php?valor=17">Galadriel</a></td>
						</tr>
						<tr>
							<td><a href = "Frodo.php?valor=18">Frodo Bolseiro </a></td>
							<td><a href = "Sauron.php?valor=19">Sauron </a></td>
							<td><a href = "Aragorn.php?valor=20">Aragorn </a></td>
							<td><a href = "Elrond.php?valor=21">Elrond </a></td>
						</tr>
						
						<tr>
							<td><a href = "Gollum.php?valor=22">Gollum </a></td>
							<td><a href = "Gimli.php?valor=23">Gimli </a></td>
							<td><a href = "Pippin.php?valor=24">Pippin </a></td>
							<td><a href = "Sam.php?valor=25">Sam </a></td>
						</tr>
						
						<tr>
							<td><a href = "Merry.php?valor=26">Merry </a></td>
							<td><a href = "Legolas.php?valor=27">Legolas </a></td>
							<td><a href = "Arwen.php?valor=28">Arwen </a></td>
							<td><a href = "Saruman.php?valor=29">Saruman </a></td>
						</tr>
					</table>
				</center>
			</div>
		</div>
	</body>
</html>