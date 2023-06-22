<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<title>Quadex</title>
	<!-- =============== META =============== -->
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/favicon.png">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<!-- =============== STYLE =============== -->
	<link rel="stylesheet" href="css/critical.css">
	<link rel="stylesheet" href="css/contacto.css">
	<style>
		.preloader-active .preloader-cover{
			height: 4000px;
			transform: translate(-50%,-50%) rotate(45deg);
		}
		.preloader-cover{
			height: 0;
			width: 4000px;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%) rotate(45deg);
			background: #131213;
			position: fixed;
			z-index: 999;
			overflow: hidden;
			transition: .8s cubic-bezier(0.65, 0.05, 0.36, 1) .3s;
			overflow: hidden;
			will-change: top, left;
		}
	</style>
</head>

<body id="home" class="home preloader-active" style="background-image: url(img/bg-body.svg);">
	<!--=============== PRELOADER ===============-->
	<div class="preloader-cover">
		<div class="preloader">
			<div class="ajax-loader">
				<div class="ajax-loader-logo">
					<div class="ajax-loader-circle">
						<svg class="ajax-loader-circle-spinner" viewBox="0 0 500 500" xml:space="preserve">
							<circle cx="250" cy="250" r="239" />
						</svg>
					</div>
					<div class="ajax-loader-letters">Q</div>
				</div>
			</div>
		</div>
	</div>
	<!--============= PRELOADER END =============-->

	<!--=============== HEADER ===============-->
	<header class="header">
		<div class="container">
			<a href="#" class="nav-btn">
				<span></span>
				<span></span>
				<span></span>
			</a>
			<div class="row align-items-center">
				<!--=============== LOGO ===============-->
				<div class="col-12 col-sm-6 col-lg-2 logo-item">
					<a href="index.html" class="logo">
				<!--<img src="img/logo.svg" alt="logo">-->
						<img src="img/logo3.png" alt="logo">
					</a>
				</div>
				<!--============= LOGO END =============-->
				<div class="col-8 col-md-12 col-lg-9 nav-menu-cover">
					<!--============= NAV MENU =============-->
					<nav class="nav-menu">
						<ul class="nav-list">
							<li class="active">
								<a href="index.html">Inicio</a>
							</li>
							
								<li>
								<a href="help.html">Ayuda</i></a>
								</li>
							
							<!--<li class="dropdown">
								<a href="#">pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul>
									<li><a href="services.html">Services</a></li>
									<li><a href="blog.html">News</a></li>
									<li><a href="pravicy-policy.html">Pravicy policy</a></li>
									<li><a href="404.html">404</a></li>
								</ul>
							-->
							</li>
							<li><a href="nosotros.html">Nosotros</a></li>
							<li><a href="sitemap.html">Sitemap</a></li>
							<li><a href="contacto.html">Contáctenos</a></li>
							<li><a href="politica.html">Politicas de privacidad</a></li>
							<li class="dropdown">
								<a href="productos.html">Productos<i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul>
									<li>
										<a href="FM-Modulos.html">FM MODULOS & RF PARTES</a>
										<ul >
											<li class="dropdown"><a href="Excitador.html">FM-PLL EXCITADOR</a></li>
											<li><a href="Amplificador.html">FM AMPLIF. MODULOS</a></li>
											<li><a href="Sett-Ampli.html">SET PLL + MODULOS</a></li>
											<li><a href="Filtro-armonico.html">FILTRO ARMONICO FM</a></li>
											<li><a href="Fuentes-switchin.html">FUENTES SWITCHING</a></li>
											<li><a href="componentes.html">COMPONENTES</a></li>
										</ul>
									</li>
									<li><a href="Transmisores.html">Transmisores FM</a>
										<ul >
											<li class="dropdown"><a href="Transmisorfm.html">TRANSMISOR FM</a></li>
											<li><a href="antenas.html">ANTENAS & DIVISORES</a></li>
											<li><a href="cablesconec.html">CABLES CONNECTORES</a></li>
											<li><a href="combobroad.html">COMBO BROADCAST TX</a></li>
										</ul>
									</li>
									<li><a href="Instrumento.html">Instrumento & medicion</a>
										<ul >
											<li class="dropdown"><a href="vatimetro.html">VATIMETRO, TAPONES</li>
											<li><a href="osciloscopio.html">OSCILOSCOPIO</a></li>
											<li><a href="multimetros.html">MULTIMETROS</a></li>
											
										</ul>
									</li>
									<li><a href="Estudioaudio.html">ESTUDIO DE AUIDO</a>
										<ul >
											<li class="dropdown"><a href="consolamesclador.html">CONSOLA & MEZCLADOR</a></li>
											<li><a href="microfonos.html">MICROFONOS AUDIFONOS</a></li>
											<li><a href="compresoraudio.html">COMPRESOR AUDIO</a></li>
											<li><a href="comboestudio.html">COMBO ESTUDIO AUDIO</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
					<!--=========== NAV MENU END ===========-->
				</div>
				
				<div class="col-12 col-sm-6 col-lg-1">
					<!--============ HEADER ICON ============-->
					<!--<ul class="header-icon">
						<li class="search">
							<a class="icon" href="#">
								<i class="fa fa-search" aria-hidden="true"></i>
							</a>
							<form action="#">
								<input type="search" name="search" placeholder="Search">
								<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
							</form>
						</li>
						<li class="favorites">
							<a class="icon" href="#">
								<i class="fa fa-heart" aria-hidden="true"></i>
								<span>2</span>
							</a>
						</li>
						<li>
							<a class="icon" href="#">
								<i class="fa fa-user" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a class="icon" href="#">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
							</a>
						</li>
					</ul>
				-->
					<!--========== HEADER ICON END ==========-->
				</div>
			
			</div>
		</div>
	</header>
	<!--============= HEADER END =============-->

	<!--=============== MAIN CONTENT ===============-->
	<main>
		<!--=============== MAIN SLIDER ===============-->
		<section class="main-slider-cover">
			<div class="main-slider">
				<div class="main-slider-for">
					<div class="main-slide-for">
						<img src="img/home1-slide10.jpg" alt="">
						<div class="container">
							<div class="slide-info">
								<h3>will change your world!</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eaque ut ad aliquam, alias voluptatem!</p>
								<a href="gallery.html">Leer mas</a>
							</div>
						</div>
					</div>
					<div class="main-slide-for">
						<img src="img/home1-slide4.jpg" alt="">
						<div class="container">
							<div class="slide-info">
								<h3>Let's start creating photos</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et dolore magna aliqua.</p>
								<a href="gallery.html">read more</a>
							</div>
						</div>
					</div>
					<div class="main-slide-for">
						<img src="img/home1-slide5.jpg" alt="">
						<div class="container">
							<div class="slide-info">
								<h3>Unique digital experiences</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eaque ut ad aliquam, alias voluptatem!</p>
								<a href="gallery.html">read more</a>
							</div>
						</div>
					</div>
					<div class="main-slide-for">
						<img src="img/home1-slide12.jpg" alt="">
						<div class="container">
							<div class="slide-info">
								<h3>will change your world!</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque eaque ut ad aliquam, alias voluptatem!</p>
								<a href="gallery.html">read more</a>
							</div>
						</div>
					</div>
				</div>

				<div class="main-slider-nav">
					<div class="main-slide-nav">
						<span>1</span>
						<div class="img-cover">
							<img src="img/home1-slide10.jpg" alt="">
						</div>
					</div>
					<div class="main-slide-nav">
						<span>2</span>
						<div class="img-cover">
							<img src="img/home1-slide4.jpg" alt="">
						</div>
					</div>
					<div class="main-slide-nav">
						<span>3</span>
						<div class="img-cover">
							<img src="img/home1-slide5.jpg" alt="">
						</div>
					</div>
					<div class="main-slide-nav">
						<span>4</span>
						<div class="img-cover">
							<img src="img/home1-slide12.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=============== MAIN SLIDER END ===============-->

		<!--================= BEST PRICES =================-->
		<!--
		<section class="best-prices">
			<div class="container s-anim">
				<div class="row align-items-center">
					<div class="price-img-block col-md-6">
						<div class="price-img-cover">
							<img class="lazy" src="img/placeholder-all.png" data-src="img/best-img.jpg" alt="img">
							<img class="price-drone lazy" src="img/placeholder-all.png" data-src="img/drone-1.png" alt="img">
						</div>
					</div>
					<div class="col-12 col-md-6">
						<div class="price-info">
							<h2 class="title-left">Best Prices</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
							<ul>
								<li>12MP Camera</li>
								<li>1/2.3" Sensor</li>
								<li>Powerful Lens</li>
							</ul>
							<div class="price">USD $599</div>
							<a href="#" class="btn">buy now</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		-->
		<!--=============== BEST PRICES AND ===============-->
		
		<!--================ GALLERY BLOCK ================-->
		<!--
		<section class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-6 cuadro-imagen">
					<img src="img/productos.jpg" alt="">
				</div>
				
				<div class="col-12 col-sm-12 col-md-6 cuadro-imagen">
					<img src="img/productosset.jpg" alt="">
				</div>
				
			</div>
			
		</section>
		-->
		<!--============== GALLERY BLOCK END ==============-->

		<!--==================== S-BLOG ====================-->
		<section class="s-blog">
			<div class="container s-anim">
				<h2>Productos Destacados</h2>
				<div class="row">
					<!--=============== POST-ITEM ===============-->
					<div class="col-12 col-md-4 post-item">
						<div class="prod-thumbnail">
							<a href="blog.html"><img class="lazy" src="img/Presentacion2.1.png" data-src="img/Presentacion2.1.png alt="img"></a>
						</div>
						<div class="post-content">
							
							<h5 class="title"><a href="blog.html">TX1500 PRO Transmisor FM Stereo 88 � 108 MHz</a></h5>
							<div class="meta bottom">
								<!--
								<span class="post-comments">
									<a href="#">Comments 2</a>
								</span>
								<span class="post-tags">Tags: <a href="#">Lorem, </a><a href="#">Drones</a></span>
								-->
							</div>
							<a href="blog.html" class="btn">mas</a>
						</div>
					</div>
					<!--============= POST-ITEM END =============-->
					<!--=============== POST-ITEM ===============-->
					<div class="col-12 col-md-4 post-item">
						<div class="prod-thumbnail">
							<a href="blog2.html"><img class="lazy" src="img/presentacion2.jpg" data-src="img/presentacion2.jpg" alt="img"></a>
						</div>
						<div class="post-content">
														
							<h5 class="title"><a href="blog.html">PROFESIONAL 1w+DSP STEREO LIMITER</a></h5>
							<!---->
							<div class="meta bottom">
								<!--
								<span class="post-comments">
									<a href="#">Comments 2</a>
								</span>
								<span class="post-tags">Tags: <a href="#">Lorem, </a><a href="#">Drones</a></span>
								-->
							</div>
							<a href="blog.html" class="btn">mas</a>
						</div>
					</div>
					<!--============= POST-ITEM END =============-->
					<!--=============== POST-ITEM ===============-->
					<div class="col-12 col-md-4 post-item ">
						<div class="prod-thumbnail">
							<a href="blog3.html"><img class="lazy" src="img/presentacion3.jpg" data-src="img/presentacion3.jpg alt="img"></a>
						</div>
						<div class="post-content">
							
							<h5 class="title"><a href="blog.html">KIT TRANSMISORES 600w FM PLL MONO/STEREO + AMP600</a></h5>
							<div class="meta bottom">
								<!--
								<span class="post-comments">
									<a href="#">Comments 2</a>
								</span>
								<span class="post-tags">Tags: <a href="#">Lorem, </a><a href="#">Drones</a></span>
								-->
							</div>
							<a href="blog.html" class="btn">mas</a>
						</div>
					</div>
					<!--============= POST-ITEM END =============-->
				</div>
			</div>
		</section>
		<!--================== S-BLOG END ==================-->

		<!--=================== S-INFO-BG ===================-->
		
		<!--================= MIGA DE PAN =================-->

		<!--===================== S-SHOP =====================-->
		<section class="s-shop">
			<div class="container s-anim">
				<h2>Nuestros Productos</h2>
				<!--================== TAB-WRAP ==================-->
				<div class="tab-wrap">
					<ul class="tab-nav prod-tabs">
						<li class="item" rel="tab1">
							<div class="block-icon">
								<img src="img/icon-tab-1.svg" alt="img">
								<h6>FM MODULOS & RF PARTES</h6>
							</div>
						</li>
						<li class="item" rel="tab2">
							<div class="block-icon">
								<img src="img/icon-tab-2.svg" alt="img">
								<h6>TRANSMISORES FM</h6>
							</div>
						</li>
						<li class="item" rel="tab3">
							<div class="block-icon">
								<img src="img/icon-tab-3.svg" alt="img">
								<h6>INSTRUMENTO & MEDICION</h6>
							</div>
						</li>
						<li class="item" rel="tab4">
							<div class="block-icon">
								<img src="img/icon-tab-4.svg" alt="img">
								<h6>ESTUDIO AUDIO</h6>
							</div>
						</li>
					</ul>
					<div class="tabs-content">
						<!--================== TAB1 ==================-->
						<div class="tab tab1">
							<div class="row prod-cover">
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/pllmonostereo.png" data-src="img/pllmonostereo.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">FM-PLL EXCITADOR</a></h5>
										<p>Pantalla gráfica, potencia constante FM sin ajuste 5w de energía limpia</p>
										<div class="price">
											<span class="new-price">295$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/modulo_amp3000000.png" data-src="img/modulo_amp3000000.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">FM AMPLIF. MODULOS</a></h5>
										<p>FM broadcast con filtro armónico 1 watts entrada 250w mínimo - 300w máxima salida</p>
										<div class="price">
											<span class="new-price">510$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/kit600w0000.png" data-src="img/kit600w0000.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">SET PLL + MODULOS</a></h5>
										<p>SET 600w FM Broadcast PLL MONO Stereo + AMP600 El nuevo Kit PLL MONO/STEREO + AMP6</p>
										<div class="price">
											<span class="new-price">1290$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/Filtro0000.png" data-src="img/Filtro0000.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">FILTRO ARMONICO FM</a></h5>
										<p>Filtro pasa bajo a un inmejorable precio -60db atenuaci�n. soporta 800w m�ximo</p>
										<div class="price">
											<span class="new-price">105$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/Volts0000.png" data-src="img/Volts0000.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">FUENTES SWITCHING</a></h5>
										<p>Para nuestro PLL , CAF VCO y también si dispone de un amplificador FM previo hasta 15 watts</p>
										<div class="price">
											<span class="new-price">50$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/componentes0000.png" data-src="img/componentes0000.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">COMPONENTES</a></h5>
										
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
							</div>
						</div>
						<!--================ TAB1 END ================-->
						<!--================== TRANSMISORES FM 2do Bloque ==================-->
						<div class="tab tab2">
							<div class="row prod-cover">
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/transmisor0000.png" data-src="img/transmisor0000.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">TRANSMISOR FM</a></h5>
										<p>El TX20/Stereo DSP LCD Transmisor COMPRESOR DSP DIGITAL funcionando a 24 bits.</p>
										<div class="price">
											<span class="new-price">990$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/ComboPor0000.png" data-src="img/ComboPor0000.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">ANTENAS & DIVISORES</a></h5>
										<p>Antenas FM Polarización Circular OMN1000, constituida de 4 bays y un divisor</p>
										<div class="price">
											<span class="new-price">1150$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/ELIAX.gif" data-src="img/ELIAX.gif" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">CABLES CONNECTORES</a></h5>
										<p>Heliax ofrece una combinación inigualable de rendimiento y durabilidad </p>
										<div class="price">
											<span class="new-price">10$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/combox0000.png" data-src="img/combox0000.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">COMBO BROADCAST TX</a></h5>
										<p>Un perfecto Paquete. Incluido 2 antenas.</p>
										<div class="price">
											<span class="new-price">3800$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
							</div>
						</div>
						<!--================ Transmisores Fm END ================-->
						<!--================== Instrumento y medicion Bloque 3 ==================-->
						<div class="tab tab3">
							<div class="row prod-cover">
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/vatimetro0000.png" data-src="img/vatimetro0000.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">VATIMETRO, TAPONES</a></h5>
										<p>Mida la Potencia RF, con un Bird Thruline 43. Clásico y Robusto de inserción analógico para medidas</p>
										<div class="price">
											<span class="new-price">840$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/osciloscopio.jpg" data-src="img/osciloscopio.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">OSCILOSCOPIO</a></h5>
										<!--
										<div class="price">
											<span class="new-price">599$</span>
										</div>
										-->
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/Multiplemtro0000.png" data-src="img/Multiplemtro0000.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">MULTIMETROS</a></h5>
										<p>Calidad e innovación 3-3/4 cuenta de los dígitos 4000 De la energÍa función relativa auto apagado</p>
										<div class="price">
											<span class="new-price">45$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
							</div>
						</div>
						<!--================ Instrumento y medicion END ================-->
						<!--================== Estudio ================== -->
						<div class="tab tab4">
							<div class="row prod-cover">
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/compresormusical0000.png" data-src="img/compresormusical0000.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">CONSOLA & MEZCLADOR</a></h5>
										<p>CONSOLA ONIX1620i Mesa de mezclas analógica de 16 canales con circuitería de última generación.</p>
										<div class="price">
											<span class="new-price">1040$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/microfonobeta0000.png" data-src="img/microfonobeta0000.png" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">MICROFONOS AUDIFONOS</a></h5>
										<p>Micrófono vocal El Shure Beta 58A � de gran potencia vocal din�mico</p>
										<div class="price">
											<span class="new-price">155$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-6.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">COMPRESOR AUDIO</a></h5>
										<div class="price">
											<span class="new-price">499$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								
								<!-- prod-item end -->
							</div>
						</div>
						<!--================ Estudio END ================-->
						<!--================== TAB5 ==================-->
						<div class="tab tab5">
							<div class="row prod-cover">
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-1.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">Inspire pro Camera</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et</p>
										<div class="price">
											<span class="old-price">399$</span>
											<span class="new-price">299$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-2.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">Mavic 2 Pro with</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et</p>
										<div class="price">
											<span class="new-price">599$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-3.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">Mavic 2 Hasselblad Camera</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et</p>
										<div class="price">
											<span class="new-price">499$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-4.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">Mavic 2 zoom</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et</p>
										<div class="price">
											<span class="old-price">399$</span>
											<span class="new-price">299$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-5.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">Mavic pro Camera</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et</p>
										<div class="price">
											<span class="new-price">599$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-6.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">Phantom 4 Pro</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et</p>
										<div class="price">
											<span class="new-price">499$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
							</div>
						</div>
						<!--================ TAB5 END ================-->
						<!--================== TAB6 ==================-->
						<div class="tab tab6">
							<div class="row prod-cover">
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-4.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">Mavic 2 zoom</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et</p>
										<div class="price">
											<span class="old-price">399$</span>
											<span class="new-price">299$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-5.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">Mavic pro Camera</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et</p>
										<div class="price">
											<span class="new-price">599$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-6.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">Phantom 4 Pro</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et</p>
										<div class="price">
											<span class="new-price">499$</span>
										</div>
										<a href="shop-single.html" class="btn">COMPRAR</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-1.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">Inspire pro Camera</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et</p>
										<div class="price">
											<span class="old-price">399$</span>
											<span class="new-price">299$</span>
										</div>
										<a href="shop-single.html" class="btn">buy now</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-2.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">Mavic 2 Pro with</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et</p>
										<div class="price">
											<span class="new-price">599$</span>
										</div>
										<a href="shop-single.html" class="btn">buy now</a>
									</div>
								</div>
								<!-- prod-item end -->
								<!-- prod-item -->
								<div class="col-12 col-sm-6 col-md-4 prod-item">
									<div class="prod-thumbnail">
										<div class="prod-img">
											<div class="lable lable-new">new</div>
											<div class="lable lable-sale">sale</div>
											<img class="lazy" src="img/placeholder-all.png" data-src="img/prod-3.jpg" alt="img">
											<ul class="prod-link-cover">
												<li><a href="shop-single.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="prod-content">
										<h5 class="title"><a href="shop-single.html">Mavic 2 Hasselblad Camera</a></h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et</p>
										<div class="price">
											<span class="new-price">499$</span>
										</div>
										<a href="shop-single.html" class="btn">buy now</a>
									</div>
								</div>
								<!-- prod-item end -->
							</div>
						</div>
						<!--================ TAB6 END ================-->
					</div>
				</div>
				<!--================ TAB-WRAP END ================-->
			</div>
		</section>
		<!--=================== S-SHOP END ===================-->

		

		<!--================= S-TESTIMONIOS =================-->
		<section class="s-testimonials">
			<div class="container s-anim">
				<h2>testimonials</h2>
				<p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmmpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
				<div class="slider-testimonials">
					<div class="slide-testimonial">
						<div class="testimonial-item">
							<img class="lazy" src="img/placeholder-all.png" data-src="img/testimonials-1.png" alt="img">
							<h5 class="name">Sam piters</h5>
							<div class="prof">clients</div>
							<div class="testimon-content">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</div>
						</div>
					</div>
					<div class="slide-testimonial">
						<div class="testimonial-item">
							<img class="lazy" src="img/placeholder-all.png" data-src="img/testimonials-2.png" alt="img">
							<h5 class="name">Sandra Gibbs</h5>
							<div class="prof">clients</div>
							<div class="testimon-content">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</div>
						</div>
					</div>
					<div class="slide-testimonial">
						<div class="testimonial-item">
							<img class="lazy" src="img/placeholder-all.png" data-src="img/testimonials-3.jpg" alt="img">
							<h5 class="name">Anna Smith</h5>
							<div class="prof">clients</div>
							<div class="testimon-content">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--=============== S-TESTIMONIALS END ===============-->

		<!--=================== S-CONTACTS CONTACTOSS ===================-->
		<section class="s-contacts s-main-contacts">
			<div class="container s-anim">
				<h2>Contacto</h2>
				<form id='contactform' action="php/contact.php" name="contactform" method="post">
					<ul class="form-cover">
						<li class="inp-name"><input id="name" type="text" name="name" placeholder="Nombre"></li>
						<li class="inp-phone"><input id="phone" type="tel" name="phone" placeholder="Celular"></li>
						<li class="inp-email"><input id="email" type="email" name="email" placeholder="Correo"></li>
						<li class="inp-text"><textarea id="comments" name="comments" placeholder="Mensaje"></textarea></li>
					</ul>
					<div class="checkbox-wrap">
						<div class="checkbox-cover">
							<input type="checkbox">
							<p>Al utilizar este formulario, usted acepta el almacenamiento y manejo de sus datos por parte de este sitio web.</p>
						</div>
					</div>
					<div class="btn-form-cover botones">
						<button id="#submit" type="submit" name="enviar" class="btn">Enviar</button>
						<button id="#submit" type="reset" class="btn">Limpiar</button>
					</div>
				</form>
				<div id="message"></div>
			</div>
		</section>
		<!--================= S-CONTACTS END =================-->
		<!--=============== S-CLIENTS ===============-->
		<div class="s-clients s-clients-home">
			<div class="container">
				<div class="row align-items-center clients-cover">
					
					<div class="col-lg-3 col-sm-2">
						<img src="img/visa-card.png" alt="img">
					</div>
					<div class="col-lg-3 col-sm-2">
						<img class="lazy" src="img/mastercard.png" data-src="img/mastercard.png" alt="img">
					</div>
					<div class="col-lg-3 col-sm-2">
						<img class="lazy" src="img/paypal.png" data-src="img/paypal.png"alt="img">
					</div>
					<div class="col-lg-3 col-sm-2">
						<img class="lazy" src="img/american.png" data-src="img/american.png" alt="img">
					</div>
					
								
				</div>
			</div>
		</div>
		<!--============= S-CLIENTS END =============-->
	</main>
	<!--================== MAIN CONTENT END ==================-->

	<!--======================= FOOTER =======================-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-3 footer-info">
					<h5>Nosotros</h5>
					<p>Nuestros productos están esparcidos por todo el mundo, repartiendo desde nuestra propia fábrica en PERU.</p>
				</div>
				<div class="col-6 col-sm-4 col-lg-2 blok-link">
					<h5>Contactenos</h5>
					<!--
					<ul>
						<li><a href="#">DJI</a></li>
						<li><a href="#">Parrot</a></li>
						<li><a href="#">Hubsan</a></li>
						<li><a href="#">Mi</a></li>
					</ul>
					-->
				</div>
				<div class="col-6 col-sm-4 col-lg-2 blok-link">
					<h5>Ayuda</h5>
					<!--
					<ul>
						<li><a href="#">lorem ipsum</a></li>
						<li><a href="#">dolor sit amet</a></li>
						<li><a href="#">tempor incididunt</a></li>
						<li><a href="#">enim ad minim</a></li>
					</ul>
					-->
				</div>
				<div class="col-12 col-sm-4 col-lg-3 blok-link">
					<h5>POLITICA DE PRIVACIDAD</h5>
					<!--
					<ul>
						<li><a href="#">Help</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
					-->
				</div>
				<div class="col-12 col-sm-6 col-lg-2 footer-subscribe">
					<h5>suscribete</h5>
					<form action="/" class="subscribe-form">
						<input type="email" name="subscribe" placeholder="Correo">
						<input type="submit" value="enviar">
					</form>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="row align-items-center">
					<div class="col-12 col-md-2">
						<a href="index.html" class="logo footer-logo"><img src="img/logo3.png" alt="logo"></a>
					</div>
					<div class="col-12 col-md-8">
						<ul class="footer-menu">
							<li><a href="index.html">Inicio</a></li>
							<li><a href="help.html">Ayuda</a></li>
							<li><a href="services.html">Nosotros</a></li>
							<li><a href="sitemap.html">Sitemap</a></li>
							<li><a href="contacto.html">Contactenos</a></li>
							<li><a href="politica.html">Politica de Privacidad</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-2">
						<ul class="soc-link">
							<li><a target="_blank" href="https://www.facebook.com/rovadex"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a target="_blank" href="https://twitter.com/mtcradiotv"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="copyright">
				<p><a class="rovadex" href="https://rovadex.com" target="_blank"> MTCbroadcast </a> © <p id="Year"> </p> . <a href="pravicy-policy.html" target="_blank">Derechos Reservados</a></p>
			</div>
		</div>
	</footer>
	<!--===================== FOOTER END =====================-->

	<!--======================= TO TOP =======================-->
	<a class="to-top" href="#home">
		<i class="fa fa-chevron-up" aria-hidden="true"></i>
		<span>
			<img src="img/icon-tab-1.svg" alt="">
		</span>
	</a>
	<!--===================== TO TOP END =====================-->

	<!-- =============== STYLE =============== -->
	<link rel="stylesheet" href="css/slick.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="css/style.css">

	<!--=============== TEMPLATE SCRIPT ===============-->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>