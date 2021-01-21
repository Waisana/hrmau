            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="{{ asset('uploads/user/'.Auth::User()->image)}}" alt="image" class="rounded-circle " >
                        <p><strong>{{Auth::User()->fname." ".Auth::User()->lname}}</strong></p>
                        <span class="text-primary small"><strong>Admin</strong></span>
                    </div>
                    <!--Image Avatar-->
                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                            <li class="parent">
                                <a href="/home"  class=""><i class="fa fa-th-large mr-3"> </i>
                                    <span class="none">Dashboard </span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="/memberType"  class=""><i class="fas fa-credit-card mr-3"></i>
                                    <span class="none">Member Type </span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="/knowHub"  class=""><i class="fas fa-book"></i>
                                    <span class="none">Knowledge Hub </span>
                                </a>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('editors'); return false" class=""><i class="fas fa-list"></i>
                                    <span class="none">Applications <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="editors">
                                    <li class="child"><a href="/general" class="ml-4"><i class="fa fa-angle-right mr-2"></i> General</a></li>
                                    <li class="child"><a href="/professional" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Professional</a></li>
                                    <li class="child"><a href="/cooperates" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Cooperate</a></li>
                                    <li class="child"><a href="/students" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Student</a></li>
                                    <li class="child"><a href="/retired" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Retired</a></li>
                                </ul>
                            </li>
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('updates'); return false" class=""><i class="fas fa-newspaper"></i>
                                    <span class="none">Updates <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="updates">
                                    <li class="child"><a href="/news" class="ml-4"><i class="fa fa-angle-right mr-2"></i> News</a></li>
                                    <li class="child"><a href="/events" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Events </a></li>
                                    <li class="child"><a href="/leadership" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Leadership </a></li>
                                </ul>
                            </li>
                            
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('users'); return false" class=""><i class="fas fa-users mr-3"></i>
                                    <span class="none">Users <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="users">
                                    <li class="child"><a href="#" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Manage roles</a></li>
                                    <li class="child"><a href="#" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Add User</a></li>
                                    <li class="child"><a href="/users" class="ml-4"><i class="fa fa-angle-right mr-2"></i> View users</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->