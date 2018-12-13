<html>
	<head>
		<title>Bem Vindo!!!</title>
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
					<h1>
						<center>Bem Vindo!</center>
					</h1>
					<br><br>
					<center>
						<img name = "teste" width = "300" height = "200">
						<script language = "javascript" type = "text/javascript">
							x = 0;
							function anima(){
								img1 = "https://images-na.ssl-images-amazon.com/images/I/51%2BDyPydG4L.jpg";
								img2 = "https://images-na.ssl-images-amazon.com/images/I/51XHj3mBhrL._SX375_BO1,204,203,200_.jpg";
								x = x + 1;
								if (x == 1) {
									img = img1;
								}
								else if (x == 2) {
									img = img2;
									x = 0;
								}
								document.teste.src = img;
								setTimeout("anima()", 800);
							}anima();
						</script>
					</center>
					<br>
					<p>O Senhor dos Anéis (The Lord of the Rings, no original) é uma trilogia de livros de alta fantasia escrita pelo escritor britânico J. R. R. Tolkien. Escrita entre 1937 e 1949, com muitas partes criadas durante a Segunda Guerra Mundial, a saga é uma continuação de O Hobbit (1937). Embora Tolkien tenha planejado realizá-la em volume único, a obra foi originalmente publicada em três volumes (The Fellowship of the Ring, The Two Towers e The Return of the King) entre 1954 e 1955, e foi assim, em três volumes, que se tornou popular. Desde então, a obra foi reimpressa várias vezes e traduzida para mais de 40 línguas, vendendo mais 160 milhões de cópias, tornando-se um dos trabalhos mais populares da literatura do século XX. </p>
					
					<p>A história narra o conflito contra o mal que se alastra pela Terra-média, através da luta de várias raças - Humanos, Anões, Elfos, Ents e Hobbits - contra Orcs, para evitar que o "Anel do Poder" volte às mãos de seu criador Sauron, o Senhor do Escuro. Partindo dos primórdios tranquilos do Condado, a história muda através da Terra-média e segue o curso da Guerra do Anel através dos olhos de seus personagens, especialmente do protagonista, Frodo Bolseiro. A história principal é seguida por seis apêndices que fornecem uma riqueza do material de fundo histórico e linguístico. </p>
					
					<p>Texto: <a href = "https://pt.wikipedia.org/wiki/O_Senhor_dos_An%C3%A9is" target = "_blank"> Wikipédia </a></p>
					<p>Imagem Senhor dos Anéis: <a href = "https://www.amazon.com/Rings-Trilogy-Movie-Poster-Print/dp/B005LXQLRW" target = "_blank"> Amazon </a></p>
					<p>Imagem O Hobbit: <a href = "https://www.amazon.in/Hobbit-Definitive-Posters-Insights-Collections/dp/1608873862" target = "_blank"> Amazon</a></p>
					
					<p>Div esquerda (Gandalf) e imagem de fundo (Condado): <a href = "http://felipeessy.blogspot.com/2013/12/curiosidades-sobre-terra-media-parte-2.html" target = "_blank"> felipeessy.blogspot </a> </p>
					<p>Div central (Minas Tirith):  <a href = "http://lotr.wikia.com/wiki/Minas_Tirith?file=Minas_Tirith.jpg" target = "_blank">  Lotr.wikia</a> </p>
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