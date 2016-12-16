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
	  				Cek Kualitas
	  			</div>
	  			<div class="col s2 right-align">
	  				<a href="/dash" data-activates="slide-out"><img class="img-btn-sm" src="{{ URL::asset('assets/img/delete.png') }}"></a>
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
  		<form method="post" class="form-tambah" action="{{ url('/dash/kualitas/add') }}">

			{{ csrf_field() }}
			<div class="row">
  				<div class="input-field col s6">
	  				<label for="jumlah">Jumlah Susu</label>
  				</div>
  				<div class="input-field col s4">
	  				<input id="jumlah" type="number" name="jumlah_susu" required="">
  				</div>
  				<div class="input-field col s2">
	  				<label for="jumlah">Liter</label>
  				</div>
  			</div>
  			<div class="row">
  				<div class="input-field col s6">
	  				<label for="ph">pH</label>
  				</div>
  				<div class="input-field col s6">
	  				<input id="jumlah" type="text" name="pH" required="">
  				</div>
  			</div>
  			<div class="row">
  				<div class="input-field col s6">
	  				<label for="protein">Protein</label>
  				</div>
  				<div class="input-field col s5">
	  				<input id="protein" type="number" name="protein" required="">
  				</div>
  				<div class="input-field col s1">
	  				<label for="jumlah">%</label>
  				</div>
  			</div>
  			<div class="row">
  				<div class="input-field col s6">
	  				<label for="warna">Warna</label>
  				</div>
  				<div class="input-field col s6">
		  			<select id="cek_warna" name="cek_warna" class="required" required="">
		  				<option value="">- Pilih warna -</option>
		  				<option value="1">Putih</option>
		  				<option value="2">Kebiru-biruan</option>
		  				<option value="3">Kuning</option>
		  				<option value="4">Merah</option>
		  			</select>
  				</div>
  			</div>
  			<div class="row">
  				<div class="input-field col s6">
	  				<label for="warna">Bau</label>
  				</div>
  				<div class="input-field col s6">
		  			<select id="cek_bau" name="cek_bau" class="required" required="">
		  				<option value="">- Pilih bau -</option>
		  				<option value="1">Tidak berbau</option>
		  				<option value="2">Busuk</option>
		  				<option value="3">Asam</option>
		  			</select>
  				</div>
  			</div>
  			<div class="row">
  				<div class="input-field col s6">
	  				<label for="warna">Rasa</label>
  				</div>
  				<div class="input-field col s6">
		  			<select id="cek_rasa" name="cek_rasa" class="required" required="">
		  				<option value="">- Pilih rasa -</option>
		  				<option value="1">Agak Manis</option>
		  				<option value="2">Asam</option>
		  				<option value="3">Pahit</option>
		  			</select>
  				</div>
  			</div>
  			<br><br>
  			<div class="row">
  				<div class="col s8 offset-s2">
            <input type="hidden" name="check" value="0">
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

	    new WOW().init();
	    
	    $('.btn-confirm').on('click', function (event) {
	    	event.preventDefault();
        	
        	if($('#cek_warna').val() == ""){
				$.alert('Data tidak boleh kosong!');
        	} else if($('#cek_bau').val() == ""){
				$.alert('Data tidak boleh kosong!');
        	} else if($('#cek_rasa').val() == ""){
				$.alert('Data tidak boleh kosong!');
        	} else{

	        	$.confirm({
	        	
				    title: 'Simpan!',
				    content: 'Data yang telah anda masukkan tidak dapat diubah. Periksa data terlebih dahulu',
				    buttons: {
				        confirm: {
				            btnClass: 'btn-primary z-depth-0',
				            text: 'Simpan',
				            keys: ['enter'],
				        	action: function () {
				            	$('.form-tambah').submit();
				            }
				        },
				        cancel: {
				            btnClass: 'z-depth-0 btn-muted',
				            text: 'Batal',
				        	action: function () {
				            	$.alert('Periksa data kembali');
				            }
				        }
				    }
				});
        	}
	    });

  	</script>
</body>
</html>

