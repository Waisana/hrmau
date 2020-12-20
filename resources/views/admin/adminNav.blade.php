<div class="row header shadow-sm">
            
    <!--Logo-->
    <div class="col-sm-3 pl-0 text-center header-logo">
       <div class="bg-theme mr-3 pt-3 pb-2 mb-0">
            <h3 class="logo"><a href="#" class="text-secondary logo"><i class="fa fa-life-ring" aria-hidden="true"></i> HRMAU<span class="small">system</span></a></h3>
       </div>
    </div>
    <!--Logo-->

    <!--Header Menu-->
    <div class="col-sm-9 header-menu pt-2 pb-0">
        <div class="row">
            
            <!--Menu Icons-->
            <div class="col-sm-4 col-8 pl-0">
                <!--Toggle sidebar-->
                <span class="menu-icon" onclick="toggle_sidebar()">
                    <span id="sidebar-toggle-btn"></span>
                </span>

                <!--Inbox icon-->
                <span class="menu-icon inbox">
                    <div class="dropdown-menu dropdown-menu-left mt-10 animated zoomInDown" aria-labelledby="dropdownMenuLink3">
                        <a class="dropdown-item" href="#"><strong>Unread messages</strong></a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                    <p>How are you?</p>
                                    <small class="text-success">09:23am</small>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                    <p>How are you?</p>
                                    <small class="text-success">09:23am</small>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img class="align-self-center mr-3 rounded-circle" src="assets/img/profile.jpg" width="50px" height="50px" alt="Generic placeholder image">
                                <div class="media-body">
                                    <h6 class="mt-0"><strong>Adam Abdulrahman</strong></h6>
                                    <p>How are you?</p>
                                    <small class="text-success">09:23am</small>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center link-all" href="#">View all messages</a>
                    </div>
                </span>
                <!--Inbox icon-->
                
            </div>
            <!--Menu Icons-->

            <!--Search box and avatar-->
            <div class="col-sm-8 col-4 text-right flex-header-menu justify-content-end">
                <div class="search-rounded mr-3">
                    <input type="text" class="form-control search-box" placeholder="Search....." />
                </div>
                <div class="mr-4">
                    <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('admin/img/profile.jpg')}}" alt="profile" class="rounded-circle" width="40px" height="40px">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mt-13" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/usersprofile"><i class="fa fa-user pr-2"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/changePassword"><i class="fas fa-lock pr-2"></i>  changePassword</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off pr-2"></i> 
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <!--Search box and avatar-->
        </div>    
    </div>
    <!--Header Menu-->
</div>