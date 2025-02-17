<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>

<html lang="en">
 
 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo-ukdw.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     
     <title>Sistem Pengajuan Proposal</title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
     {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" /> --}}
     
     <!-- CSS Files -->
     <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
     <link href="{{ asset('/assets/css/light-bootstrap-dashboard.css?v=2.0.0') }} " rel="stylesheet" />
     <link href="{{ asset('/assets/css/custom.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
     {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}

 </head>
 
 <body>
  <!-- SIDEBAR -->
  @auth
        @if (auth()->user()->role == 'Admin')
            @include('biro3.sidebar')
        @elseif (auth()->user()->role == 'WR')
            @include('wr.sidebar')
        @elseif (auth()->user()->role == 'BEMU')
            @include('bemu.sidebar')
        @elseif (auth()->user()->role == 'UKM')
            @include('ukm.sidebar')
        @else
            <!-- Include default sidebar or none -->
            @include('default.sidebar')
        @endif
    @else
        <!-- Jika user belum login -->
        @include('guest.sidebar')
    @endauth
  {{-- @include('biro3.sidebar') --}}

<!-- Menampilkan pesan sukses -->
        <div class="main-panel">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close bi bi-x" data-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <!-- HEADER -->
            @include('layouts.header') <!-- Memuat header yang sama untuk semua peran (role) pengguna -->
            <!-- End Header -->

            <!-- Content -->
            @yield('content')
            <!-- End Content -->

            <!-- FOOTER  -->
            @include('layouts.footer') <!-- Memuat footer yang sama untuk semua peran (role) pengguna -->
            <!-- End Footer -->
        </div>
    {{-- <div class="fixed-plugin">
     <div class="dropdown show-dropdown">
         <a href="#" data-toggle="dropdown">
             <i class="fa fa-cog fa-2x"> </i>
         </a>
 
         <ul class="dropdown-menu">
       <li class="header-title"> Sidebar Style</li>
             <li class="adjustments-line">
                 <a href="javascript:void(0)" class="switch-trigger">
                     <p>Background Image</p>
                     <label class="switch">
                         <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                     </label>
                     <div class="clearfix"></div>
                 </a>
             </li>
             <li class="adjustments-line">
                 <a href="javascript:void(0)" class="switch-trigger background-color">
                     <p>Filters</p>
                     <div class="pull-right">
                         <span class="badge filter badge-black" data-color="black"></span>
                         <span class="badge filter badge-azure" data-color="azure"></span>
                         <span class="badge filter badge-green" data-color="green"></span>
                         <span class="badge filter badge-orange" data-color="orange"></span>
                         <span class="badge filter badge-red" data-color="red"></span>
                         <span class="badge filter badge-purple active" data-color="purple"></span>
                     </div>
                     <div class="clearfix"></div>
                 </a>
             </li>
             <li class="header-title">Sidebar Images</li>
 
             <li class="active">
                 <a class="img-holder switch-trigger" href="javascript:void(0)">
                     <img src="../assets/img/sidebar-1.jpg" alt="" />
                 </a>
             </li>
             <li>
                 <a class="img-holder switch-trigger" href="javascript:void(0)">
                     <img src="../assets/img/sidebar-3.jpg" alt="" />
                 </a>
             </li>
             <li>
                 <a class="img-holder switch-trigger" href="javascript:void(0)">
                     <img src="..//assets/img/sidebar-4.jpg" alt="" />
                 </a>
             </li>
             <li>
                 <a class="img-holder switch-trigger" href="javascript:void(0)">
                     <img src="../assets/img/sidebar-5.jpg" alt="" />
                 </a>
             </li>
 
             <li class="button-container">
                 <div class="">
                     <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                 </div>
             </li>
 
             <li class="header-title pro-title text-center">Want more components?</li>
 
             <li class="button-container">
                 <div class="">
                     <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                 </div>
             </li>
 
             <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>
 
             <li class="button-container">
         <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                 <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
             </li>
        </ul>
     </div>
    </div> --}}
 </body>
 <!--   Core JS Files   -->
 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
 <script src="{{ asset('/assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
 <script src="{{ asset('/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src="{{ asset('/assets/js/plugins/bootstrap-switch.js') }}"></script>
 <!--  Google Maps Plugin    -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!--  Chartist Plugin  -->
 <script src="{{ asset('/assets/js/plugins/chartist.min.js') }}"></script>
 <script src="{{ asset('/assets/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript"></script>
 {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
</html>
 