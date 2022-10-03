<div class="main-header bg-dark">
            <div class="logo-header text-light">
               
                 Dashboard
               
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">

                    <form class="navbar-left navbar-form nav-search mr-md-3" method="get" action="">
                        <div class="input-group">
                            <input type="search" name="query" placeholder="Search ..." class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-search search-icon"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown ">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="{{ asset('assets/admin/img/profile.jpg') }}" alt="user-img" width="36" class="img-circle"><span class=" text-light">Hizrian</span> </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <div class="user-box  ">
                                        <div class="u-img"><img src="{{ asset('assets/admin/img/profile.jpg') }}" alt="user"></div>
                                        <div class="u-text ">
                                            <h4>Hizrian</h4>
                                            <p class="text-muted">hello@themekita.com</p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                                <form action="#" method="POST" id="logout-form" class="d-none">
                                    
                                </form>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>