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
                    <img src="{{ URL::asset('assets/img/calendar.png') }}"> <a href="/dash/kualitas">Jadwal Makan</a>
                </li>
                <li>
                    <img src="{{ URL::asset('assets/img/vaccine.png') }}"> <a href="/dash/kualitas">Vaksinasi</a>
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
                    VAKSINASI
                </div>
                <div class="col s2 right-align">
                    <a href="/dash/vaksin/tambah"><img class="img-btn" src="{{ URL::asset('assets/img/plus.png') }}"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="wow fadeIn" id="wrapper-d">

        @if(Session::has('message'))
        <div class="col s12">
            <div class="alert">
                {{ Session::get('message') }}
            </div>
        </div>
        @endif

        <h5>Riwayat Vaksin</h5>

        @foreach($vaksins as $vaksin)
        <table class="dashboard">
            <tr>
                <td width="80px" class="text-tosca bold">{{ date('d M Y', strtotime($vaksin->created_at)) }}</td>
                <td colspan="2"><hr class="mid"></td>
                <td width="30px"><a href="/dash/vaksin/detail/{{ $vaksin->id_vaksin }}"><img class="edit" src="{{ URL::asset('assets/img/edit.png') }}"></a></td>
            </tr>
            <tr>
                <td width="80px;"><b>Nama</b></td>
                <td width="10px">:</td>
                <td colspan="2">{{ $vaksin->nama_vaksin }}</td>
            </tr>
            <tr>
                <td><b>Manfaat</b></td>
                <td>:</td>
                <td colspan="2">{{ $vaksin->manfaat }}</td>
            </tr>
            <tr>
                <td><b>Tanggal</b></td>
                <td>:</td>
                <td colspan="2">{{ $vaksin->tgl_vaksin }}</td>
            </tr>
            <tr>
                <td><b>Jumlah</b></td>
                <td>:</td>
                <td colspan="2">{{ $vaksin->jml_vaksin }} ml</td>
            </tr>
        </table>
        <br>
        @endforeach
        
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
         $('.alert').delay(3000).fadeOut(500)
    </script>
</body>
</html>