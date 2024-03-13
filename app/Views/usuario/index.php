<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href=<?php echo base_url()."img/fav.png";?>>
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title> INNOVATECH </title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?= base_url('css/linearicons.css')?>">
	<link rel="stylesheet" href="<?= base_url('css/font-awesome.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.css')?>">
	<link rel="stylesheet" href="<?= base_url('css/themify-icons.css')?>">
	<link rel="stylesheet" href="<?= base_url('css/owl.carousel.css')?>">
	<link rel="stylesheet" href="<?= base_url('css/nice-select.css')?>">
	<link rel="stylesheet" href="<?= base_url('css/nouislider.min.css')?>">
	<link rel="stylesheet" href="<?= base_url('css/ion.rangeSlider.css')?>">
	<link rel="stylesheet" href="<?= base_url('css/ion.rangeSlider.skinFlat.css')?>">
	<link rel="stylesheet" href="<?= base_url('css/magnific-popup.css')?>">
	<link rel="stylesheet" href="<?= base_url('css/main.css')?>">
	
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
				
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src= "" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="<?php echo base_url().'index';?>">Inicio</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">productos</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'categoria';?>"> categorias</a></li>
								    <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'seguimiento';?>">seguimiento</a></li>

								</ul>
							</li>
							<!--<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
								</ul>
							</li>
							
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
								</ul>
							</li>-->
							<!-- <?php if(session('usuario')):?> 
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'login';?>">Iniciar sesión</a></li>
							<?php endif;?>	-->
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'contacto';?>">Contáctanos</a></li>
							 
							
                            <?php if(session('usuario')):?>
								<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false"><?php echo " Hola ".session('usuario');?></a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'cerrar_sesion';?>">cerrar sesion</a></li>
								</ul> 
								<?php else:?>
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'login';?>">Iniciar sesión</a></li>
							

				           <?php endif;?>	
						</ul>
										
					<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="<?php echo base_url().'carrito';?>" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area --> 

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<!--<div class="active-banner-slider owl-carousel">-->
						<!-- single-slide -->
						<!--<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Nike New <br>Collection!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/banner-img.png" alt="">
								</div>
							</div>
						</div>-->
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<br>
									<br>
									<h1>INNOVATECH</h1>
									<h5> ¡Este es un sitio web especialmente para <br>la compra de gran variedad de dispositivos <br> 
										tecnologico en buen estado y a un excelente precio!
									</h5>
									<!--<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Add to Bag</span>
									</div>-->
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src= "<?php echo base_url().'img/product/banner.png';?>" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?php echo base_url().'img/features/f-icon1.png';?>" alt="">
						</div>
						<h6>Entrega gratis</h6>
						<p>Envío gratis en todos los pedidos</p>
					</div>
				</div>
				<!-- single features--> 
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?php echo base_url().'img/features/f-icon2.png';?>" alt="">
						</div>
						<h6>Política de devoluciones</h6>
						<p>consulta con nuestros asesores</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?php echo base_url().'img/features/f-icon3.png';?>" alt="">
						</div>
						<h6>soporte 24/7</h6>
						<p>comunicate con nosotros</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="<?php echo base_url().'img/features/f-icon4.png';?>" alt="">
						</div>
						<h6>Pago seguro</h6>
						<p>compra segura</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--end features Area -->

	<!-- Start category Area-->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?php echo base_url().'img/product/g1.jpg';?>"  alt="">
								<a href="<?php echo base_url().'img/product/g1.jpg';?>" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">productos</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?php echo base_url().'img/product/g2.jpg';?>"  alt="">
								<a href="<?php echo base_url().'img/product/g2.jpg';?>" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">productos</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?php echo base_url().'img/product/g3.jpg';?>"  alt="">
								<a href="<?php echo base_url().'img/product/g3.jpg';?>"  class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">productos<o/h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="<?php echo base_url().'img/product/g4.jpg';?>" alt="">
								<a href="<?php echo base_url().'img/product/g4.jpg';?>" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Productos</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<img class="img-fluid w-100" src="<?php echo base_url().'img/category/c5.jpg';?>" alt="">
						<a href="<?php echo base_url().'img/category/c5.jpg';?>" class="img-pop-up" target="_blank">
							<div class="deal-details">
								<h6 class="deal-title">Promociones</h6>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End category Area -->

	<!-- start product Area -->
	
		<!--single product slide -->
		<div class="single-product-slider">
			<div class="container">
				
					
			
					
			</div>
		</div>
		<!-- single product slide-->
		           <br>
					<div class="col-lg-6 text-center mx-auto">
                    <div class="section-title">
                      <h1>Próximos productos</h1>
                     <p>no te pierdas nuestras ultimas novedades</p>
                          </div>
                       </div>
					  
					   <div class="container">
                    <div class="row">
					<?php foreach ($productos as $producto) : ?>
              <!-- Single product -->
        <div class="col-lg-3 col-md-6 m-2">
            <div class="single-product">
			<img class="img-fluid" src="data:image/*;base64,<?= base64_encode($producto['imagen']) ?>" alt="<?= $producto['nombre'] ?>">
                <div class="product-details">
                    <h6> <?= $producto['nombre'] ?></h6>
                    <div class="price">
                        <h6>$<?= $producto['precio_actual'] ?></h6>
                        <h6 class="l-through">$<?= $producto['precio_anterior'] ?></h6>
                    </div>
                    <div class="prd-bottom">
						<form method="POST" action="<?php echo base_url('agregarcarrito');?>">
                                <input type="hidden" name="id" value="<?= $producto['id'] ?>">
                                <input type="hidden" name="nombre" value="<?= $producto['nombre'] ?>">
                                <input type="hidden" name="precio_actual" value="<?= $producto['precio_actual'] ?>">
                                <input type="hidden" name="imagen" value="<?= base64_encode($producto['imagen']) ?>">                                
		                     	 <button type="submit"> 
								<span class="ti-bag"i class="ion-ios-cart"></span>
                                <p class="hover-text">agregar</p> </button> 
                            </form>
                           
                        </a>
                        <a href="" class="social-info">
							<span class="lnr lnr-heart"></span>
							<p class="hover-text">Wishlist</p>
						</a>
						<a href="" class="social-info">
						   <span class="lnr lnr-sync"></span>
						   <p class="hover-text">compare</p>
						</a>
						 <a href="" class="social-info">
						    <span class="lnr lnr-move"></span>
							<p class="hover-text">view more</p>
						</a>
                    </div>
                </div>
            </div>
        </div>
		<?php endforeach; ?>
	 </div>
