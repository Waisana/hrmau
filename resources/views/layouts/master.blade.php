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
    <!--Font Awesome-->
    {{-- <link rel="stylesheet" href="{{asset('css/fontawesome-all.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}"> --}}
    <!--Bootstrap Calender-->
    <link rel="stylesheet" href="{{asset('js/calendar/bootstrap_calendar.css')}}">

    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <!--Datatable-->
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <!--Chartist CSS-->
    <link rel="stylesheet" href={{asset('css/chartist.min.css')}}>
    <!--Morris Css-->
    <link rel="stylesheet" href={{asset('css/morris.css')}}>

    {{-- scripts --}}
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/style.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/dataTables.min.js')}}"></script>
    {{-- <script src="{{asset('js/datepicker.min.js')}}"></script> --}}
    <script src="{{asset('js/sweetalert.js')}}"></script>
    <!--Chartist JS-->
    <script src="{{asset('js/charts/chartist.min.js')}}"></script>
    <script src={{asset('js/charts/chartist-data.js')}}></script>
    <script src={{asset('js/charts/demo.js')}}></script>

    <!--Flot.JS-->
    <script src={{asset('js/charts/jquery.flot.min.js')}}></script>
    <script src={{asset('js/charts/jquery.flot.pie.min.js')}}></script>
    <script src={{asset('js/charts/jquery.flot.categories.min.js')}}></script>
    <script src={{asset('js/charts/jquery.flot.stack.min.js')}}></script>
    <!--Sparkline-->
    <script src={{asset('js/charts/sparkline.min.js')}}></script>
    <!--Morris.JS-->
    <script src={{asset('js/charts/raphael.min.js')}}></script>
    <script src={{asset('js/charts/morris.js')}}></script>
    <!--Chart JS-->
    <script src={{asset('js/charts/chart.min.js')}}></script>
     <!--Datatable-->
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Page JavaScript Files-->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
    <!--Popper JS-->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!--Canvas JS-->
    <script src="{{asset('js/charts/canvas.min.js')}}"></script>
    <!--Bootstrap-->
    {{-- <script src="assets/js/bootstrap.min.js"></script> --}}
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
    <script>
        $('#theDataTable').DataTable();
    </script>
</body>

</html>