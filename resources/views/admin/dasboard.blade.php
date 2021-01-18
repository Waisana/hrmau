@extends('layouts.master')
@section('content')
 <!--Content right-->
    <h5 class="mb-3" ><strong>Dashboard</strong></h5>

    <!--Dashboard widget 2-->
    <div class="mt-1 mb-3 button-container">
        <div class="row pl-0">
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <div class="border shadow p-3 bg-success">
                    <p class="pw-2 text-center text-white">
                        <i class="fas fa-comments"></i>
                        <small class="bc-description text-white">225</small>
                    </p>
                    <p class="mt-2 text-white">Updaes</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <div class="border shadow p-3 bg-danger">
                    <p class="pw-2 text-center text-white">
                        <i class="fa fa-users"></i>
                        <small class="bc-description text-white">557</small>
                    </p>
                    <p class="mt-2 text-white">Applicants</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <div class="border shadow p-3 bg-primary">
                    <p class="pw-2 text-center text-white">
                        <i class="fas fa-users-cog"></i>
                        <small class="bc-description text-white">1225</small>
                    </p>
                    <p class="mt-2 text-white">Users</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <div class="border shadow p-3 bg-warning">
                    <p class="pw-2 text-center text-white">
                        <i class="fas fa-envelope"></i>
                        <small class="bc-description text-white">95</small>
                    </p>
                    <p class="mt-2 text-white">Messages</p>
                </div>
            </div>
            
        </div>
    </div>
    <!--/Dashboard widget-->
    

    

@endsection