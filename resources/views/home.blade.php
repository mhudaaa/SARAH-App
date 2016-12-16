<!DOCTYPE html>
<html>
<head>
	<title>Sarah APP</title>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
    
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/animate.min.css') }}">
	
	<script type="text/javascript">
  		window.onscroll = function () {
		 // window.scrollTo(0,0);
		}
	</script>
</head>
<body class="cow">
	
        
	<div id="wrapper">
		<div class="starter">
			<div class="row text-center text-uppercase">
				<div class="col-xs-8 col-xs-offset-2">
					<div class="content">
					<img class="logo wow bounceIn" data-wow-delay="0.5s" src="{{ URL::asset('assets/img/logo.png') }}">
					<h1 class="wow fadeInUp" data-wow-delay="1s">Sarah</h1>
					<h6 class="wow fadeInUp" data-wow-delay="1.3s">Sistem Penentu Kualitas<br>Susu Sapi Perah</h6>
					<div class="lg-divider"></div>
					<a href="/dash"><button class="btn btn-tosca text-uppercase btn-block btn-lg wow zoomIn" data-wow-delay="1.8s">Login</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<!-- Javascript -->
	<script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
        
 	<script>
  		new WOW().init();
  	</script>
</body>
</html>