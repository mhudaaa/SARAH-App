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
	  				UBAH JADWAL
	  			</div>
	  			<div class="col s2 right-align">
	  				<a href="/dash/jadwal" data-activates="slide-out"><img class="img-btn-sm" src="{{ URL::asset('assets/img/delete.png') }}"></a>
	  			</div>
	  		</div>
  		</div>
  	</div>

  	<div id="wrapper-d" class="wow fadeIn">

  		<!-- <br> -->
  		<!-- <h5>Lengkapi isian dibawah</h5> -->
  		<form method="post" class="form-tambah" action="{{ url('/dash/jadwal/ubahPagi') }}">

			{{ csrf_field() }}
            
            @foreach($pagi as $p)
            <div class="row mini">
  				<div class="input-field col s12">
                    <label class="text-tosca bold">{{ $p->waktu_pakan }}</label><br>
                </div>
            </div>

            <div class="row mini">
                <div class="input-field col s6">
                    <label for="Jumlah">Jumlah</label>
                </div>
                <div class="input-field col s4">
                    <input id="Jumlah" class="center-align" type="number" value="{{ $p->jml_pakan }}" name="jml_pakan" required="">
                </div>
                <div class="input-field col s2">
                    <label for="Jumlah">Kg</label>
                </div>
            </div>
            <div class="row mini">
                <div class="input-field col s6">
                    <label for="air">Air</label>
                </div>
                <div class="input-field col s4">
                    <input id="air" class="center-align" type="number" value="{{ $p->jml_air }}" name="jml_air" required="">
                </div>
                <div class="input-field col s2">
                    <label for="air">Liter</label>
                </div>
            </div>
            <br>
             <div class="row mini">
                <div class="col s8 offset-s2">
                    <input type="submit" class="btn btn-confirm btn-tosca z-depth-0 btn-block" value="simpan" required="">
                </div>
            </div>
            @endforeach
  		</form>

        <br>
        <hr>
        <br>

        <form method="post" class="form-tambah" action="{{ url('/dash/jadwal/ubahSiang') }}">

            {{ csrf_field() }}
            
            @foreach($siang as $s)
            <div class="row mini">
                <div class="input-field col s12">
                    <label class="text-tosca bold">{{ $s->waktu_pakan }}</label><br>
                </div>
            </div>

            <div class="row mini">
                <div class="input-field col s6">
                    <label for="Jumlah">Jumlah</label>
                </div>
                <div class="input-field col s4">
                    <input id="Jumlah" class="center-align" type="number" value="{{ $s->jml_pakan }}" name="jml_pakan">
                </div>
                <div class="input-field col s2">
                    <label for="Jumlah">Kg</label>
                </div>
            </div>
            <div class="row mini">
                <div class="input-field col s6">
                    <label for="air">Air</label>
                </div>
                <div class="input-field col s4">
                    <input id="air" class="center-align" type="number" value="{{ $s->jml_air }}" name="jml_air">
                </div>
                <div class="input-field col s2">
                    <label for="air">Liter</label>
                </div>
            </div>
            <br>
             <div class="row mini">
                <div class="col s8 offset-s2">
                    <input type="submit" class="btn btn-confirm btn-tosca z-depth-0 btn-block" value="simpan">
                </div>
            </div>
            @endforeach
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

