<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partial.head')
</head>

<body>
	
	<div id="page">
	
	<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('site/img/fst.png') }}" width="42" height="42" data-retina="true" alt=""></a>
		</div>
		<ul id="top_menu">
			<li><a href="login.html" class="login">Login</a></li>
			<li><a href="#0" class="search-overlay-menu-btn">Rechercher</a></li>
			<li class="hidden_tablet"><a href="admission.html" class="btn_1 rounded">Admission</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="#0">Futur étudiant</a></span></li>
				<li><span><a href="#0">Département</a></span></li>
				<li><span><a href="#0">Recherche</a></span></li>
				<li><span><a href="#0">Partenaires et diplomé</a></span></li>
				<li><span><a href="#0">Faculté</a></span></li>
			</ul>
		</nav>
		<!-- Search Menu -->
		<div class="search-overlay-menu">
			<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
			<form role="search" id="searchform" method="get">
				<input value="" name="q" type="search" placeholder="Rechercher..." />
				<button type="submit"><i class="icon_search"></i>
				</button>
			</form>
		</div><!-- End Search Menu -->
	</header>
	<!-- /header -->
	
	<main>
        @yield('content')
	</main>
	<!-- /main -->
	
	<footer>
		<div class="container margin_120_95">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="{{ asset('site/img/fst.png')}}" width="100" height="100" data-retina="true" alt=""></p>
					<p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
					<div class="follow_us">
						<ul>
							<li>Suivez nous</li>
							<li><a href="#0"><i class="ti-facebook"></i></a></li>
							<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#0"><i class="ti-google"></i></a></li>
							<li><a href="#0"><i class="ti-pinterest"></i></a></li>
							<li><a href="#0"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Lien utils</h5>
					<ul class="links">
						<li><a href="#0">Admission</a></li>
						<li><a href="#0">A propos</a></li>
						<li><a href="#0">Se connecter</a></li>
						<li><a href="#0">S'inscrire</a></li>
						<li><a href="#0">Nouvelle &amp; Evènement</a></li>
						<li><a href="#0">Contacts</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Nous contacter</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="ti-mobile"></i> + 242 06 555 22 22</a></li>
						<li><a href="mailto:info@udema.com"><i class="ti-email"></i> info@fst.ummg.cg</a></li>
					</ul>
					<div id="newsletter">
					<h6>Newsletter</h6>
					<div id="message-newsletter"></div>
					<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
						<div class="form-group">
							<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Votre email">
							<input type="submit" value="Envoyer" id="submit-newsletter">
						</div>
					</form>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Termes et conditions</a></li>
						<li><a href="#0">Politique</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2020 FST | UMNG</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->

</body>
</html>