        <!-- Pre Header -->
        <section class="preHeader  d-flex w-100 justify-content-between">
            <div class="leftContent  mt-2 ">
                <ul class=" mt-2">
                    <li class="px-4">
                        <i class="fa fa-phone text-warning"></i>
                        +060 (800) 801-858
                    </li>
                    <li>
                        <i class="fa fa-mail-bulk text-warning"></i>
                        info@electro.com
                    </li>
                </ul>
            </div>
            <div class="rightContent d-flex justify-content-end  mt-2">
                <ul class=" d-flex mt-2">
                    <li class="px-3">
                        <i class="fa fa-location-pin"></i>
                        Store Locator
                    </li>

                    <li class="px-3">
                        <i class="fa-solid fa-truck-arrow-right"></i> Track Your Order
                    </li>
                    
                    
                      @if (Route::has('login'))
                      <li class="px-3">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
    </li>
            @endif

                </ul>

            </div>

        </section>
        <!-- Pre Header Ends -->

        <!-- Header Start -->
        <header class=" position-sticky sticky-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <div class="logo me-5">
                        <img src="{{ asset('assets/frontend/images/logo.png') }}" alt="">
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Search Bar -->
                        <form class="example w-50" action="{{ url('/') }}">
                            <input type="text" placeholder="Search.." name="keyword" >
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                        <!-- End Search Bar -->

                        <!-- Nav Items -->

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 px-2 fs-6 ">
                            <li class="nav-item px-2">
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="about.html">About
                                </a>
                            </li>
                            <li class="nav-item px-2 dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Categories
                                    <span
                                        class="position-absolute top-0  translate-middle badge rounded-pill bg-success">
                                        New
                                    </span>
                                </a>
                                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                    @foreach ($categories as $category)
                                    <li><a class="dropdown-item" href="{{route('categories.products.index',$category->id)}}">{{$category->name}}</a></li>
                                    @endforeach
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="products.html">Browse All Products</a></li>
                                </ul>
                            </li>
                            <li class="nav-item px-2">
                                <a href="products.html" type="button"
                                    class="btn btn-transparent text-light position-relative">
                                    All Products
                                    <span
                                        class="position-absolute top-0  translate-middle badge rounded-pill bg-danger">
                                        HOT
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>

                            </li>
                            <li class="nav-item px-2">
                                <a href="cart.html" type="button"
                                    class="btn btn-transparent btn-sm position-relative nav-link">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        3
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </a>

                            </li>
                        </ul>
                        <!-- //////// -->

                    </div>
                </div>
            </nav>
        </header>