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
  				<div class="col s5">
  					<img class="photo" src="{{ URL::asset('assets/img/ganteng.jpg') }}">
  				</div>
  				<div class="col s7">
  					@foreach($users as $user)
  					<div class="profile-name text-white">{{ $user->nama }}</div>
  					@endforeach
  					<small>Admin</small>
  				</div>
  			</div>
			<a href="/dash/akun">
                <div class="profil">
                    Pengaturan akun
                </div>
            </a>
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
	  				Pengaturan Akun
	  			</div>
	  			<div class="col s2 right-align">
	  				<a href="/dash" data-activates="slide-out"><img class="img-btn-sm" src="{{ URL::asset('assets/img/delete.png') }}"></a>
	  			</div>
	  		</div>
  		</div>
  	</div>

  	<div id="wrapper-d" class="wow fadeIn">

  		@if(Session::has('message'))
  		<div class="row">
  			<div class="col s12">
  				<div class="alert">
		  			{{ Session::get('message') }}
  				</div>
  			</div>
  		</div>
  		@endif

    	@foreach($users as $user)
  		<form method="post" action="{{ url('/dash/akun/ubahData') }}&{{ $user->id_user }}">
  			
  			<div class="row mini">
  				<div class="input-field col s5">
	  				<label for="warna" class="uppercase text-shadow text-dark"><small><b>Username</b></small></label>
  				</div>
  				<div class="input-field col s7">
  					<input type="text" name="username" value="{{ $user->username }}" required="" maxlength="10">
  				</div>
  			</div>
  			<div class="row mini">
  				<div class="input-field col s5">
	  				<label for="warna" class="uppercase text-shadow text-dark"><small><b>Nama</b></small></label>
  				</div>
  				<div class="input-field col s7">
  					<input type="text" name="nama" value="{{ $user->nama }}" required="" maxlength="15">
  				</div>
  				<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
  			</div>
  			<br>
  			<div class="row">
  				<div class="col s10 offset-s1">
	  				<input type="submit" class="btn btn-tosca z-depth-0 btn-block" value="simpan profil">
  				</div>
  			</div>
  		</form>
  		@endforeach

  		<br>
  		<h5>Ubah Password</h5>
  		<form method="post" action="{{ url('/dash/akun/ubahDataPassword') }}&{{ $user->id_user }}">
  			<!-- <div class="row mini">
  				<div class="input-field col s6">
	  				<label for="warna" class="uppercase text-shadow text-dark"><small><b>Password Lama</b></small></label>
  				</div>
  				<div class="input-field col s6">
  					<input type="password" name="passlama" value="" required="" maxlength="10">
  				</div>
  			</div> -->
  			<div class="row mini">
  				<div class="input-field col s6">
	  				<label for="warna" class="uppercase text-shadow text-dark"><small><b>Password Baru</b></small></label>
  				</div>
  				<div class="input-field col s6">
  					<input type="password" name="password" value="" required="" maxlength="15">
  					<input type="hidden" name="_token" value="{{{ csrf_token() }}}">
  				</div>
  			</div>
  			<br>
  			<div class="row">
  				<div class="col s10 offset-s1">
	  				<input type="submit" class="btn btn-tosca z-depth-0 btn-block" value="simpan password">
  				</div>
  			</div>
  		</form>

  		<hr class="md">
  		<div class="row">
			<div class="col s12">
					<a href="/login"><div class="red-text center-align">Logout</div>
			</div>
		</div>

  	</div>

  	<!-- Javascript -->
  	<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-1.12.4.min.js') }}"></script>   
    <script type="text/javascript" src="{{ URL::asset('assets/js/wow.min.js') }}"></script>   
    <script type="text/javascript" src="{{ URL::asset('assets/js/materialize.min.js') }}"></script>
  	<script type="text/javascript">
	  	$('.button-collapse').sideNav({
	      menuWidth: 280, // Default is 240
	      edge: 'left', // Choose the horizontal origin
	      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
	      draggable: true // Choose whether you can drag to open on touch screens
	    }
  		);

	    new WOW().init();

	    $('.alert').delay(3000).fadeOut(500)
  	</script>
</body>
</html>

