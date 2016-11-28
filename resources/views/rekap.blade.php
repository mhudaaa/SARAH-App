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
	  				Riwayat Kualitas
	  			</div>
	  			<div class="col s2 right-align">
	  				<a href="/dash/kualitas"><img class="img-btn" src="{{ URL::asset('assets/img/plus.png') }}"></a>
	  			</div>
	  		</div>
  		</div>
  	</div>

  	<div id="wrapper-d" class="wow fadeIn">
  		<h5>November 2016</h5>

  		<table class="tbl-kualitas">
	        <tbody>

	        <?php $no =0 ?>
	        	@foreach($kualitass as $kualitas)
	          	<tr class="wow fadeInUp" data-wow-delay=".{{ $no+=2 }}s">
	            	<td class="bold uppercase text-tosca">{{ date('l', strtotime($kualitas->created_at)) }},</td>
	            	<td class="bold uppercase text-tosca">{{ date('d M Y', strtotime($kualitas->created_at)) }}</td>
	            	<td>
	            		<a href="/dash/kualitas/detail/{{ $kualitas->id_cek }}">
	            			@if ($kualitas->cek_warna === 1 && $kualitas->cek_rasa === 1 && $kualitas->cek_bau === 1)
	            			<div class="chip bg-green uppercase">Baik</div>
	            			@else
	            			<div class="chip bg-red uppercase">Tidak Baik</div>
	            			@endif
				        </a>
	            	</td>
	          	</tr>
	          	@endforeach
	        </tbody>
      	</table>
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

