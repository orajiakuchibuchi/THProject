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
		   	<li style="background-image: url(images/TREASUREHALL22.png);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Make Payment</h1>
									<h2>Make payment to start processing your application.</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Invoice Information</h3>
						<ul>
                            <li>Invoice Code: {{$invoice['code']}}</li>
							<li>Amount: {{$invoice['amount']}}</li>
							<li>Application Subject: {{$invoice['type']}}</li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
                    @if ($invoice['status'] == 'pending')
                    <h3>Finish process</h3>
                    @else
                    <h3>Application Completed</h3>  
                    @endif
					<form action="{{route('pay')}}" method="POST">
                        {{ csrf_field() }}
                    @if ($invoice['status'] == 'pending')
                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" id="fname" class="form-control" 
                            placeholder="Search your application invoice." 
                            value="{{$invoice['code']}}" disabled
                            name="tx_ref">

                            <input type="text" id="email" class="form-control" 
                            placeholder="Search your application invoice." 
                            value="{{$invoice['email']}}" style="display: none;"
                            name="email" >

                            <input type="text" id="phone" class="form-control" 
                            placeholder="Search your application invoice." 
                            value="{{$invoice['phone']}}" style="display: none;"
                            name="phone" >

                            
                            <input type="text" id="first_name" class="form-control" 
                            placeholder="Search your application invoice." 
                            value="{{$invoice['first_name']}}" style="display: none;"
                            name="first_name" >

                            <input type="text" id="last_name" class="form-control" 
                            placeholder="Search your application invoice." 
                            value="{{$invoice['last_name']}}" style="display: none;"
                            name="last_name" >

                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Make Payment To Secure Application" class="btn btn-primary">
                    </div>
                    @endif
                    <h3>Search for your application</h3>
                    <div class="row form-group">
                            <div class="col-md-12">
                                <input type="text" id="fname" class="form-control" 
                                placeholder="Search your application invoice.">
                            </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Search" class="btn btn-primary">
                    </div>
					</form>		
				</div>
			</div>
			
		</div>
	</div>

	@include('shared.footer')
	</div>
	</body>
</html>

