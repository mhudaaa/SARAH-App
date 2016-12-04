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
	  				Detail Kualitas
	  			</div>
	  			<div class="col s2 right-align">
            <a href="/dash/rekap"><img class="img-btn-sm" src="{{ URL::asset('assets/img/delete.png') }}"></a>
          </div>
	  		</div>
  		</div>
  	</div>

  	<div id="wrapper-d" class="wow fadeIn">
  		<div class="row">
  			<div class="col s6">
		  		<h5>Tanggal Periksa</h5>
  			</div>
  			<div class="col s6 right-align">
				<h5 class="bold text-tosca">{{ date('d M Y', strtotime($detailKualitas->created_at)) }}</h5>
  			</div>
  		</div>

  		<div class="row">
  			<div class="col s4">
  				<h5>Detail</h5>
  			</div>
  			<div class="col s8">
  				<hr>
  			</div>
  		</div>

  		<div class="row">
  			<div class="col s12">
  				<table class="tbl-detail">
  					<tr>
  						<td class="bold">Warna</td>
  						<td>:</td>
  						<td class="text-tosca">{{ $detailKualitas->warna->nama }}</td>
  					</tr>
  					<tr>
  						<td class="bold">Bau</td>
  						<td>:</td>
  						<td class="text-tosca">{{ $detailKualitas->bau->nama }}</td>
  					</tr>
  					<tr>
  						<td class="bold">Rasa</td>
  						<td>:</td>
  						<td class="text-tosca">{{ $detailKualitas->rasa->nama }}</td>
  					</tr>
  				</table>
  			</div>
  		</div>

  		<br>
  		<div class="row">
  			<div class="col s4">
  				<h5>Kesimpulan</h5>
  			</div>
  			<div class="col s8">
  				<hr>
  			</div>
  		</div>
		<div class="row">
			<div class="col s12">
    			<table class="tbl-detail">
    				<tr>
    					<td class="bold">Kualitas</td>
    					<td width="100%;">
                            @if ($detailKualitas->cek_warna === 1 && $detailKualitas->cek_rasa === 1 && $detailKualitas->cek_bau === 1)
                            <div class="chip bg-green uppercase">Baik</div>
                            @elseif ($detailKualitas->cek_warna === 2 && $detailKualitas->cek_rasa === 1 && $detailKualitas->cek_bau === 1)
                            <div class="chip grey lighten-2 grey-text text-darken-1 uppercase">Cukup</div>
                            @else
                            <div class="chip bg-red uppercase">Tidak Baik</div>
                            @endif
                      </td>
    				</tr>
    			</table>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col s12">
				<a href="/dash/rekap"><button class="btn btn-tosca z-depth-0">Kembali</button></a>
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
  	</script>
</body>
</html>

