<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--=============== Icon Web ===============-->
      <link rel="icon"  href="../../../img/uf1.png">
      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="../../../css/nowrap.css">
      <link rel="stylesheet" href="../../../css/back.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../../../css/navmenudbt.css">
      <link rel="stylesheet" href="../../../css/pagelomba.css">
      <style>
        h1{
            color: #fff;
            text-align: center;
        }
        .card-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    gap: 20px;
  }
    .card-list .card-item {
      background: #fff;
      padding: 26px;
      border-radius: 25px;
      align-items: center;
      box-shadow: 0px 5px 8px #f6ae31;
      list-style: none;
      cursor: pointer;
      text-decoration: none;
      border: 2px solid transparent;
      transition: border 0.5s ease;
    }
    .card-list .card-item:hover {
      border: 2px solid #f6ae31;
    }
    .card-list .card-item img {
      width: 100%;
      aspect-ratio: 16/9;
      border-radius: 8px;
      object-fit: cover;
    }
    .card-list span {
      display: inline-block;
      background: #F7DFF5;
      margin-top: 32px;
      padding: 8px 15px;
      font-size: 1rem;
      border-radius: 50px;
      font-weight: 800;
    }
    .card-item h3 {
      color: #000;
      font-size: 1.3rem;
      margin-top: 28px;
      font-weight: 600;
      text-align: center;
    }
    .card-item .card-icon {
      display: flex;
      margin: 0 auto;
      text-align: center;
      justify-content: center;
      align-items: center;
      height: 40px;
      width: 180px;
      color: #f6ae31;
      border: 1px solid #f6ae31;
      border-radius: 20px;
      margin-top: 25px;
      cursor: pointer;
      transition: 0.2s ease;
    }
    
    
    .card-list .card-item:hover .card-icon  {
      background: #f6ae31;
      color: #fff; 
    }
    @media (max-width: 1200px) {
      .card-list .card-item {
          padding: 15px;
          
      }
    }
    @media screen and (max-width: 980px) {
      .card-list {
          margin: 0 auto;
          grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
          
      }
    }
    @media screen and (max-width: 829px) {
        h1{
            margin-top: 5rem
        }
      .card-list {
          margin: 0 auto;
          grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
          
      }
    }
    
      </style>
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
      <title>Caturnawa - EDCFinalRound1</title>
   </head>
   <body>
    <div id="loadingDiv">
      <div class="loader"></div>
    </div>
      <!--==================== Navbar ====================-->
      <header class="header" id="header">
         <nav class="nav contnav">
         <img src="../../../img/edcaja.png" width="100" class="nav_logo"><h2><a href="{{url('/') }}" class="nav__logo" style="margin-left: -3rem">Caturnawa</a></h2>
         
         <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
        <div class="nav__item">
          <li><a href="../../../locale/ind" height="20"><img src="../../../img/ind.png"  /></a></li>
          <li><a href="../../../locale/en" height="20"><img src="../../../img/eng.png" /></a></li>
					</div>
               <li class="nav__item">
                  <a href="{{url('/') }}" class="nav__link">@lang('messages.beranda')</a>
               </li>
      
               <li class="nav__item">
                  <a href="{{url('matalomba/edc') }}" class="nav__link">@lang('messages.peserta')</a>
               </li>
      
               </ul>

               <!-- Close button -->
               <div class="nav__close" id="nav-close">
                  <i class="ri-close-line"></i>
               </div>
            </div>

            <div class="nav__actions">

               <!-- Toggle button -->
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line"></i>
               </div>
               
            </div>
         </nav>
      </header>
      <button class="floating-button" onclick="window.history.back();">
         <i class="fa fa-arrow-left"></i><span> @lang('messages.back')</span>
      </button>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,240C80,224,160,192,240,176C320,160,400,160,480,170.7C560,181,640,203,720,202.7C800,203,880,181,960,160C1040,139,1120,117,1200,138.7C1280,160,1360,224,1400,256L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
      <!--==================== Session ====================-->
     <h3 class="testing1">@lang('messages.moosi')</h3> 
     <h3 class="testing1" style="color: white; text-align:center; margin-top: 20px">This House believes that global green momentum cannot be achieved without Bipartisan Political Commitment to renewable energy innovation.</h3>
      <section id="skor">
        <div class="container" style="display: flex; justify-content: center;height:70rem">
            <div style="width: 100%;">
              <div class="table-responsive" style=" overflow-x: auto; overflow-y: auto; position: relative; border-radius: 20px">
                    <table class="table table-bordered " style="min-width: 650px; margin-bottom: 0; border-collapse: collapse;">
                        <thead style="position: static; top: -1; z-index: 10;">
                          <tr>
                            <th scope="col" rowspan="2">Adjudicators</th>
                            <th scope="col" rowspan="2">@lang('messages.instansi1')</th>
                            <th scope="col" rowspan="2">@lang('messages.pteam')</th>
                            <th scope="col" rowspan="2">@lang('messages.pname')</th>
                            <th scope="col"  colspan="2">Score</th>
                            <th scope="col" rowspan="2">Victory Point</th>
                        </tr>
                        <tr>
                            <th scope="col" colspan="1">@lang('messages.pind')</th>
                            <th scope="col" colspan="1">@lang('messages.team1')</th>
                        </tr>
                        </thead>
                        <tbody>
                          @if ($final->isNotEmpty()) 
                          <tr>
                              <td rowspan="20" style="text-align: left;">{!! $final->first()->juri !!}</td> 
                            @foreach ($final as $data)
                            <tr>
                              <td>{{ $data->team}}</td>
                              <td>{{ $data->posisi}}</td>
                              <td>{{ $data->nama1}}({{ $data->posisi1}})<br>{{ $data->nama2}}({{ $data->posisi2}})</td>
                              <td>{{ $data->skorindividu1}}<br>{{ $data->skorindividu2}}</td>
                              <td>{{ $data->total}}</td>
                              <td>{{ $data->vp}}</td>
                          </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
              </div>
                </div>
        </div>
        <style>
           .table-bordered td{
        border: 2px solid #dee2e6 !important;
        text-align: center;
         vertical-align: middle;
      }
                 .table-bordered th {
                     border: 2px solid #dee2e6 !important;
                     text-align: center;
                     vertical-align: middle;
                     padding-block: 20px;
                   }
         
                     thead th {
                         background-color: #cecece !important;
                     }
         </style>
    </section>
<!--==================== Session ====================-->

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script>function removeLoader() {
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
      });</script>
   
<script src="../../../js/rank.js"></script>
      <script src="../../../js/nav.js"></script>
      <script src="../../../js/SM.js"></script>
   </body>
</html>