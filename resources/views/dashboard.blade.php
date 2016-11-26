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
        <div class="profil">Pengaturan akun</div>
        <ul>
          <li><img src="{{ URL::asset('assets/img/home.png') }}"> <a href="/dash">Beranda</a></li>
          <li><img src="{{ URL::asset('assets/img/milk.png') }}"> <a href="/dash/kualitas">Kualitas susu</a></li>
          <li><img src="{{ URL::asset('assets/img/note.png') }}"> <a href="/dash/rekap">Rekap</a></li>
        </ul>

        <a href=""><div class="logout">Logout</div></a>
      </div>
  </div>
    
    <!-- Header -->
    <div class="header">
      <div id="wrapper-d" class="no-margin">
        <div class="row">
          <div class="col s2">
            <a href="#" data-activates="slide-out" class="button-collapse"><img class="img-btn menu" src="{{ URL::asset('assets/img/menu-btn.png') }}"></a>
          </div>
          <div class="col s8 center-align title">
            BERANDA
          </div>
          <div class="col s2 right-align">
            <a href="/dash/rekap"><img class="img-btn" src="{{ URL::asset('assets/img/milk-btn.png') }}"></a>
          </div>
        </div>
      </div>
    </div>

    <div id="wrapper-d" class="wow fadeIn">
      <h5>Tabel Kualitas Susu</h5>
      <table class="dashboard">
        <tr>
          <td colspan="2" class="text-tosca">Warna</td>
        </tr>
        <tr>
          <td width="100px;"><b>Putih</b></td>
          <td width="10px">:</td>
          <td>Normal</td>
        </tr>
        <tr>
          <td><b>Kebiru-biruan</b></td>
          <td>:</td>
          <td>Dicampur Air</td>
        </tr>
        <tr>
          <td><b>Kuning</b></td>
          <td>:</td>
          <td>Terdapat caroten/provitamin A</td>
        </tr>
        <tr>
          <td><b>Merah</b></td>
          <td>:</td>
          <td>Kemungkinan darah</td>
        </tr>
      </table>

      <hr>

      <table class="dashboard">
        <tr>
          <td colspan="2" class="text-tosca">Bau</td>
        </tr>
        <tr>
          <td width="100px;"><b>Busuk</b></td>
          <td width="10px">:</td>
          <td>Mastitis (bakteri)</td>
        </tr>
        <tr>
          <td><b>Asam</b></td>
          <td>:</td>
          <td>Terkontaminasi mikroba membusuk</td>
        </tr>
      </table>

      <hr>

      <table class="dashboard">
        <tr>
          <td colspan="2" class="text-tosca">Rasa</td>
        </tr>
        <tr>
          <td width="100px;"><b>Agak Manis</b></td>
          <td width="10px">:</td>
          <td>Normal</td>
        </tr>
        <tr>
          <td><b>Asam</b></td>
          <td>:</td>
          <td>Terkontaminasi mikroba asam</td>
        </tr>
      </table>
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

