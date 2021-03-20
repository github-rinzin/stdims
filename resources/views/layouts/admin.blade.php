

 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Student IMS</title>
    <link rel="stylesheet" href="{{ asset('/asset/admin/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('/asset/admin/assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/asset/admin/assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/asset/admin/assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/asset/admin/assets/fonts/fontawesome5-overrides.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/asset/admin/assets/css/Login-Form-Clean.css') }}">
    <link rel="stylesheet" href="{{ asset('/asset/admin/assets/css/Navigation-with-Search.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body id="page-top">
   
    <div id="wrapper">
        @include('inc.admin.sidebar')
         <div class="d-flex flex-column" id="content-wrapper">
             <div id="content">
                @include('components.topbar')
                @yield('content')
                @include('components.footer')
             </div>
         </div>
     </div>
    
    <script src="{{ asset('/asset/admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/asset/admin/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="{{ asset('/asset/admin/assets/js/theme.js') }}"></script>
    
</body>

</html>