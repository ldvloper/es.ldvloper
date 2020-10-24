@include('site.templates.header')

    <!-- Hero Slider -->

	<div class="home">
		<div class="hero_slider_container slider_prlx">
			<div class="owl-carousel owl-theme hero_slider">
				<!-- Slider Item -->
				<div class="owl-item main_slider_item">
					<div class="main_slider_item_bg"
                         style="background-image:
                                url({{ asset('images/site/home/carousel/background_cosmos-min.jpg') }} );">
					</div>
						<div class="container">
						<div class="row">
							<div class="col slider_content_col">
								<div class="main_slider_content">
								<h2 style="color:white;">Herramientas potentes</h2>
									<h1>Para proyectos <span>ambiciosos</span></h1>
									<p>Hágalo posible con nosotros</p>
									<div class="button discover_button">
										<a href="/contact" class="d-flex flex-row align-items-center
										justify-content-center">Descubrir
										<img src="{{ asset('images/icons/arrow_right.svg') }}" alt="Arrow right"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- Slider Item -->
				<div class="owl-item main_slider_item">
					<div class="main_slider_item_bg"
						 style="background-image:

								url( {{ asset('images/site/home/carousel/servers-min.jpg') }} );">
					</div>
					<div class="container">
						<div class="row">
							<div class="col slider_content_col">
								<div class="main_slider_content">
									<!--SECOND CONTENT-->
									<h2 style="color:white;">Desarrollo de</h2>
									<h1><span>Software </span>y</h1>
									<h1><span>Aplicaciones</span></h1>
									<p>En Ldvloper trabajamos con ambos entorno y más.</p>
									<div class="button discover_button">
										<a href="/contact" class="d-flex flex-row align-items-center justify-content-center">
										Descubrir<img src="{{ asset('images/icons/arrow_right.svg') }}" alt="Arrow right"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item main_slider_item">
					<div class="main_slider_item_bg"
						style="background-image:
							url( {{ asset('images/site/home/carousel/background-dark-min.jpg') }} );">
							;">


					</div>
					<div class="container">
						<div class="row">
							<div class="col slider_content_col">
								<div class="main_slider_content">
									<!--FIRST CONTENT-->
									<h2 style="color:white;">Cree su nuevo sitio web</h2>
									<h1>Creación </h1>
									<h1>de <span>sitios web</span></h1>
									<p>Comparte tu idea con el mundo
									de una forma profesional.</p>
									<div class="button discover_button">
										<a href="/contact" class="d-flex flex-row align-items-center justify-content-center">
										Vamos<img src="{{ asset('images/icons/arrow_right.svg') }}" alt="Arrow right"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>



			<!-- Slider Dots -->

			<div class="main_slider_nav_left main_slider_nav">
				<i class="fas fa-chevron-left trans_300"></i>
			</div>

			<div class="main_slider_nav_right main_slider_nav">
				<i class="fas fa-chevron-right trans_300"></i>
			</div>

		</div>
	</div>


	<!-- About -->

	<div class="about prlx_parent">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center section_title">
					<h2 id="about-title">Somos<span>Quienes</span></h2>
				</div>
			</div>

				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="about_btn">
							<a href="about" class="d-flex flex-row align-items-center justify-content-center">
							Acerca de nosotros
							</a>
						</div>
					</div>
				</div>

		</div>

	</div>

<!-- Contact -->

<div  class="contact prlx_parent" style="background-color:#111111">
		<!-- <div class="contact_background parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="images/contact_background.jpg"></div> -->
		<div  id="particles-js" class="contact_background prlx"></div>
		<script src="{{ asset('js/particles.min.js') }}" defer></script>
		<script src="{{ asset('js/particles.edit.js') }}" defer></script>
		<div class="container">

			<div class="row">
				<div class="col-lg-6 offset-lg-3 text-center section_title contact_title">
					<h2>Déjenos conocer su idea<span>Contacto</span></h2>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center contact_text">
					<p><strong>Contáctenos para llevar a cabo su proyecto</strong></p>
					<div class="button contact_button">
						<a href="/contact" class="d-flex flex-row align-items-center justify-content-center">contacto<img src="{{ asset('images/icons/arrow_right.svg') }}" alt="Arrow right"></a>
					</div>
				</div>
			</div>
		</div>
	</div>



@include('site.templates.footer')
