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
    <link rel="stylesheet" href="<?php echo base_url().'/css/linearicons.css';?>">
	<link rel="stylesheet" href="<?php echo base_url().'/css/owl.carousel.css';?>">
	<link rel="stylesheet" href="<?php echo base_url().'/css/themify-icons.css';?>">
	<link rel="stylesheet" href="<?php echo base_url().'/css/font-awesome.min.css';?>">
	<link rel="stylesheet" href="<?php echo base_url().'/css/nice-select.css';?>">
	<link rel="stylesheet" href="<?php echo base_url().'/css/nouislider.min.css';?>">
	<link rel="stylesheet" href="<?php echo base_url().'/css/bootstrap.css';?>">
	<link rel="stylesheet" href="<?php echo base_url().'/css/main.css';?>">
</head>

<body>

    <!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/lg" alt=""></a>
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
							<!--<li class="nav-item"><a class="nav-link" href="cart.php">Carrito de compras</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Shop</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="category.html">Shop Category</a></li>
									<li class="nav-item"><a class="nav-link" href="single-product.html">Product Details</a></li>
								    <li class="nav-item"><a class="nav-link" href="checkout.php">Verificar Productos</a></li>
									<li class="nav-item"><a class="nav-link" href="confirmation.php">Confirmation</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
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
							<!--<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>-->
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
                    <h1>Carrito de compras</h1>
                    <nav class="d-flex align-items-center">
                        <a href="<?php echo base_url().'index';?>">Inicio<span class="lnr lnr-arrow-right"></span></a>
                        <a href="<?php echo base_url().'carrito';?>">Carrito de compras</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Cart Area =================-->
    <section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th>Imagen</th>
                            <th>Nombre del producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($carrito as $item) : ?>
                            <?php
                            $productoModel = new \App\Models\Producto();
                            $producto = $productoModel->find($item['id']);

                            if ($producto !== null && isset($producto['imagen']) && isset($item['nombre'])) {
                            ?>
                                <tr>
                                    <td>
                                        <img src="data:image/*;base64,<?= base64_encode($producto['imagen']) ?>" alt="<?= $item['nombre'] ?>" class="img-fluid">
                                    </td>
                                    <td><?= $item['nombre'] ?></td>
                                    <td><?= $producto['precio_actual'] ?></td>
                                    <td><?= $item['cantidad'] ?></td>
                                    <td><?= $item['cantidad'] * $producto['precio_actual'] ?></td>
                                    <td><!-- Aquí puedes colocar las acciones --></td>
                                </tr>
                            <?php
                            }
                            ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


                                </td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-center">
                                        <a class="gray_btn" href="<?php echo base_url().'index';?>">Continuar comprando</a>
                                        <a class="primary-btn" href="<?php echo base_url().'pago';?>">Proceder a verificar compra</a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    <div class="cart-total mb-3" style="text-align: center; margin-top:-50px;">
        <h3>Total del carrito</h3>
        <p class="d-flex">
            <span>Subtotal</span>
            <span>$</span>
        </p>
        <p class="d-flex">
            <span>Envío</span>
            <span></span>
        </p>
        <hr>
        <p class="d-flex total-price">
            <span>Total</span>
            <span></span>
        </p>
    </div>
</div>
    <!--================End Cart Area =================-->

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