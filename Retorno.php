<html>
	<head>
		<title>O Retorno Do Rei</title>
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
								<a href = "Silmarillion.php?valor = 9">O Silmarilion</a>
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
					
					<center>
						<h1>O Retorno do Rei</h1>
						<br><br>
						<img name="teste" width="200" height="300"/>
						<script language="javascript" type="text/javascript">
							x=0;
							function anima(){
								img1="http://br.web.img2.acsta.net/r_1920_1080/medias/nmedia/18/87/16/07/19895812.jpg";
								img2="https://livralivro.com.br/uploads/book/img/574/8533615574.jpg";
								x=x+1;
								if (x==1) {img=img1;
							}
								else if (x == 2) {
									img = img2; 
									x = 0;
								}
								document.teste.src = img;
								setTimeout("anima()",800);
							}
							anima();
						</script>
					</center>
					<br>
					<p>SINOPSE: Sauron planeja um grande ataque a Minas Tirith, capital de Gondor, o que faz com que Gandalf (Ian McKellen) e Pippin (Billy Boyd) partam para o local na intenção de ajudar a resistência. Um exército é reunido por Theoden (Bernard Hill) em Rohan, em mais uma tentativa de deter as forças de Sauron. Enquanto isso Frodo (Elijah Wood), Sam (Sean Astin) e Gollum (Andy Serkins) seguem sua viagem rumo à Montanha da Perdição, para destruir o Um Anel. (Fonte: <a href = "http://www.adorocinema.com/filmes/filme-39187/" target = "blank">Adoro Cinema</a>) </p>
					
					<p>Imagem Filme: <a href = "http://www.adorocinema.com/filmes/filme-39187/fotos/detalhe/?cmediafile=19895812" target="_blank"> Adoro Cinema </a></p>
					<p>Imagem Livro: <a href = "https://livralivro.com.br/books/show/329230?recommender=I2I" target="_blank"> LivraLivro </a></p>
					
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