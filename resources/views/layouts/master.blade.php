<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!--title-->
    <title>HRMAU</title>

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="{{asset('css/quicksand.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <!--Chartist CSS-->
    <link rel="stylesheet" href={{asset('css/chartist.min.css')}}>
    <!--Morris Css-->
    <link rel="stylesheet" href={{asset('css/morris.css')}}>

    {{-- font awesome --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.css') }}"> --}}

    {{-- scripts --}}
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/style.js')}}"></script>
    
    
      


    <style>
        body{
            background-color: #EFF0F1;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        @include('admin.adminNav')
        <div class="row main-content">
            @include('admin.sideBar')
            <div class="col-sm-9 col-xs-12 content pt-3 pl-0">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>