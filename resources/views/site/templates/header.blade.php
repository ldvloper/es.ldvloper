<!DOCTYPE html>
<html lang="es">
<head>
<title>{{ $title }}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico">
    <!--CSS & Plugins-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fontawesome-5.12.0/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/colorbox.css') }}" >
	<link rel="stylesheet" href="{{ asset('plugins/input-telf/intlTelInput.css') }}">
    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ $style }}">
    <link rel="stylesheet" type="text/css" href="{{ $responsive }}">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150907486-1/"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-150907486-1');
        </script>

    <script type="text/javascript">
            var onloadCallback = function() {
                grecaptcha.render('g-recaptcha', {
                'sitekey' : '6Le9CeQUAAAAAErAHmNo3mjziObm75W9YrTuI7Np'
                });
            };
            window.onload = function() {
            var $recaptcha = document.querySelector('#g-recaptcha-response');
            if($recaptcha) {
                $recaptcha.setAttribute("required", "required");
            }
        };
    </script>


</head>
<body>
<div class="super_container">
	<div class="top-header ">
		<div class="row">
			<div class="col-md-6">
				<div class="dropdown-header" style="width:25%">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="padding:0;">
                    Idioma
					<span class="caret"></span></a>
					<ul class="dropdown-menu" id="menu-language-dropdown">
						<li><a href="https://ldvloper.com" style="cursor:pointer;">English</a></li>
						<li><a href="http://es.ldvloper.com" style="cursor:pointer;">Español</a></li>
						<li><a href="http://cn.ldvloper.com" style="cursor:pointer;">中文</a></li>
						<li><a href="http://ru.ldvloper.com" style="cursor:pointer;">Pусский</a></li>


					</ul>
				</div>
			</div>
			<div class="col-6">
				<nav class="main_nav justify-self-end">
				<ul class="nav_items">
					<li class="nav-item">
					<a href="{{ url('/about') }}">Acerca</a>
					</li>
					<li class="nav-item"> <a href="{{ url('/contact') }}">Contacto</a> </li>
				</ul>
				</nav>
			</div>

		</div>

	</div>
	<!-- Header -->

	<header class="header d-flex flex-row justify-content-end align-items-center">

		<!-- Logo -->
		<div class="logo_container mr-auto">
			<div class="logo">
				<a href="{{ url('') }}"><span>L</span>LDV<span>loper</span></a>
			</div>
		</div>

		<!-- Main Navigation -->
		<nav class="main_nav justify-self-end">
			<ul class="nav_items">
				<li class="nav-item">
					<a href="{{ url('') }}"><i class="fal fa-home"></i> Inicio</a>
				</li>

				<li class="nav-item">
				<a href="{{ url('/services') }}"><i class="fal fa-store-alt"></i>  Servicios</a>
				</li>


			</ul>

		</nav>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<span class="hamburger_text">Menú</span>
			<span class="hamburger_icon"></span>
		</div>

	</header>

	<!-- Menu -->

	<div class="fs_menu_overlay"></div>

	<div class="fs_menu_container">
		<nav class="fs_menu_nav">
			<ul class="fs_menu_list" style="text-align:justify;">

				<li><a href="{{ url('') }}"><i class="fal fa-home"> Inicio</i></a></li>
				<li><a href="{{ url('/about') }}"><i class="fal fa-users"> Acerca</i></a></li>
				<li><a href="{{ url('/contact') }}"><i class="fal fa-id-card-alt"> Contacto</i></a></li>
				<li><a href="{{ url('/services') }}"><i class="fal fa-store-alt"> Servicios</i></a></li>
				<!--<li><a href="{{ url('/login') }}"><i class="fal fa-sign-in"> Iniciar sesión </i></a></li>-->
			</ul>
		</nav>
	</div>
</div>
	<!-- Home Social -->
<div class="home_social_container d-flex flex-row justify-content-end align-items-center">
	<ul class="home_social">
		<li><a href="mailto:info@ldvloper.com" ><i class="far fa-envelope"></i></a></li>
		<li><a href="https://www.instagram.com/ldvloper"><i class="fab fa-instagram trans_300"></i></a></li>
		<li><a href="https://www.facebook.com/ldvloper.en"><i class="fab fa-facebook-f trans_300"></i></a></li>
		<li><a href="https://twitter.com/ldvloper"><i class="fab fa-twitter trans_300"></i></a></li>
		<li><a href="https://wa.me/12132829521"><i class="fab fa-whatsapp trans_300"></i></a></li>
	</ul>
</div>
