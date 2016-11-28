<!DOCTYPE html>
<html>
<head>
	<title>Sarah APP</title>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
    
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/materialize.min.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/animate.min.css') }}">
	
	<script type="text/javascript">
  		window.onscroll = function () {
		 window.scrollTo(0,0);
		}
	</script>
</head>

<body class="dashboard">
  	
	<!-- Menu -->
	<div id="slide-out" class="side-nav">
  		<div id="menu-wrapper" class="rel">
  			<div class="row">
  				<div class="col s6">
  					<img class="photo" src="{{ URL::asset('assets/img/ganteng.jpg') }}">
  				</div>
  				<div class="col s6">
  					<div class="profile-name text-white">M. Huda</div>
  					<small>Admin</small>
  				</div>
  			</div>
			<!-- <div class="profil">Pengaturan akun</div> -->
		  	<ul>
		   		<li><img src="{{ URL::asset('assets/img/home.png') }}"> <a href="/dash">Beranda</a></li>
	          	<li><img src="{{ URL::asset('assets/img/milk.png') }}"> <a href="/dash/kualitas">Kualitas susu</a></li>
	          	<li><img src="{{ URL::asset('assets/img/note.png') }}"> <a href="/dash/rekap">Rekap</a></li>
		  	</ul>

		  	<!-- <div class="copy">
		  		&copy;
		  	</div> -->
  		</div>
	</div>
  	
  	<!-- Header -->
  	<div class="header">
  		<div id="wrapper-d" class="no-margin">
	  		<div class="row">
	  			<div class="col s2">
	  				<a href="#" data-activates="slide-out" class="button-collapse"><img class="img-btn menu" src="{{ URL::asset('assets/img/menu-btn.png') }}"></a>
	  			</div>
	  			<div class="col s8 center-align title uppercase">
	  				Cek Kualitas
	  			</div>
	  			<div class="col s2 right-align">
	  				<a href="/dash" data-activates="slide-out"><img class="img-btn-sm" src="{{ URL::asset('assets/img/delete.png') }}"></a>
	  			</div>
	  		</div>
  		</div>
  	</div>

  	<div id="wrapper-d" class="wow fadeIn">
  		<h5 class="bold text-tosca">{{ date('d M Y') }}</h5>
  		<br>
  		<h5>Lengkapi isian dibawah</h5>
  		<form method="post" onsubmit="return confirm('Do you really want to submit the form?');" action="{{ url('/dash/kualitas/add') }}">

			{{ csrf_field() }}
  			<div class="row">
  				<div class="input-field col s6">
	  				<label for="warna">Warna</label>
  				</div>
  				<div class="input-field col s6">
		  			<select name="cek_warna" required="">
		  				<option value="">Pilih warna</option>
		  				<option value="1">Putih</option>
		  				<option value="2">Merah</option>
		  				<option value="3">Kuning</option>
		  				<option value="4">Kebiru-biruan</option>
		  			</select>
  				</div>
  			</div>
  			<div class="row">
  				<div class="input-field col s6">
	  				<label for="warna">Bau</label>
  				</div>
  				<div class="input-field col s6">
		  			<select name="cek_bau" required="">
		  				<option value="">Pilih bau</option>
		  				<option value="1">Busuk</option>
		  				<option value="2">Asam</option>
		  			</select>
  				</div>
  			</div>
  			<div class="row">
  				<div class="input-field col s6">
	  				<label for="warna">Rasa</label>
  				</div>
  				<div class="input-field col s6">
		  			<select name="cek_rasa" required="">
		  				<option value="">Pilih rasa</option>
		  				<option value="1">Pahit</option>
		  				<option value="2">Asam</option>
		  				<option value="3">Agak Manis</option>
		  			</select>
  				</div>
  			</div>
  			<br><br>
  			<div class="row">
  				<div class="col s8 offset-s2">
	  				<input type="submit" class="btn btn-tosca z-depth-0 btn-block" value="simpan">
  				</div>
  			</div>
  		</form>
  	</div>

  	<!-- Javascript -->
  	<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-1.12.4.min.js') }}"></script>   
    <script type="text/javascript" src="{{ URL::asset('assets/js/wow.min.js') }}"></script>   
    <script type="text/javascript" src="{{ URL::asset('assets/js/materialize.min.js') }}"></script>
  	<script type="text/javascript">
	  	$('.button-collapse').sideNav({
	      menuWidth: 240, // Default is 240
	      edge: 'left', // Choose the horizontal origin
	      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
	      draggable: true // Choose whether you can drag to open on touch screens
	    }
  		);

	    new WOW().init();
  	</script>
</body>
</html>

