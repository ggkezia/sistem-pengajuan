<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sistem Pengajuan Proposal</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/"> 

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/assets/css/lg.css') }}" rel="stylesheet">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-pZj7v6+1QL2s4Z2msppAd6ef9LWy2KfuI3u08p4/DeGpgekbD0Z6k69qU1zedVx4" crossorigin="anonymous"></script> --}}
 
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRPp0kJKU7g5sb5B6yypGvjqs95btW14F+7q3vA6r" crossorigin="anonymous"> --}}
    {{-- <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <!-- Favicons -->
    {{-- <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3"> --}}


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/assets/css/login.css') }}" rel="stylesheet">
    {{-- <link href="signin.css" rel="stylesheet"> --}}

</head>
<body class="text-center">
    
<main class="form-signin">
    @yield('content')
</main>

</body>
<script src="{{ asset('/assets/js/core/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
</html>