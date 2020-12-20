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
    <div class="row mt-3">
        <!--Messages-->
        <div class="col-sm-6">
            <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                <h6 class="mb-3">Messages</h6><hr>

                <div class="feed-single mb-3">
                    <div class="media">
                        <img class="mr-3 rounded-circle" height="40px" width="40px" src="assets/img/John-doe.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="mt-1">Mario Mendez 
                                <small class="text-muted pl-2 border-radius"><span class="badge badge-danger">Unread</span></small>
                                <small class="text-muted small pull-right"><i class="fa fa-clock"></i> 10 hours</small>

                                <p class="clearfix"></p>
                            </h6>
                            <p>Hello, New update on my existing projects #portfolio #architecture <a href="#" class="text-theme">www.github.io/architect-mendez</a></p>

                            <div class="feed-footer">
                                <span class="pr-3"><i class="fa fa-star"></i> 3</span>
                                <span class="pr-3"><i class="fa fa-comment"></i> 2</span>
                                <span class="pr-3"><i class="fa fa-share"></i></span>
                                <span class="pl-3 pull-right"><i class="fa fa-ellipsis-h"></i></span>

                                <p class="clearfix"></p>
                            </div>
                        </div>
                    </div> <hr>

                    <div class="media">
                        <img class="mr-3 rounded-circle" height="40px" width="40px" src="assets/img/client-img3.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="mt-1">Helena Mendez 
                                <small class="text-muted pl-2 border-radius"><span class="badge badge-danger">Unread</span></small>
                                <small class="text-muted small pull-right"><i class="fa fa-clock"></i> August 8</small>

                                <p class="clearfix"></p>
                            </h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="feed-footer">
                                <span class="pr-3"><i class="fa fa-star"></i> 3</span>
                                <span class="pr-3"><i class="fa fa-comment"></i> 2</span>
                                <span class="pr-3"><i class="fa fa-share"></i></span>
                                <span class="pl-3 pull-right"><i class="fa fa-ellipsis-h"></i></span>

                                <p class="clearfix"></p>
                            </div>
                        </div>
                    </div> <hr>

                    <div class="media">
                        <img class="mr-3 rounded-circle" height="40px" width="40px" src="assets/img/client-img2.png" alt="Generic placeholder image">
                        <div class="media-body">
                            <h6 class="mt-1">Aliya Mario 
                                <small class="text-muted pl-2 border-radius"><span class="badge badge-danger">Unread</span></small>
                                <small class="text-muted small pull-right"><i class="fa fa-clock"></i> 1 month</small>

                                <p class="clearfix"></p>
                            </h6>
                            <p>Hi Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="feed-footer">
                                <span class="pr-3"><i class="fa fa-star"></i> 3</span>
                                <span class="pr-3"><i class="fa fa-comment"></i> 2</span>
                                <span class="pr-3"><i class="fa fa-share"></i></span>
                                <span class="pl-3 pull-right"><i class="fa fa-ellipsis-h"></i></span>

                                <p class="clearfix"></p>
                            </div>
                        </div>
                    </div> <hr>
                    <div class="text-center">
                        <p><a href="#" class="text-theme">View all messages <i class="fa fa-angle-double-down"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--/Messages-->

        <!--Comments-->
        <div class="col-sm-6">
            <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                <h6 class="mb-3">Updates</h6><hr>
                
                <div class="updates-wrapper border-left">
                    <div class="updates-content p-3 up-primary">
                        <h6 class="bc-header-small">Ground breaking sales</h6>
                        <p class="bc-description">Lorem Ipsum is simply dummy text of the printing</p>
                        <span class="small"><i class="fas fa-clock text-success"></i> 7 months ago</span>
                    </div>
                    <div class="updates-content p-3 up-warning">
                        <h6 class="bc-header-small">User confirmation</h6>
                        <p class="bc-description">Lorem Ipsum is simply dummy text of the printing</p>
                        <span class="small"><i class="fas fa-clock text-success"></i> 7 months ago</span>
                    </div>
                    <div class="updates-content p-3 up-danger">
                        <h6 class="bc-header-small">New Registration</h6>
                        <p class="bc-description">Lorem Ipsum is simply dummy text of the printing</p>
                        <span class="small"><i class="fas fa-clock text-success"></i> 7 months ago</span>
                    </div>
                    <div class="updates-content p-3 up-success">
                        <h6 class="bc-header-small">User confirmation</h6>
                        <p class="bc-description">Lorem Ipsum is simply dummy text of the printing</p>
                        <span class="small"><i class="fas fa-clock text-success"></i> 7 months ago</span>
                    </div>
                </div>
            </div>
        </div>
        <!--/Comments-->
    </div>

    <!--Footer-->
    <div class="row mt-5 mb-4 footer">
        <div class="col-sm-8">
            <span>&copy; All rights reserved 2020 designed by <a class="text-theme" href="#">HRMAU</a></span>
        </div>
        <div class="col-sm-4 text-right">
            <a href="#" class="ml-2">Contact Us</a>
            <a href="#" class="ml-2">Support</a>
        </div>
    </div>
    <!--Footer-->

@endsection