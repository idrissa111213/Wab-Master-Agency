<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from techwave-laravel-light.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jul 2024 19:50:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="TechWave">
<meta name="author" content="SRBThemes">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Home - TechWave</title>

<script>
	if (!localStorage.frenify_skin) {
		localStorage.frenify_skin = 'dark';
	}
	if (!localStorage.frenify_panel) {
		localStorage.frenify_panel = '';
	}
	document.documentElement.setAttribute("data-techwave-skin", 'light');
	if(localStorage.frenify_panel !== ''){
		document.documentElement.classList.add(localStorage.frenify_panel);
	}
</script>

<!-- Google Fonts -->
<link rel="preconnect" href="../fonts.googleapis.com/index.html">
<link rel="preconnect" href="../fonts.gstatic.com/index.html" crossorigin>
<link href="../fonts.googleapis.com/css25188.css?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<!-- !Google Fonts -->

<!-- Styles -->
<link type="text/css" rel="stylesheet" href="Assets2/css/plugins8a54.css?ver=1.0.0" />
<link type="text/css" rel="stylesheet" href="Assets2/css/style8a54.css?ver=1.0.0" />
<!--[if lt IE 9]> <script type="text/javascript" src="Assets2/js/modernizr.custom.js"></script> <![endif]-->
<!-- !Styles -->

</head>

<body>

<!-- Moving Submenu -->
<div class="techwave_fn_fixedsub">
	<ul></ul>
</div>
<!-- !Moving Submenu -->

<!-- Preloader -->
<div class="techwave_fn_preloader enabled">
	<svg>
		<circle class="first_circle" cx="50%" cy="50%" r="110"></circle>
		<circle class="second_circle" cx="50%" cy="50%" r="110"></circle>
	</svg>
</div>
<!-- !Preloader -->

<!-- MAIN WRAPPER -->
<div class="techwave_fn_wrapper">
	<div class="techwave_fn_wrap">

		<!-- Searchbar -->
		<div class="techwave_fn_searchbar">
			<div class="search__bar">
				<input class="search__input" type="text" placeholder="Search here...">
				<img src="Assets2/svg/search.svg" alt="" class="fn__svg search__icon">
				<a class="search__closer" href="#"><img src="Assets2/svg/close.svg" alt="" class="fn__svg"></a>
			</div>
			<div class="search__results">
				<!-- Results will come here (via ajax after the integration you made after purchase as it doesn't work in HTML) -->
				<div class="results__title">Results</div>
				<div class="results__list">
					<ul>
						<li><a href="#">Artificial Intelligence</a></li>
						<li><a href="#">Learn about the impact of AI on the financial industry</a></li>
						<li><a href="#">Delve into the realm of AI-driven manufacturing</a></li>
						<li><a href="#">Understand the ethical implications surrounding AI</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- !Searchbar -->

		<!-- HEADER -->
		@include('partials.header')
		<!-- !HEADER -->


		

	</div>
</div>
<!-- !MAIN WRAPPER -->

<!-- SCRIPTS -->
<script type="text/javascript" src="{{ asset('Assets2/js/jquery8a54.js?ver=1.0.0') }}"></script>
<script type="text/javascript" src="{{ asset('Assets2/js/plugins8a54.js?ver=1.0.0') }}"></script>
<script type="text/javascript" src="{{ asset('Assets2/js/init8a54.js?ver=1.0.0') }}"></script>
<!-- !SCRIPTS -->


<!-- LEFT PANEL -->
@include('partials.sidebar')
<!-- !content (left panel) -->



