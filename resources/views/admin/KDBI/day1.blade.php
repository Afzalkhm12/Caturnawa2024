<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== Icon Web ===============-->
    <link rel="icon" href="../../../img/uf1.png">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="../../../css/nowrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/admin.css">
    <link rel="stylesheet" href="../../../css/navadmin.css">
    <link rel="stylesheet" href="../../../css/tambahspc.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 


    <title>Caturnawa - Admin</title>
    <style>

 
#loadingDiv {
   width: 100%;
   height: 100%;
   z-index: 999999;
   position: fixed;
   display: flex;
   align-items: center;
   justify-content: center;
   background-color: white;
 }
 
  .loader {
  width: 40%;
  height: 40%;
  background: center / contain no-repeat url(../../../img/mskt1.svg);

 
  animation: blink 2s infinite; 
}

@keyframes blink { 
  0% { opacity: 1; } 
  50% { opacity: 0.2; } 
  100% { opacity: 1; } 
}
     </style>
</head>
<body>
    <div id="loadingDiv">
        <div class="loader"></div>
      </div>
<!--==================== Navbar ====================-->
<header class="header" id="header">
    <nav class="nav container1">
        <div class="nav_menu" id="nav-menu">
            <i id="menu" class="fa fa-bars" aria-hidden="true"></i>

        </div>
        <div class="nav_logo" id="nav-logo">
            <img class="logo" src="../../img/kdbiaja.png" alt="Logo">
            <h2><a href="#" class="nav__logo"  style="margin-left: -3rem">Admin KDBI </a></h2>
        </div>
    </nav>
</header>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 0"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<!--==================== Sidebar ====================-->
<div id="sidebar" class="sidebar">
    <a href="#" id="menu"><img class="sidelogo" id="sidelogo" src="../../img/uf2.png" alt="Logo"></a>
    <a href="{{url('/admin/mainmenuKDBI')}}" id="beranda" class="beranda"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a href="{{url('/admin/pesertaKDBI')}}" id="finalLKTI" class="final"><i class="fa fa-user-plus"></i> Data Peserta</a>
    <a href="{{url('/admin/penyisihanKDBI')}}" class="penyisihan"><i class="fa fa-users"></i> Penyisihan</a>
    <a href="{{route('kdbi.tampilkdbi3')}}" id="semifinalLKTI" class="semifinal"><i class="fa fa-list-alt"></i> SemiFinal</a>
    <a href="{{url('/admin/finalKDBI')}}" id="finalLKTI" class="final"><i class="fa fa-trophy"></i> Final</a>
    
    
    <!-- resources/views/mainmenu.blade.php -->

    <!-- Tautan untuk logout -->
    <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out"></i> Logout
    </a>

    <!-- Form untuk logout (disembunyikan) -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
@php
use Carbon\Carbon;

$today = Carbon::now();


$tambahedit = Carbon::parse('2025-05-28');

@endphp
<div id="data-container">
    <section id="skor">
        <div class="container" style="display: flex; justify-content: center;height:70rem">
            <div style="width: 100%;">
                <h1 class="welcome" style="margin-bottom: 1rem; margin-top:auto">Penyisihan Day 1</h1>
                <p><a class="add" href="#" style="color: white" onclick="
                    event.preventDefault();
                    @if (!$today->greaterThanOrEqualTo($tambahedit))
                        Swal.fire('Ditutup', 'Pengeditan Nilai sudah ditutup,jika ada kendala silahkan menghubungi pihak terkait', 'info');
                    @else
                        window.location.href = '{{ route('kdbi.pesertaday1') }}';
                    @endif
                ">Tambah Penilaian</a></p>
                <div class="table-responsive" style="max-height: 1000px; overflow-x: auto; overflow-y: auto; position: static;">
                    @foreach ($groupedByRondeAndSesi as $ronde => $sesiChunks)
                    @foreach ($sesiChunks as $sesi => $dataSesi)
                    <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 10px;">
    <h2 style="color: white; text-align:center">Ronde {{ $ronde }} |</h2>
    <h3 style="color: white; text-align:center; margin-left: 10px;">Sesi {{ $sesi }}</h3></div>
                    @foreach ($dataSesi as $room => $dataa)
                    <h3 style="color: white; text-align:center">Breakout Room {{ $room }}</h3>
                                    <table class="table table-bordered " style="min-width: 650px; margin-bottom: 5rem; border-collapse: collapse;">
                                        <thead style="position: static; top: -1; z-index: 10;">
                                            <tr>
                                                <th scope="col" rowspan="2">Adjudicators</th>
                                                <th scope="col" rowspan="2">Team</th>
                                                <th scope="col" rowspan="2">Position Team</th>
                                                <th scope="col" rowspan="2">Participant Name</th>
                                                <th scope="col" >Score Individu</th>
                                                <th scope="col" rowspan="2">Score team</th>
                                                <th scope="col" rowspan="2">Victory Point</th>
                                                <th scope="col" rowspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($dataa->isNotEmpty()) 
                                            <tr>
                                                <td rowspan="20">{{ $dataa->first()->juri }}</td>
                                            @foreach ($dataa as $item)
                                        <tr>
                                            <td>{{ $item->team}}</td>
                                            <td>{{ $item->posisi}}</td>
                                            <td>{{ $item->nama1}}({{ $item->posisi1}})<br>{{ $item->nama2}}({{ $item->posisi2}})</td>
                                            <td>{{ $item->skorindividu1}}<br>{{ $item->skorindividu2}}</td>
                                            <td>{{ $item->total}}</td>
                                            <td>{{ $item->vp}}</td>
                                            <td>
                                                <a href="#" onclick="
                                                    event.preventDefault();
                                                    @if (!$today->greaterThanOrEqualTo($tambahedit))
                                                        Swal.fire('Ditutup', 'Pengeditan Nilai sudah ditutup,jika ada kendala silahkan menghubungi pihak terkait', 'info');
                                                    @else
                                                        window.location.href = '{{ route('kdbi.editkdbi', $item->id) }}';
                                                    @endif
                                                ">Edit</a>
                                                <form action="{{ route('kdbi.hapuskdbi', $item->id) }}" method="POST" id="delete-form-{{ $item->id }}">
                                                    @csrf 
                                                    <button type="button" style="color: red" onclick="
                                                    event.preventDefault();
                                                    @if (!$today->greaterThanOrEqualTo($tambahedit))
                                                        Swal.fire('@lang('messages.sweet1')', '@lang('messages.sweet3')', 'info');
                                                    @else
                                                        confirmDelete({{ $item->id }})
                                                    @endif
                                                ">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @endif
                                        </tbody>
                                    </table>
                                    @endforeach
                                    @endforeach
                                    @endforeach
                                </div>
                        </div>
                        <style>
                            .table-bordered td,
                            .table-bordered th {
                                
                                text-align: center;
                                vertical-align: middle;
                                
                            }
                
                            thead th {
                                background-color: #cecece !important;
                            }
                        </style>
                    </section>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit(); 
            }
        });
    }
    </script>
<script src="../../../js/adminLKTI.js"></script>
<script>
    document.getElementById("menu").addEventListener("click", function () {
        document.body.classList.toggle("sidebar-open");
    });
    </script>
    <script>
        function removeLoader() {
    $("#loadingDiv").fadeOut(200, () => {
      $("#loadingDiv").remove();
    });
  }
  
  $(window).on("load", () => {
    setTimeout(removeLoader, 2000);
  
    $("body").css(
      "overflow-y",
      "hidden",
      setTimeout(() => {
        $("body").css("overflow-y", "visible");
      }, 2000)
    );
  });
    </script>
</body>
</html>
