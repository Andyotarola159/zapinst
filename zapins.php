<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
	<title>Zap-Inst</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
	<div class="body">
		<div class="header">
			<div class="row align-middle align-justify collapse">
				<div class="column small-2">
					<a href="index.html" class="nav-option">
						<figure class="logo">
							<img src="assets/favicon.jpg" alt="Logo">
						</figure>
					</a>
				</div>
				<div class="column small-2">
					<span><a href="index.html" class="nav-option">ZAPINST</a></span>				
				</div>
				<div id="search" class=" row search">
					<div class="container-search row align-middle collapse">
						<a href="index.html" class="nav-option logo-search column">
						<figure  class="logo">
							<img  src="assets/favicon.jpg" alt="Logo">
						</figure>
						</a>
						<form class="column form">
							<input type="search" name="search" placeholder="Buscar...">
							<input type="submit" value="Buscar">
						</form>
						<span class="nav-option column small-3 close-search" id="close-search">Cancelar</span>
					</div>
				</div>
				<div class="column small-2 search-title">
					<span id="open-search" class="nav-option">Buscar</span>
				</div>
				<div class="column small-2">
					<span class="nav-option" id="open-login">Iniciar Sesión</span>
				</div>
				<div class="column small-2">
					<span class="nav-option"><a href="index.html#container-users">Únete</a></span>
				</div>
			</div>
			<div class="row collapse align-right">
				<div class="redes">
					<a href="www.facebook.com"><img src="assets/facebook-icon.png" alt="facebook"/></a>
				</div>
				<div class="redes">
					<a href="www.twitter.com"><img src="assets/twit_logo.png" alt="twitter"/></a>
				</div>
				<div class="redes">
					<a href="www.snapchat.com"><img src="assets/SnapChat_Rounded_icon-icons.com_61574.png" alt="snapchat"/></a>
				</div>
				<div class="redes">
					<a href="www.instagram.com"><img src="assets/Instagram-PNG-File.png" alt="instagram"/></a>
				</div>
				<div class="redes">
					<a href="www.pinterest.com"><img src="assets/Pinterest+Icon.png" alt="pinterest"/></a>
				</div>
			</div>
		</div>

		<div id="login" class="container-login">
			<div class="login row collapse align-center">
				<span class="close-login column small-12">
					<img src="assets/close.png" alt="close" width="20px" id="close-login"/>
				</span>
				<h4 class="column small-12 sub-title-4">Bienvenido</h4>
					
					<form action="iniciar_secion.php" method="post">
					<div class="email class small-12">
						
						<label for="email" class="label-1">Correo electrónico o nombre de usuario</label>
						<input type="text" placeholder="Correo Electrónico" id="email" name="email"/>
					</div>
					<div class="password class small-12">
						<label for="contra" class="label-1">Contraseña</label>
						<input type="text" id="contra" name="contra"/>

					</div>
					<input class="button button-1 column small-8 medium-6 large-4" type="submit" name="enviar">

                  </form>
                  
				<!--<button class="button button-1 column small-8 medium-6 large-4">Iniciar Sesión</button>-->
				<h6 class="small-12 password-olvidar"><a href="register.html">¿Olvidaste tu contraseña?</a></h6>
			</div>
		</div>
	
		<div class="banner">
			<div class="row">
				<div class="orbit column small-12" role="region" aria-label="Banners de las Mejores Marcas" data-orbit>
					<ul class="orbit-container">
						<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
						<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
						<li class="is-active orbit-slide">
							<span class="orbit-image banner-1"></span> 
						</li>
						<li class="orbit-slide">
							<span class="orbit-image banner-2"> </span> 
						</li>
						<li class="orbit-slide">
							<span class="orbit-image banner-3"> </span> 
						</li>
						<li class="orbit-slide">
							<span class="orbit-image banner-4"> </span> 
						</li>
					</ul>	
					<nav class="orbit-bullets">
						<button class="is-active" data-slide="0"><span class="show-for-sr">First slide datails</span><span class="show-for-sr">Current Slide</span></button>
						<button data-slide="1"><span class="show-for-sr">Second Slide Details</span></button>
						<button data-slide="2"><span class="show-for-sr">Third Slide Details</span></button>
						<button data-slide="3"><span class="show-for-sr">Fourth Slide Details</span></button>
					</nav>			
				</div>
			</div>
		</div>
		
		<div class="row  align-center align-middle open-nav">
			<a href="index.html#container-nav"><button id="open-nav"  class="button button-4">Escoge la zapatilla para ti</button></a>
		</div>

		<div class="container-nav" id="container-nav">
			<div class="nav">
				<form class="form-2">
					<div class="row align-spaced align-middle">
						<input class="button button-2 column small-12 medium-4 large-3" type="reset"	value="Limpiar Filtros" name="reset">
						<h5 class="column small-10 medium-4 large-3 title-4">Menú de filtros</h5>
						<span class="column small-2 medium-4 large-3">
							<i class="fa fa-times-circle-o" aria-hidden="true" id="close-nav"></i>
						</span>
					</div>
					<div class="row align-spaced gender">
						<div class="small-12 title-3">Género</div>
						<input class="button button-3 column small-4" type="button" value="Hombre"/>
						<input class="button button-3 column small-4" type="button" value="Mujer"/>
						<input class="button button-3 column small-4" type="button" value="Niños"/>
					</div>
					<div class="row sizes align-spaced sizes">
						<div class="small-12 title-3">Tallas US</div>
						<div class="column small-2 large-1 button button-3">
							<label for="2">
								<input type="checkbox" name="sizes" value="2"/><span>2</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3"> 
							<label for="2.5">
								<input type="checkbox" name="sizes" value="2.5"/><span>2.5</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="3">
								<input type="checkbox" name="sizes" value="3"/><span>3.5</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="3.5">
								<input type="checkbox" name="sizes" value="3.5"/><span>3.5</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="4">
								<input type="checkbox" name="sizes" value="4"/><span>4</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="4.5">
								<input type="checkbox" name="sizes" value="4.5"/><span>4.5</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="5">
								<input type="checkbox" name="sizes" value="5"/><span>5</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="5.5">
								<input type="checkbox" name="sizes" value="5.5"/><span>5.5</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="6">
								<input type="checkbox" name="sizes" value="6"/><span>6</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="6.5">
								<input type="checkbox" name="sizes" value="6.5"/><span>6.5</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="7">
								<input type="checkbox" name="sizes" value="7"/><span>7</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="7.5">
								<input type="checkbox" name="sizes" value="7.5"/><span>7.5</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="8">
								<input type="checkbox" name="sizes" value="8"/><span>8</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="8.5">
								<input type="checkbox" name="sizes" value="8.5"/><span>8.5</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="9">
								<input type="checkbox" name="sizes" value="9"/><span>9</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="9.5">
								<input type="checkbox" name="sizes" value="9.5"/><span>9.5</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="10">
								<input type="checkbox" name="sizes" value="10"/><span>10</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="10.5">
								<input type="checkbox" name="sizes" value="10.5"/><span>10.5</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="11">
								<input type="checkbox" name="sizes" value="11"/><span>11</span>
							</label>
						</div>
						<div class="column small-2 large-1 button button-3">
							<label for="12">
								<input type="checkbox" name="sizes" value="12"/><span>12</span>
							</label>
						</div>
					</div>

					<div class="row alig-middle align-spaced category">
						<div class="small-12 title-3">Categoría de la zapatilla</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="running">
								<input type="checkbox" name="sizes" value="running"/><span>Running</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="basquetball">
								<input type="checkbox" name="sizes" value="basquetball"/><span>Basquetball</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="futbol">
								<input type="checkbox" name="sizes" value="futbol"/><span>Fútbol</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="skateboard">
								<input type="checkbox" name="sizes" value="skateboard"/><span>Skateboard</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="gimnasia">
								<input type="checkbox" name="sizes" value="gimnasia"/><span>Gimnasia</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="urbanas">
								<input type="checkbox" name="sizes" value="urbanas"/><span>Úrbanas</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="ofertas">
								<input type="checkbox" name="sizes" value="ofertas"/><span>Ofertas</span>
							</label>
						</div>
					</div>

					<div class="row align-middle align-spaced brand">
						<div class="small-12 title-3">Marcas de las zapatillas</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="nike">
								<input type="checkbox" name="sizes" value="nike"/><span>Nike</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="air-jordan">
								<input type="checkbox" name="brand" value="air-jordan"/><span>Air Jordan</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="adidas">
								<input type="checkbox" name="brand" value="adidas"/><span>Adidas</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="reebok">
								<input type="checkbox" name="brand" value="reebok"/><span>Reebok</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="vans">
								<input type="checkbox" name="brand" value="vans"/><span>Vans</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="puma">
								<input type="checkbox" name="brand" value="puma"/><span>Puma</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="umbro">
								<input type="checkbox" name="brand" value="umbro"/><span>Umbro</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="dc">
								<input type="checkbox" name="brand" value="dc"/><span>DC</span>
							</label>
						</div>
						<div class="column small-6 medium-3 large-2 button button-3">
							<label for="converse">
								<input type="checkbox" name="brand" value="converse"/><span>Converse</span>
							</label>
						</div>
					</div>
					<div class="row align-center align-middle">
						<button class="button button-2">Aplicar Filtros</button>
					</div>
				</form>
			</div>
		</div>

		<div class="container-section">
			<div class="row section">
				<div class="row collapse align-center align-middle">
					<div class="column small-12 medium-4 large-3">
						<img src="assets/favicon.jpg" alt="Logo" class="section-logo">
					</div>
					<div class="column small-12 medium-4 large-3">
						<h1 class="title">ZAPINST</h1>
					</div>
				</div>
				<h3 class="column small-12 sub-title-2">Plataforma online especializada en compra, venta por mayor y menor de zapatillas y artículos deportivos de las marcas más representativas del mercado mundial.</h3>
				<p class="column small-12 parrafo">En <span>Zapinst</span> encontrarás los mejores precios en los diversos modelos de zapatillas de las marcas mas representativas del mercado internacional:<span> Nike, Adidas, Reebok, Puma,Air Jordan, Vans, Converse, DC</span> entre otras.<br/>
				Los modelos mas variados para que se acomoden a tus necesidades:<span> running, fútbol, voley, basquetball, skateboard, o lo que necesites.</span> 
				<br/>
				Hacemos envíos a todo el Perú y ofrecemos <span> delivery GRATIS</span> en Lima 	Metropolitana. </p>
				<div class="column small-12">
					<h5 class="column small-6 medium-4 large-3 sub-title-1">Principales Marcas</h5>	
					<div class="row align-center align-middle">
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/nike1.png" alt="Nike"/>
						</figure>
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/nike2.png" alt="Nike-SB"/>
						</figure>
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/adidas1.JPG" alt="Adidas"/>
						</figure>
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/adidas2.png" alt="Adidas-Origin"/>
						</figure>
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/adidas3.png" alt="Adidas-Performance"/>
						</figure>
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/jordan.png" alt="Air-Jordan"/>
						</figure>
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/puma.jpg" alt="Puma"/>
						</figure>
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/reebok.png" alt="Reebok"/>
						</figure>
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/umbro.png" alt="Umbro"/>
						</figure>
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/vans.png" alt="Vans"/>
						</figure>
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/dc.png" alt="DC"/>
						</figure>
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/converse.png" alt="Converse"/>
						</figure>
						<figure class="column small-4 medium-3 large-2">
							<img src="assets/brands/reef.PNG" alt="Reef"/>
						</figure>
					</div>
				</div>
			</div>
		</div>

		<div class="tutorials">
			<h3 class="row align-center title-2">¡Comprar y vender en ZAPINST es fácil!, te enseñamos aquí</h3>
			<div class="row align-center">
				<div class="column small-12 medium-6 large-4">
					<h6 class="sub-title-3">¿Cómo comprar?</h6>
					<div class="flex-video widescreen">
						<iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/1y6smkh6c-0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="column small-12 medium-6 large-4">
					<h6 class="sub-title-3">¿Cómo crear tu tienda virtual?</h6>
					<div class="flex-video widescreen">
						<iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/1y6smkh6c-0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="column small-12 medium-6 large-4">
					<h6 class="sub-title-3">¿Por qué ZapInst?</h6>
					<div class="flex-video widescreen">
						<iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/1y6smkh6c-0" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>

		<div class="value-proposition">
			<h3 class="row align-center title-2">¡Porqué nos importas tú!, ZAPINST te ofrece:</h3>
			<div class="row collapse align-spaced">
				<div class="value">
					<span class="icon-home icon"></span>
					<h6>Comodidad y Facilidad</h6>
					<p class="parrafo-2">Compra online desde tu casa, oficina, móvil o donde te encuentres y paga de la manera que desees, con tarjeta crédito o débito, Paypal, transferencia bancaria, o al contado contra entrega.</p>
				</div>
				<div class="value">
					<span class="icon-truck icon"></span>
					<h6>Delivery Gratis</h6>
					<p class="parrafo-2">Envíos gratuitos a los diferentes centros comerciales de Lima Metropolitana y Callao, y las tarifas de envios a muy bajos precios al resto del Perú.</p>
				</div>
				<div class=" value">
					<span class="icon-clock icon"></span>
					<h6>Entrega Rápida</h6>
					<p class="parrafo-2">Nuestro servicio de delivery puede ser solo de horas dependiendo de donde quiera recogerlo.<br/>
					Para mayores detalles revisa nuestro <a href="cronograma.html">cronograma de envíos.</a></p>
				</div>
				<div class=" value">
					<span class="icon-price icon"></span>
					<h6>Los Mejores Precios</h6>
					<p class="parrafo-2">Tenemos los mejores precios los 365 días del año en zapinst.com ya sea la compra por mayor o menor.</p>
				</div>
				<div class=" value">
					<span class="icon-price-seller icon"></span>
					<h6>Vende a traves de ZapInst</h6>
					<p class="parrafo-2">Crea tu tienda virtual y conectate con clientes a nivel nacional, por medio de ZapInst y todas las herramientas que te brinda, y vende por mayor y menor, se nuestro SOCIO.</p>
				</div>
			</div>
		</div>
		
		<div class="value-proposition-2">
			<h3 class="row align-center title-2">¡Porqué nos importas tú!, ZAPINST te ofrece:</h3>
			<div class="row">
				<div class="orbit column small-12" role="value-proposition" aria-label="Propuestas de Valor" data-orbit>
					<ul class="orbit-container">
						<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
						<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
						<li class="is-active orbit-slide">
							<div class="value">
								<span class="icon-home icon"></span>
								<h6>Comodidad y Facilidad</h6>
								<p class="parrafo-2">Compra online desde tu casa, oficina, móvil o donde te encuentres y paga de la manera que desees, con tarjeta crédito o débito, Paypal, transferencia bancaria, o al contado contra entrega.</p>
							</div>
						</li>
						<li class="orbit-slide">
							<div class="value">
								<span class="icon-truck icon"></span>
								<h6>Delivery Gratis</h6>
								<p class="parrafo-2">Envíos gratuitos a los diferentes centros comerciales de Lima Metropolitana y Callao, y las tarifas de envios a muy bajos precios al resto del Perú.</p>
							</div>
						</li>
						<li class="orbit-slide">
							<div class=" value">
								<span class="icon-clock icon"></span>
								<h6>Entrega Rápida</h6>
								<p class="parrafo-2">Nuestro servicio de delivery puede ser solo de horas dependiendo de donde quiera recogerlo.<br/>
								Para mayores detalles revisa nuestro <a href="cronograma.html">cronograma de envíos.</a></p>
							</div>
						</li>
						<li class="orbit-slide">
							<div class=" value">
								<span class="icon-price icon"></span>
								<h6>Los Mejores Precios</h6>
								<p class="parrafo-2">Tenemos los mejores precios los 365 días del año en zapinst.com ya sea la compra por mayor o menor.</p>
							</div> 
						</li>
						<li class="orbit-slide">
							<div class=" value">
								<span class="icon-price-seller icon"></span>
								<h6>Vende a traves de ZapInst</h6>
								<p class="parrafo-2">Crea tu tienda virtual y conectate con clientes a nivel nacional, por medio de ZapInst y todas las herramientas que te brinda, y vende por mayor y menor, se nuestro SOCIO.</p>
							</div>
						</li>
					</ul>
					<div class="orbit-bullets">
						<button class="is-active" data-slide="0"><span class="show-for-sr">First slide datails</span><span class="show-for-sr">Current Slide</span></button>
						<button data-slide="1"><span class="show-for-sr">Second Slide Details</span></button>
						<button data-slide="2"><span class="show-for-sr">Third Slide Details</span></button>
						<button data-slide="3"><span class="show-for-sr">Fourth Slide Details</span></button>
						<button data-slide="4"><span class="show-for-sr">Fifth Slide Details</span></button>
					</div>			
				</div>		
			</div>
		</div>

		<div class="container-users" id="container-users">
			<h3 class="row align-center title-2">Únete</h3>
			<h5>Escoge cómo quieres ser parte</h5>
			<div class="row align-spaced">
				<div class=" column small-11 medium-5 large-4 users">
					<div class="users-cuadros">
						<a style="display: block;" href="register-user-buyer.html">
							<figure>
								<img src="assets/shopping-bag.png" alt="Cliente"/>
							</figure>
						</a>
						<h4><a href="register-user-buyer.html">Cliente</a></h4>
						<h5><a href="register-user-buyer.html">Busca los mejores modelos de las mejores marcas con sello de originalidad.</a></h5>
						<a href="register-user-buyer.html" style="display: block;">
							<button class="button button-1">Registrarme</button>
						</a>
					</div>	
				</div>
				<div class=" column small-11 medium-5 large-4 users">
					<div class="users-cuadros">
						<a style="display: block;" href="register-user-wholesaler.html">
							<figure>
								<img src="assets/carro-de-la-compra.png" alt="Cliente Mayorista"/>
							</figure>
						</a>
						<h4><a href="register-user-wholesaler.html">Cliente Mayorista</a></h4>
						<h5><a href="register-user-wholesaler.html">Busca los mejores modelos de las mejores marcas y con los mejores precios para tus clientes.</a></h5>
						<a href="register-user-wholesaler.html" style="display: block;">
							<button class="button button-1">Registrarme</button>
						</a>
					</div>
				</div>
				<div class=" column small-11 medium-5 large-4 users">
					<div class="users-cuadros">
						<a style="display: block;" href="register-user-seller.html">
							<figure>
								<img src="assets/tiendas-virtuales (1).png" alt="Socios"/>
							</figure>
						</a>
						<h4><a href="register-user-seller.html">Socio</a></h4>
						<h5><a href="register-user-buyer.html">Crea tu tienda virtual dentro plataforma, y relacionate con clientes a nivel nacional con las herramientas que necesitas.</a></h5>
						<a href="register-user-buyer.html" style="display: block;">
							<button class="button button-1">Registrarme</button>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="oferts">
			<div class="row align-middle align-center">
				<h3 class="column small-8">Liquidación, ofertas y descuentos de temporada.</h3>
				<div class="column small-4">
					<button class="button button-2">Click Aquí</button>
				</div>
			</div>
		</div>
		
		<div class="container-contacto">
			<h3 class="row align-center title-2">Resuelve tus dudas, ¡Contáctenos!</h3>
			<div class="row align-center">
				<div class="column small-11 medium-5 large-3 contacto">
					<h5 class="sub-title-3">Zapinst</h5>
					<ol>
						<li><a href="zapinst.html">Acerca de ZAPINST</a></li>
						<li><a href="proveedores.hmtl">Proveedores</a></li>
						<li><a href="sociedad.hmtl">Socios</a></li>
					</ol>
				</div>
				<div class="column small-11 medium-5  large-3 contacto">
					<h5 class="sub-title-3">Atención al Cliente</h5>
					<ol>
						<li><a href="ayuda.html">Centro de ayuda</a></li>
						<li><a href="experiencias.html">Experiencia de usuarios</a></li>
						<li><a href="payment.html">Formas de Pago</a></li>
						<li><a href="envio.hmtl">Confirmación y Envío</a></li>
						<li><a href="changue.html">Cambios y Devoluciones</a></li>
						<li><a href="password">Cambiar o Recuperar contraseña</a></li>
					</ol>
				</div>
				<div class="column small-11 medium-5 large-3 contacto">
					<h5 class="sub-title-3">Contáctanos</h5>
					<ol class="">
						<li><span class="icon-phone"></span>Telf. Fijo: 01 550-3471</li>
						<li><span class="icon-mobile"></span>Telf. Móvil: 970780395 /                              984545737</li>
						<li><span class="icon-whatsapp"></span>WhatsApp: 970780395</li>
						<li><span class="icon-email"></span>Email: ventas@zapinst.com</li>
					</ol>
				</div>
				<div class="column small-11 medium-5 large-3 contacto">
					<h5 class="sub-title-3">Síguenos</h5>
					<ol class="row align-center social-redes">
						<li class="column small-4"><a href="www.facebook.com"><img src="assets/facebook-icon.png" alt="facebook"/></a></li>
						<li class="column small-4"><a href="www.twitter.com"><img src="assets/twit_logo.png" alt="twitter"/></a></li>
						<li class="column small-4"><a href="www.snapchat.com"><img src="assets/SnapChat_Rounded_icon-icons.com_61574.png" alt="snapchat"/></a></li>
						<li class="column small-4"><a href="www.instagram.com"><img src="assets/Instagram-PNG-File.png" alt="instagram"/></a></li>
						<li class="column small-4"><a href="www.pinterest.com"><img src="assets/Pinterest+Icon.png" alt="pinterest"/></a></li>
					</ol>
				</div>
			</div>
		</div>
		
		<div class="footer">
			<div class="row align-spaced align-middle">
				<h5 class="column small-12 medium-3 large-2"><a href="preg-frecu.html">Preguntas Frecuentes</a></h5>
				<h5 class="column small-12 medium-3 large-2"><a href="garan-aute.html">Garantía de Autenticidad</a></h5>
				<h5 class="column small-12 medium-3 large-2"><a href="devolucion.html">Devoluciones</a></h5>
				<h5 class="column small-12 medium-3 large-2"><a href="privacidad.html">Privacidad</a></h5>
				<h5 class="column small-12 medium-3 large-2"><a href="delivery.html">Delivery</a></h5>
			</div>
		</div>
	</div>

	
	
	<script src="https://use.fontawesome.com/8c1e4c884e.js"></script>
	<script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>

    <script>
		var searchOn = document.getElementById("open-search");
		var search = document.getElementById("search");
		searchOn.addEventListener("mouseup",buscarActivar);
		var searchOff = document.getElementById("close-search");
		searchOff.addEventListener("mouseup",buscarQuit);
									 
		function buscarActivar()
		{
			search.classList.add('activar-search');
		}
		
		function buscarQuit()
		{
			search.classList.remove('activar-search');
		}	
		
		var loginOn = document.getElementById("open-login");
		var login= document.getElementById("login");
		loginOn.addEventListener("mouseup",loginActivar);
		var loginOff = document.getElementById("close-login");
		loginOff.addEventListener("mouseup",loginQuit);
									 
		function loginActivar()
		{
			login.classList.add('activar-login');
		}
		
		function loginQuit()
		{
			login.classList.remove('activar-login');
		}
		
		var navOn = document.getElementById("open-nav");
		var nav= document.getElementById("container-nav");
		navOn.addEventListener("mouseup",navActivar);
		var navOff = document.getElementById("close-nav");
		navOff.addEventListener("mouseup",navQuit);
									 
		function navActivar()
		{
			nav.classList.add('activar-nav');
		}
		
		function navQuit()
		{
			nav.classList.remove('activar-nav');
		}
		//blazy
		var bLazy = new Blazy({
			selector: 'img'
			// options
		});
		
	</script>
</body>
</html>