</div>

					
				<!-- <div class="row">
					 <!--single product 
					<div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p1.jpeg" alt="">
							<div class="product-details">
								<h6> iPhone 14 Pro Max Blanco</h6>
								<div class="price">
									<h6>$5.299.900</h6>
									<h6 class="l-through">$5.999.999</h6>
								</div>
								<div class="prd-bottom">

									<a href="" class="social-info">
										<span class="ti-bag"></span>
										<p class="hover-text">add to bag</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-heart"></span>
										<p class="hover-text">Wishlist</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-sync"></span>
										<p class="hover-text">compare</p>
									</a>
									<a href="" class="social-info">
										<span class="lnr lnr-move"></span>
										<p class="hover-text">view more</p>
									</a>
								</div>
							</div>
						</div>
					</div>

			</div>
		</div> -->

	  <!--end product Area -->

	<!-- Start exclusive deal Area -->
	<section class="exclusive-deal-area">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-6 no-padding exclusive-left">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1>¡La oferta exclusiva termina pronto!</h1>
							<!-- <p>Who are in extremely love with eco friendly system.</p> -->
						</div>
						<div class="col-lg-12">
							<div class="row clock-wrap">
								<div class="col clockinner1 clockinner">
									<h1 class="days">150</h1>
									<span class="smalltext">Days</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="hours">23</h1>
									<span class="smalltext">Hours</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="minutes">47</h1>
									<span class="smalltext">Mins</span>
								</div>
								<div class="col clockinner clockinner1">
									<h1 class="seconds">59</h1>
									<span class="smalltext">Secs</span>
								</div>
							</div>
						</div>
					</div>
					<a href="" class="primary-btn">Shop Now</a>
				</div>
				<div class="col-lg-6 no-padding exclusive-right">
					<div class="active-exclusive-product-slider">
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="<?php echo base_url().'img/product/au.jpeg';?>" alt="">
							<div class="product-details">
								<div class="price">
								<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<h4>addidas New Hammer sole
									for Sports person</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href=""><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
						<!-- single exclusive carousel -->
						<div class="single-exclusive-slider">
							<img class="img-fluid" src="<?php echo base_url().'img/product/tablet.png';?>" alt="">
							<div class="product-details">
								<div class="price">
									<h6>$150.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
								<h4>addidas New Hammer sole
									for Sports person</h4>
								<div class="add-bag d-flex align-items-center justify-content-center">
									<a class="add-btn" href=""><span class="ti-bag"></span></a>
									<span class="add-text text-uppercase">Add to Bag</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End exclusive deal Area -->

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
				</a>
				<a class="col single-img" href="#">
					<img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
				</a>
			</div>
		</div>
	</section>
	<!-- End brand Area -->

	<!-- Start related-product Area--> 
	<section class="related-product-area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Ofertas de la semana</h1>
						<p>uestras ofertas de la semana ¡Aprovechalas!.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								 <a href="#"><img src="<?php echo base_url().'img/product/g8.jpg';?>" alt=""></a> 
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r2.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r3.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r5.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r6.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r7.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r9.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r10.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="img/r11.jpg" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<a href="#" target="_blank">
							<img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End related-product Area -->

	<!-- start footer Area -->
	<br>
	<br>
	<br>
	<br>
	<br>
	<!-- start footer Area -->
	<footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>sobre nosotros</h6>
                        <p>
                        Este es un sitio web especialmente para la compra de gran variedad de dispositivos 
						tecnologico en buen estado y a un excelente precio!
                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Boletin informativo</h6>
                        <p>Manténgase actualizado con nuestra últimas novedades</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                 <input class="form-control" name="EMAIL" placeholder="ingrese su correo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>

                                    <!-- <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>  -->
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Feed de Instagram</h6>
                        <ul class="instafeed d-flex flex-wrap">
						<li><img src="<?php echo base_url().'img/i1.jpg';?>" alt=""></li>
                            <li><img src="<?php echo base_url().'img/i2.jpg';?>" alt=""></li>
                            <li><img src="<?php echo base_url().'img/i3.jpg';?>" alt=""></li>
                            <li><img src="<?php echo base_url().'img/i4.jpg';?>"  alt=""></li>
                            <li><img src="<?php echo base_url().'img/i5.jpg';?>"  alt=""></li>
                            <li><img src="<?php echo base_url().'img/i6.jpg';?>"  alt=""></li>
                            <li><img src="<?php echo base_url().'img/i7.jpg';?>"  alt=""></li>
                            <li><img src="<?php echo base_url().'img/i8.jpg';?>" alt=""></li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Siguenos</h6>
                        <p>Nuestras redes sociales</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
            </div>
        </div>
    </footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>