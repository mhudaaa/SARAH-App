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
  	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/linearicons.css') }}">
	
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
	  				Riwayat Kualitas
	  			</div>
	  			<div class="col s2 right-align">
	  				<a href="/dash/kualitas"><img class="img-btn" src="{{ URL::asset('assets/img/plus.png') }}"></a>
	  			</div>
	  		</div>
  		</div>
  	</div>

  	<div id="wrapper-d" class="wow fadeIn">
  		<div class="row">

	  		@if(Session::has('message'))
  			<div class="col s12">
  				<div class="alert">
		  			{{ Session::get('message') }}
  				</div>
  			</div>
	  		@endif
  		</div>

  		<div class="row">
  			<div class="col s7">
		  		<h5><i class="lnr lnr-calendar-full text-tosca"></i> December 2016</h5>
  			</div>
  			<div class="col s5">
                @if($hasil == "Baik")
                <a href="#baik"><div class="chip amber accent-3 white-text uppercase">{{ $hasil }}</div></a>
                @elseif($hasil == "Cukup")
                <a href="#cukup"><div class="chip amber accent-3 white-text uppercase">{{ $hasil }}</div></a>
                @else
                <a href="#tidak-baik"><div class="chip amber accent-3 white-text uppercase">{{ $hasil }}</div></a>
                @endif
  			</div>
  		</div>
  		<hr>
  		<table class="tbl-kualitas">
	        <tbody>

	        <?php $no =0 ?>
	        	@foreach($kualitass as $kualitas)
	          	<tr class="wow fadeInUp" data-wow-delay=".{{ $no++ }}s">
	            	<td class="bold uppercase text-tosca">{{ date('l', strtotime($kualitas->created_at)) }},</td>
	            	<td class="bold uppercase text-tosca">{{ date('d M Y', strtotime($kualitas->created_at)) }}</td>
	            	<td>
	            		<a href="/dash/kualitas/detail/{{ $kualitas->id_cek }}">
	            			@if ($kualitas->hasil === 1)
	            			<div class="chip bg-green uppercase">Baik</div>
	            			@elseif ($kualitas->hasil === 2)
	            			<div class="chip grey lighten-2 grey-text text-darken-1 uppercase">Cukup</div>
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

    <!-- Modal -->
    <!-- Baik -->
    <div id="baik" class="modal">
        <div class="modal-content">
            <h5 class="text-tosca">Kualitas Baik</h5>
            <hr>
            <p class="grey-text">Kualitas susu bulan ini sudah baik.</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>
    </div>

    <!-- Cukup -->
    <div id="cukup" class="modal">
        <div class="modal-content">
            <h5 class="yellow-text text-darken-3">Kualitas Cukup</h5>
            <hr>
            <p class="grey-text">Kualitas susu bulan ini belum cukup baik. Sebaiknya ...</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
        </div>
    </div>

    <!-- Kurang Baik -->
    <div id="tidak-baik" class="modal">
        <div class="modal-content">
            <h5 class="red-text">Kualitas Tidak Baik</h5>
            <hr>
            <p class="grey-text">Kualitas susu bulan ini tidak baik. Sebaiknya ...</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Ok</a>
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

	    $('.alert').delay(3000).fadeOut(500);

        $(document).ready(function(){
            // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
            $('.modal').modal();
          });
  	</script>
</body>
</html>

