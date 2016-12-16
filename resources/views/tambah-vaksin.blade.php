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
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/jquery-confirm.css') }}">
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/animate.min.css') }}">
	
	<script type="text/javascript">
  		window.onscroll = function () {
		 // window.scrollTo(0,0);
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
                <li>
                    <img src="{{ URL::asset('assets/img/home.png') }}"> <a href="/dash">Beranda</a>
                </li>
                <li>
                    <img src="{{ URL::asset('assets/img/calendar.png') }}"> <a href="/dash/jadwal">Pakan</a>
                </li>
                <li>
                    <img src="{{ URL::asset('assets/img/vaccine.png') }}"> <a href="/dash/vaksin">Vaksinasi</a>
                </li>
                <li>
                    <img src="{{ URL::asset('assets/img/milk.png') }}"> <a href="/dash/kualitas">Kualitas susu</a>
                </li>
                <li>
                    <img src="{{ URL::asset('assets/img/note.png') }}"> <a href="/dash/rekap">Rekap</a>
                </li>
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
	  				TAMBAH VAKSIN
	  			</div>
	  			<div class="col s2 right-align">
	  				<a href="/dash/vaksin" data-activates="slide-out"><img class="img-btn-sm" src="{{ URL::asset('assets/img/delete.png') }}"></a>
	  			</div>
	  		</div>
  		</div>
  	</div>

  	<div id="wrapper-d" class="wow fadeIn">

		<div class="row">
			<div class="col s12">
		  		<h5 class="bold text-tosca">{{ date('d M Y') }}</h5>
			</div>
		</div>
  		<!-- <br> -->
  		<!-- <h5>Lengkapi isian dibawah</h5> -->
  		<form method="post" class="form-tambah" action="{{ url('/dash/vaksin/add') }}">

			{{ csrf_field() }}
			<div class="row">
  				<div class="input-field col s3">
	  				<label for="nama">Nama</label>
  				</div>
  				<div class="input-field col s9">
	  				<input id="nama" type="text" name="nama_vaksin" maxlength="50" required="">
  				</div>
  			</div>
  			<div class="row">
  				<div class="input-field col s3">
	  				<label for="nama">Manfaat</label>
  				</div>
  				<div class="input-field col s9">
	  				<textarea name="manfaat" class="materialize-textarea" maxlength="100" required=""></textarea>
  				</div>
  			</div>
  			<div class="row">
  				<div class="input-field col s3">
	  				<label for="tanggal">Tanggal</label>
  				</div>
  				<div class="input-field col s9">
	  				<input id="tanggal" type="date" class="datepicker" name="tgl_vaksin" required="">
  				</div>
  			</div>
            <div class="row">
                <div class="input-field col s3">
                    <label for="jumlah">Jumlah</label>
                </div>
                <div class="input-field col s8">
                    <input id="jumlah" type="text" name="jml_vaksin" required="">
                </div>
                <div class="input-field col s1">
                    <label for="jumlah">ml</label>
                </div>
            </div>
  			<br><br>
  			<div class="row">
  				<div class="col s8 offset-s2">
	  				<input type="submit" class="btn btn-confirm btn-tosca z-depth-0 btn-block" value="simpan">
  				</div>
  			</div>
  		</form>
  	</div>

  	<!-- Javascript -->
  	<script type="text/javascript" src="{{ URL::asset('assets/js/jquery-1.12.4.min.js') }}"></script>   
    <script type="text/javascript" src="{{ URL::asset('assets/js/wow.min.js') }}"></script>   
    <script type="text/javascript" src="{{ URL::asset('assets/js/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-confirm.js') }}"></script>
  	<script type="text/javascript">
	  	$('.button-collapse').sideNav({
	      menuWidth: 280, // Default is 240
	      edge: 'left', // Choose the horizontal origin
	      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
	      draggable: true // Choose whether you can drag to open on touch screens
	    }
  		);

	  	$('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 5 // Creates a dropdown of 15 years to control year
		});

	    new WOW().init();
	    
  	</script>
</body>
</html>

