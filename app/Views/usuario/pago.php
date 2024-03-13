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
    <title>INNOVATECH</title>

    <!--
            CSS
            ============================================= -->
    <link rel="stylesheet" href=<?php echo base_url().'/css/linearicons.css';?>>
	<link rel="stylesheet" href=<?php echo base_url().'/css/owl.carousel.css';?>>
	<link rel="stylesheet" href=<?php echo base_url().'/css/themify-icons.css';?>>
	<link rel="stylesheet" href=<?php echo base_url().'/css/font-awesome.min.css';?>>
	<link rel="stylesheet" href=<?php echo base_url().'/css/nice-select.css';?>>
	<link rel="stylesheet" href=<?php echo base_url().'/css/nouislider.min.css';?>>
	<link rel="stylesheet" href=<?php echo base_url().'/css/bootstrap.css';?>>
	<link rel="stylesheet" href=<?php echo base_url().'/css/main.css';?>>
   
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
							
							<!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'login';?>">Iniciar sesión</a></li> -->
							<li class="nav-item"><a class="nav-link" href="<?php echo base_url().'contacto';?>">Contáctanos</a></li>
                            
                            <?php if(session('usuario')): ?>
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

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>PAGO</h1>
                    <nav class="d-flex align-items-center">
                        <a href="<?php echo base_url().'index';?>">inicio<span class="lnr lnr-arrow-right"></span></a>
                        <a href="<?php echo base_url().'pago';?>">pago</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="returning_customer">
                <div class="check_title">
                    <h2>¿Eres Cliente? <a href="<?php echo base_url().'login';?>">Haga clic aquí para ingresar</a></h2>
                </div>
                <p>Si ha comprado con nosotros antes, ingrese sus datos en los cuadros a continuación. si eres nuevo
                    cliente, proceda a la sección Facturación y envío.</p>
                <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                    <div class="col-md-6 form-group p_star">
                        <input type="text" class="form-control" id="name" name="name">
                        <span class="placeholder" data-placeholder="usuario"></span>
                    </div>
                    <div class="col-md-6 form-group p_star">
                        <input type="password" class="form-control" id="password" name="password">
                        <span class="placeholder" data-placeholder="clave"></span>
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="submit" value="submit" class="primary-btn">ingresar
                        </button>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option" name="selector">
                            <label for="f-option">Recordarme</label>
                        </div>
                        <a class="lost_pass" href="#">olvidaste tu contraseña?</a>
                    </div>
                </form>
            </div>
            <div class="cupon_area">
                <div class="check_title">
                    <h2>¿Tiene un cupón?</h2>
                </div>
                <input type="text" placeholder="Introduce el código de cupón">
                <a class="tp_btn" href="#">Aplicar cupón</a>
            </div>
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Detalles de facturación</h3>
                        <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="first" name="name">
                                <span class="placeholder" data-placeholder="Nombres"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="last" name="name">
                                <span class="placeholder" data-placeholder="Apllidos"></span>
                            </div>
                            
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="number">
                                <span class="placeholder" data-placeholder="Numero de telefono"></span>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="email" name="compemailany">
                                <span class="placeholder" data-placeholder="correo"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="0">seleccione su ciudad</option>
                                    <option value="1">Quibdo</option>
                                    <option value="2">Medellin</option>
                                    <option value="4">Cali</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="add1">
                                <span class="placeholder" data-placeholder="Direccion 01"></span>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add2" name="add2">
                                <span class="placeholder" data-placeholder="Direccion 02"></span>
                            </div>
                            
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="codigo postal">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Crea una cuenta?</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <h3>Detalles de envío</h3>
                                    <input type="checkbox" id="f-option3" name="selector">
                                    <label for="f-option3">Envia a una direccion diferente?</label>
                                </div>
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="pedido"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Su pedido</h2>
                            <ul class="list">
                                <li><a href="#">Producto <span>Total</span></a></li>
                                <li><a href="#">samsung S22 <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                                <li><a href="#">Iphone 14 pro <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                                <li><a href="#">Compu Lenovo <span class="middle">x 02</span> <span class="last">$720.00</span></a></li>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span>$2160.00</span></a></li>
                                <li><a href="#">Envío <span>Tarifa plana: $50.00</span></a></li>
                                <li><a href="#">Total <span>$2210.00</span></a></li>
                            </ul>
                            <div class="payment_item">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option5" name="selector">
                                    <label for="f-option5">Comprobar pagos</label>
                                    <div class="check"></div>
                                </div>
                                <p>Envíe un cheque al nombre de la tienda, calle de la tienda, ciudad de la tienda, estado/condado de la tienda,
                                    Código postal de la tienda.</p>
                            </div>
                            <div class="payment_item active">
                                <div class="radion_btn">
                                    <input type="radio" id="f-option6" name="selector">
                                    <label for="f-option6">Paypal </label>
                                    <img src="img/product/card.jpg" alt="">
                                    <div class="check"></div>
                                </div>
                                <p>Pague a través de PayPal; Puedes pagar con tu tarjeta de crédito si no tienes una cuenta PayPal..</p>
                            </div>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector">
                                <label for="f-option4">He leído y acepto el</label>
                                <a href="#">terminos y condiciones*</a>
                            </div>
                            <a class="primary-btn" href="#">Proceder a Paypal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

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
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>