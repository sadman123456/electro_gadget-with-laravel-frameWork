<div class="sidebar bg-dark">
            <div class="scrollbar-inner sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="{{ asset('assets/admin/img/profile.jpg') }}">
                    </div>
                    <div class="info">
                        <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span class=" text-light">
                                Hizrian
                                <span class="user-level  text-light">Administrator</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                            <ul class="nav">
                                <li>
                                    <a href="#profile">
                                        <span class="link-collapse  text-light">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#edit">
                                        <span class="link-collapse text-light">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings">
                                        <span class="link-collapse text-light">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item {{ Route::is('admin.dashboard') ?  'active' : ''}}">
                        <a href="{{ route('admin.dashboard')}}">
                            <i class="la la-dashboard"></i>
                            <p class=" text-light">Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('users.index') ?  'active' : ''}}">
                        <a href="{{route('users.index')}}">
                            <i class="la la-table"></i>
                            <p class=" text-light">User List</p>
                            <span class="badge badge-warning"></span>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('category.index') ?  'active' : ''}}">
                        <a href="{{ route('category.index')}}">
                            <i class="la la-table"></i>
                            <p class=" text-light">Category</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('category.create') ?  'active' : ''}}">
                        <a href="{{ route('category.create')}}">
                            <i class="la la-table"></i>
                            <p class=" text-light">Category Add</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('brands.index') ?  'active' : ''}}">
                        <a href="{{ route('brands.index')}}">
                            <i class="la la-table"></i>
                            <p class=" text-light">Brand List</p>
                        </a>
                    </li>

      
                    <li class="nav-item {{ Route::is('product.index') ?  'active' : ''}}">
                        <a href="{{ route('product.index')}}">
                            <i class="la la-table"></i>
                            <p class=" text-light">All Product</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('product.create') ?  'active' : ''}}">
                        <a href="{{ route('product.create')}}">
                            <i class="la la-table"></i>
                            <p class=" text-light">Add Product</p>
                        </a>
                    </li>
                    <li class="nav-item {{ Route::is('colors.index') ?  'active' : ''}}">
                        <a href="{{ route('colors.index')}}">
                            <i class="la la-table"></i>
                            <p class=" text-light">Color List</p>
                        </a>
                    </li>
                                    
                    <li class="nav-item #">
                        <a href="#">
                            <i class="la la-table"></i>
                            <p class=" text-light">Comment</p>
                          
                            <span class="badge badge-success">#</span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="#">
                            <i class="la la-table"></i>
                            <p class=" text-light">Notification</p>
                            <span class="badge badge-success"></span>
                        </a>
                    </li>
          
                </ul>
            </div>
        </div>