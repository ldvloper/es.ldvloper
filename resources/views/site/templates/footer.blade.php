

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 cr text-sm-left text-left">
					<img src="{{ asset('images/logo/favicon-white-dim.png') }}" alt="Ldvloper white logo"/>
					<p style="color:white;font-size:12px;padding-left:2.2%">&copy;<?=date("Y");?> LDVLOPER Inc.<br>Todos los derechos reservados</p>
				</div>

			</div>

			<div class="row" style="padding:10%;">

				<div class="col-md-4 cr text-sm-center text-center">
					<div class="owl-item partner_item">
					<img src="{{ asset('images/client/client_1.png') }}" alt="Laravel Icon"/>
					</div>
				</div>
				<div class="col-md-4 cr text-sm-center text-center">
					<div class="owl-item partner_item">
					<img src="{{ asset('images/client/client_2.png') }}" alt="Spring Icon"/>
					</div>
				</div>
				<div class="col-md-4 cr text-sm-center text-center">
					<div class="owl-item partner_item">
					<img src="{{ asset('images/client/client_3.png') }}" alt="React Icon"/>
					</div>
				</div>
			</div>

			<div class="row" style="margin-top:2%;text-align:center;">
				<div class="col-md-12  cr text-sm-left text-left">
					<ul class="footer_links">
						<li><a href="{{ url('/terms-conditions') }}">Términos y condiciones</a></li>
						<li><a href="{{ url('/privacy-policy') }}">Política de privacidad</a></li>
					</ul>
				</div>
                <div class="col-md-12  cr text-sm-left text-left" style="margin-top:2%">

                    <ul class="footer_links">

                        <li><a href=""> <i class="fal fa-folder"></i> Portfolio</a> </li>
                        <li><a href="{{ url('/work-with-us') }}"><i class="fal fa-handshake-alt"></i> Trabaje con nosotros</a></li>
                        <li><a href=""><i class="fal fa-bug"></i> Reportar un error</a></li>
                        <li><a href="https://github.com/ldvloper"> <i class="fab fa-github"></i> Repositorio Github</a></li>
                    </ul>
                </div>
				<div class="col-md-2 offset-lg-10 cr text-sm-right text-right">
					<ul class="footer_links">

						<li>
							<span class="footer_links" style="margin-right:5%;">Modo oscuro</span>
								<button id="dark-mode-toggle" class="dark-mode-toggle">
                                    <i class="fad fa-adjust"></i>
								</button>
						<li>
					</ul>
				</div>



			</div>

			<div class="row" style="padding-top:4%">
				<div class="footerLanguage col-sm-12 text-sm-center" style="text-align:center;color:grey;text-transform:uppercase; font-size:12px">
					<p style="color:grey!important;text-transform:uppercase; font-size:12px"><i class="fal fa-language"></i> Cambiar Idioma</p>
					<a href="https://ldvloper.com" style="color:white;cursor:pointer; padding:2%;">English</a>
					<a href="http://es.ldvloper.com" style="color:white;cursor:pointer; padding:2%;">Español</a>
					<a href="" style="color:white;cursor:pointer; padding:2%;">Pусский</a>
					<a href="" style="color:white;cursor:pointer; padding:2%;">中文</a>
				</div>
			</div>



				<div class="row footer_content d-flex flex-sm-row flex-column align-items-center" style="padding-top:2%;">
				<div class="col-sm-12 text-sm-right text-center">
					<div class="footer_social_container">
						<ul class="footer_social">

							<li><a href="https://www.instagram.com/ldvloper/"><i class="fab fa-instagram trans_300"></i></a></li>
							<li><a href="https://www.facebook.com/ldvloper.en"><i class="fab fa-facebook-f trans_300"></i></a></li>
							<li><a href="https://twitter.com/ldvloper"><i class="fab fa-twitter trans_300"></i></a></li>
							<li><a href="https://wa.me/12132829521"><i class="fab fa-whatsapp trans_300"></i></a></li>


						</ul>
					</div>
				</div>
			</div>

		</div>
	</footer>
</div>

<script src="https://www.google.com/recaptcha/api.js?hl=es" async></script>
<script src="{{ asset('js/popper.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('plugins/TweenMax.min.js') }}" defer></script>
<script src="{{ asset('plugins/TimelineMax.min.js') }}" defer></script>
<script src="{{ asset('plugins/ScrollMagic.min.js') }}" defer></script>
<script src="{{ asset('plugins/animation.gsap.min.js') }}" defer></script>
<script src="{{ asset('plugins/ScrollToPlugin.min.js') }}" defer></script>
<script src="{{ asset('plugins/progressbar.min.js') }}" defer></script>
<script src="{{ asset('plugins/owl.carousel.js') }}" defer></script>
<script src="{{ asset('plugins/easing.js') }}" defer></script>
<script src="{{ asset('js/scripts.js') }}" defer></script>
<script src="{{ $script }}" defer></script>

<script src="{{ asset('plugins/input-telf/js/intlTelInput.js') }}"></script>
<script src="{{ asset('plugins/input-telf/js/nationalMode.js') }}"></script>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js'></script>


</body>

</html>
