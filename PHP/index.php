<!DOCTYPE html>
<!-- PÁGINA DOS PAINEIS - PÁGINA PRINCIPAL COM PHP - INDEX.PHP -->
<html>
<head>
	<title>Mirror Fashion</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/mobile_sobre.css" media="(min-width: 320px)">
		<meta charset="utf-8">
</head>
	<header class="container">
		<h1><a href="index.php"><img src="img/logo.png" alt="Mirror Fashion"></a></h1>
		<p class="sacola">
			Nenhum item na sacola de compras
		</p>

		<nav class="menu-opcoes">
			<ul>
				<li><a href="#">Sua Conta</a></li>
				<li><a href="#">Lista de Desejos</a></li>
				<li><a href="#">Cartão Fidelidade</a></li>
				<li><a href="sobre.php">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>
			</ul>
		</nav>
	</header>
<body>
	<!-- CONTAINER - DESTAQUE - PARTE PRINCIPAL-->
	<div class="container destaque">
		<!-- SEÇÃO DE BUSCA -->
		<section class="busca">
			<h2>Busca</h2>
				<form>
					<input type="search">
					<input type="image" src="img/busca.png">
				</form>
			</section> 
			<!--FiM DA SEÇÃO BUSCA -->

			<!--Seção dos Departamentos -->
		<section class="menu-departamentos">
			<h2> Departamentos</h2>
				<nav>
						<li>
							<a href="#">Blusas e Camisas</a>
							<ul>
								<li><a href="#">Manga Curta</a></li>
								<li><a href="#">Manga Comprida</a></li>
								<li><a href="#">Camisa Social</a></li>
								<li><a href="#">Camisa Casual</a></li>
							</ul>
						</li>
						<li><a href="#">Calças</a></li>
						<li><a href="#">Saias</a></li>
						<li><a href="#">Vestidos</a></li>
						<li><a href="#">Sapatos</a></li>
						<li><a href="#">Bolsas e Carteiras</a></li>
						<li><a href="#">Acessórios</a></li>
				</nav>
		</section> 
		<!-- FIM DA SEÇÃO DEPARTAMENTOS -->
		<img src="img/destaque-home.png" alt="Promoção: Big City Night">
	</div>
	<!-- FIM CONTAINER DESTAQUE -->

	<div class="container paineis">
		<!-- Os paineis de novidades e mais vendidos entrarão aqui -->
		<section class="painel novidades">
			<h2>Novidades</h2>
			<ol>
				<!-- PRIMEIRO PRODUTO -->
				<li>
					<a href="produto.html">
						<img src="img/produtos/miniatura1.png">
						<figcaption> Fuzz Cardigan por R$ 129,90</figcaption>
					</a>
				</li>
				<!--SEGUNDO PRODUTO -->
				<li>
					<a href="produto.html">
						<img src="img/produtos/miniatura2.png">
						<figcaption>Uma blusinha show por R$ 29,90</figcaption>
					</a>
				</li>
				<!--TERCEIRO PRODUTO -->
				<li>
					<a href="produto.html">
						<img src="img/produtos/miniatura3.png">
						<figcaption>Um Casaquinho muito fofo por R$ 38,99 </figcaption>
					</a>
				</li>
				<!-- QUARTO PRODUTO -->
				<li>
					<a href="produto.html">
						<img src="img/produtos/miniatura4.png">
						<figcaption> Casaco roxo por R$ 69,99</figcaption>
					</a>
				</li>
				<!-- QUINTO PRODUTO -->
				<li>
					<a href="produto.html">
						<img src="img/produtos/miniatura5.png">
						<figcaption>Blusa básica azul por 29,90</figcaption>
					</a>
				</li>
				<!--SEXTO E ULTIMO PRODUTO -->
				<li>
					<a href="produtos.html">
						<img src="img/produtos/miniatura6.png">
						<figcaption>Blusinha rosa por R$ 29,90</figcaption>
					</a>
				</li>
			</ol>
		</section>
		<!-- FIM DA LISTAGENS DE PRODUTOS NO PAINEL DE NOVIDADES -->

		<!-- LISTAGEM DE PRODUTOS DO PAINEL DE NOVIDADES -->
		<section class="painel mais-vendidos">
			<h2>Mais Vendidos</h2>
			<ol>
				<!-- PRIMEIRO PRODUTO -->
				<li>
					<a href="produto.html">
						<img src="img/produtos/miniatura1.png">
						<figcaption> Fuzz Cardigan por R$ 129,90</figcaption>
					</a>
				</li>
				<!--SEGUNDO PRODUTO -->
				<li>
					<a href="produto.html">
						<img src="img/produtos/miniatura2.png">
						<figcaption> Uma blusinha show por R$ 29,90</figcaption>
					</a>
				</li>
				<!--TERCEIRO PRODUTO -->
				<li>
					<a href="produto.html">
						<img src="img/produtos/miniatura3.png">
						<figcaption>Um Casaquinho muito fofo por R$ 38,99 </figcaption>
					</a>
				</li>
				<!-- QUARTO PRODUTO -->
				<li>
					<a href="produto.html">
						<img src="img/produtos/miniatura4.png">
						<figcaption> Casaco roxo por R$ 69,99</figcaption>
					</a>
				</li>
				<!-- QUINTO PRODUTO -->
				<li>
					<a href="produto.html">
						<img src="img/produtos/miniatura5.png">
						<figcaption>Blusa básica azul por 29,90</figcaption>
					</a>
				</li>
				<!--SEXTO E ULTIMO PRODUTO -->
				<li>
					<a href="produtos.html">
						<img src="img/produtos/miniatura6.png">
						<figcaption>Blusinha rosa por R$ 29,90</figcaption>
					</a>
				</li>
			</ol>
		</section>
	</div>
<!-- FIM DA LISTAGENS DE PRODUTOS NO PAINEL DOS MAIS VENDIDOS -->


<!-- RODAPÉ -->
<footer>
	<div class="container">
		<a href="index.php">
			<img src="img/logo-rodape.png" alt="Logo Mirror Fashion"></a>
		<ul class="social">
			<li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
			<li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
			<li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
		</ul>
	</div>
</footer>
<!-- FIM DO RODAPÉ -->

</body>
</html>