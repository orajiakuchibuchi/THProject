<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TreasureHill</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Treasure Hall" />
	<meta name="keywords" content="Treasure Hall, Treasure Hall website, Treasure Hall web, Treasure Hall page" />
	<meta name="author" content="freehtml5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
    @include('shared.nav')

    	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(images/slider3.jpeg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">About Us</h1>
									{{-- <h2>Treasure Hall website templates Made by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2> --}}
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	@include('shared.counter')
	<div id="fh5co-about">
		<div class="container">
			<div class="col-md-6 animate-box">
				<span>About Treasurehall Training</span>
				<h2>TREASUREHALL TRAINING</h2>
				<p>Treasurehall is a Corporate member of The Nigerian Institute of Training and Development (NITAD). It is accredited by The Institute of Chartered Accountants of Nigeria (ICAN) for pre-induction training of its members.</p>
				<p>We provide broad-based platform to improve and enhance the knowledge and professional skills of our trainees. As a professional training centre dedicated to best practice in management and development, we continually update our facilities and knowledge base in order to give our trainees the best and most current knowledge and skills.</p>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="images/treasure10.jpeg" alt="Treasure Hall website ">
			</div>
		</div>
	</div>

	<div id="fh5co-about-1" style="padding: 0 !important;">
		<div class="container">
			<div class="col-md-6">
				<img class="img-responsive" src="images/training10.jpeg" alt="Scholars">
			</div>
			<div class="col-md-6 animate-box">
				<h2>Methodology Of Training</h2>
				<p>Our training is participant-focused. Our methodology includes lecture, role play and case studies.</p>
				<p>Content is taught with a variety of teaching and learning strategies with solid technologcal core, using modern learning facilities such as slides/video clips, flip chart, magic boards and other audio-visual aids.</p>
			</div>
		</div>
	</div>


	@include('shared.footer')
	</div>
	</body>
</html>

