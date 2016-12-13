<!DOCTYPE html>
<html>
<head>
    <title>Sarah APP</title>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <link href="{{ URL::asset('assets/css/materialize.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('assets/css/animate.min.css') }}" rel="stylesheet" type="text/css">
    <script type="text/javascript">
         window.onscroll = function () {
        // window.scrollTo(0,0);
       }
    </script>
</head>
<body class="dashboard dash">
    <!-- Menu -->
    <div class="side-nav" id="slide-out">
        <div class="rel" id="menu-wrapper">
            <div class="row">
                <div class="col s5"><img class="photo" src="{{ URL::asset('assets/img/ganteng.jpg') }}"></div>
                <div class="col s7">
                    <div class="profile-name text-white">
                        @foreach($users as $user)
                            {{ $user->nama }}
                        @endforeach
                    </div><small>Admin</small>
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
        </div>
    </div><!-- Header -->
    <div class="header">
        <div class="no-margin" id="wrapper-d">
            <div class="row">
                <div class="col s2">
                    <a class="button-collapse" data-activates="slide-out" href="#"><img class="img-btn menu" src="{{ URL::asset('assets/img/menu-btn.png') }}"></a>
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
    <div class="wow fadeIn" id="wrapper-d">
        <h5>Tabel Kualitas Susu</h5>
        <table class="dashboard">
            <tr>
                <td class="text-tosca">Warna</td>
                <td colspan="2"><hr></td>
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
        <br>
        <table class="dashboard">
            <tr>
                <td class="text-tosca">Bau</td>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td width="100px;"><b>Tidak berbau</b></td>
                <td width="10px">:</td>
                <td>Normal</td>
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
        <br>
        <table class="dashboard">
            <tr>
                <td class="text-tosca">Rasa</td>
                <td colspan="2"><hr></td>
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
    </div><!-- Javascript -->
    <script src="{{ URL::asset('assets/js/jquery-1.12.4.min.js') }}" type="text/javascript"></script> 
    <script src="{{ URL::asset('assets/js/wow.min.js') }}" type="text/javascript"></script> 
    <script src="{{ URL::asset('assets/js/materialize.min.js') }}" type="text/javascript"></script> 
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