<x-frontend.master>
<x-frontend.partials.sidebar>
<x-frontend.partials.carousel/>
</x-frontend.partials.sidebar>



        <!-- === Deals of the Day=== -->
        <section class="deals container  h-100 mb-4">
            <div class="title d-flex">
                <p class="fw-bold">Deals of the Day</p>

                <div id="countdown" class="ms-3 ">
                    <ul class="d-flex mt-2 me-3">
                        <li>Ends In:</li>
                        <li><span id="days"></span> </li>
                        <li><span id="hours"></span> Hours</li>
                        <li><span id="minutes"></span> Minutes</li>
                        <li><span id="seconds"></span> Seconds</li>
                    </ul>
                </div>
                <hr>
            </div>
            <hr>
            <!-- Deals Product List -->
            <div class="row mt-4 dealsProduct gx-2 ">
            @foreach($products as $product)

                <div class="col-md-2 col-sm-6 mb-1 col-lg-2">

                    <a href="single-product.html">
                        <div class="card">
                            <div class="card-header fw-bold text-center text-primary overflow-hidden ">
                                {{ Str::limit($product->name, 40)}}
                            </div>
                            <img src="{{ asset('storage/Products/'.$product->image) }}" class="card-img-top" alt="">

                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="price">
                                    <h5> {{$product->sale_price}}</h5>
                                    <del>$200.00</del>
                                </div>
                                <div class="cart mt-5 ">
                                    <i class="fa-solid fa-cart-plus"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                @endforeach

            </div>
            {{ $products->links()}}

        </section>
        <!-- =====End Deals of the Day======== -->
        <section class="shopBanner  container mb-4">
            
            <img src="{{ asset('assets/frontend//images/banners/banner1.gif') }}" class="card-img-top" alt="">



        </section>


        <!-- Smartphone and Tablets -->

        <section class="popularCategory container mt-5 mb-3">
            <div class="row">
                <h4 class="mb-3">Smartphones & Tablets</h4>
                <div class="col-md-4 bg-danger sideAds d-flex justify-content-start align-items-center ">
                    <div class="button mt-5 pt-5 ">
                        <button class="btn btn-warning rounded-1 text-light btn-lg mt-5">View More</button>
                    </div>

                </div>
                <div class="col-md-8  ">
                    <div class="row gx-0 gy-2">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Smartphone</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        OPPO F15
                                    </div>
                                    <img src="./images/Products/mobile/p1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $150.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Smartphone</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        ViVo V9
                                    </div>
                                    <img src="./images/Products/mobile/p3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $260.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3"><a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Smartphone</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        VIVO V10
                                    </div>
                                    <img src="./images/Products/mobile/p2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $240.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a></div>
                        <div class="col-md-3 col-sm-6 col-lg-3"><a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Smartphone</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        ONE Plus SL10
                                    </div>
                                    <img src="./images/Products/mobile/p6.png" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $245.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a></div>
                        <div class="col-md-3 col-sm-6 col-lg-3"><a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Tablet</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        Xiaomi Pad 5
                                    </div>
                                    <img src="./images/Products/tablets/m1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $245.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a></div>
                        <div class="col-md-3 col-sm-6 col-lg-3"><a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Tablet</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        HUAWEI Tablet
                                    </div>
                                    <img src="./images/Products/tablets/huawei1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $300.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a></div>
                        <div class="col-md-3 col-sm-6 col-lg-3"><a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Tablet</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        Google Tablet
                                    </div>
                                    <img src="./images/Products/tablets/t1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $123.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a></div>
                        <div class="col-md-3 col-sm-6 col-lg-3"><a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger">Category: Tablet</small>
                                    <div class="card-header text-primary fw-bold text-center">
                                        Android Tablet
                                    </div>
                                    <img src="./images/Products/tablets/t2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body d-flex">
                                        <div class="price fs-4 text-info">
                                            $336.00
                                        </div>
                                        <div class="cart ms-3">
                                            <i class="fa-solid fa-cart-plus"></i>
                                        </div>

                                    </div>
                                </div>
                            </a></div>

                    </div>

                </div>
            </div>

        </section>
        <!--END Smartphone and Tablets -->

        <!-- --------BAnner------- -->
        <section class="banner2 container mb-5 mt-5 ">
            <div class="row">
                <div class="col-md-6 bannerLeft ">
                    <img src="images/banners/banner3.gif" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 bannerRight">
                    <img src="./images/banners/banner4.png" alt="" class="img-fluid">
                </div>
            </div>

        </section>
        <!-- END BAnner -->

        <!-- Headphones -->
        <section class="headphones container mb-5">
            <h4 class="mb-3">Headphones</h4>
            <div class="row">
                <div class="col-md-3 ads ">
                    <img src="./images/banners/banner5.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Headphone</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>SOLO Wireless</small>
                                    </div>
                                    <img src="./images/Products/headphone/p3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center">
                                            <div class="price fs-5 text-info">
                                                $150.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <div class="lower">
                                            <small>
                                                <del class="text-danger">$200.00</del>
                                            </small>
                                        </div>

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="">
                                <div class="card">
                                    <small class="text-danger"> Headphone</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>Edifier W820BT</small>
                                    </div>
                                    <img src="./images/Products/headphone/p5.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $99.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                           <small>
                                               <del class="text-danger">$200.00</del>
                                           </small>
                                       </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Headphone</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>Earbuds Beats</small>
                                    </div>
                                    <img src="./images/Products/headphone/airpod1.jpg" class="card-img-top"
                                        alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $169.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                           <small>
                                               <del class="text-danger">$200.00</del>
                                           </small>
                                       </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Headphone</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>Beats Flex</small>
                                    </div>
                                    <img src="./images/Products/headphone/bhp1.jpg" class="card-img-top"
                                        alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center ">
                                            <div class="price fs-5 text-info">
                                                $78.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <div class="lower">
                                            <small>
                                                <del class="text-danger">$99.00</del>
                                            </small>
                                        </div>

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Headphone</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>MI Airdots</small>
                                    </div>
                                    <img src="./images/Products/headphone/aripod3.jpg" class="card-img-top"
                                        alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $88.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                                                       <small>
                                                                           <del class="text-danger">$200.00</del>
                                                                       </small>
                                                                   </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Headphone</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>Sterio Wireless</small>
                                    </div>
                                    <img src="./images/Products/headphone/p6.jpg" class="card-img-top" alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $142.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                                                       <small>
                                                                           <del class="text-danger">$200.00</del>
                                                                       </small>
                                                                   </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- END Headphones -->

        <!-- Laptops Section -->
        <section class=" laptops headphones container mt-5 mb-5">
            <h4 class="mb-3">Laptops</h4>
            <div class="row">
                <div class="col-md-3 ads ">
                    <img src="./images/banners/banner6.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-9">
                    <div class="row gy-2">
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Laptop</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>ASUS L210</small>
                                    </div>
                                    <img src="./images/Products/laptop/asus1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center">
                                            <div class="price fs-5 text-info">
                                                $300.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <div class="lower">
                                            <small>
                                                <del class="text-danger">$346.00</del>
                                            </small>
                                        </div>

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Laptop</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>Expertboox B7</small>
                                    </div>
                                    <img src="./images/Products/laptop/asus3.jpg" class="card-img-top" alt="Laptop">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $454.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                                   <small>
                                                       <del class="text-danger">$200.00</del>
                                                   </small>
                                               </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Laptop</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>HP 14sfqAU</small>
                                    </div>
                                    <img src="./images/Products/laptop/h2.jpg" class="card-img-top" alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $476.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                                   <small>
                                                       <del class="text-danger">$200.00</del>
                                                   </small>
                                               </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Laptop</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>HP 15sfqAU</small>
                                    </div>
                                    <img src="./images/Products/laptop/h3.jpg" class="card-img-top" alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center ">
                                            <div class="price fs-5 text-info">
                                                $467.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <div class="lower">
                                            <small>
                                                <del class="text-danger">$500.00</del>
                                            </small>
                                        </div>

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Laptop</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>ASUS Noteboox</small>
                                    </div>
                                    <img src="./images/Products/laptop/asus4.jpg" class="card-img-top" alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $420.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                                                               <small>
                                                                                   <del class="text-danger">$200.00</del>
                                                                               </small>
                                                                           </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <small class="text-danger"> Laptop</small>
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>HP Proboox</small>
                                    </div>
                                    <img src="./images/Products/laptop/h6.jpg" class="card-img-top" alt="Headphone">
                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center mt-1">
                                            <div class="price fs-4 text-info">
                                                $431.00
                                            </div>
                                            <div class="cart ms-2 ">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </div>
                                        </div>
                                        <!-- <div class="lower">
                                                                               <small>
                                                                                   <del class="text-danger">$200.00</del>
                                                                               </small>
                                                                           </div> -->

                                    </div>

                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!--END Laptops Section -->


        <!-- Recommended -->
        <section class="recommended container mt-2 mb-5">
            <h4 class="mb-4">Recommended for You</h4>
            <div class="row gx-2 gy-2">
            @foreach($products as $product)

                <div class="col-md-3 col-sm-6 col-lg-3">
                    <a href="single-product.html">
                        <div class="card">
                            <small class="text-danger text-center">{{$product->category->name}}</small>
                            <div class="card-header text-primary fw-bold text-center p-0">
                                <small>{{$product->name}}</small>
                            </div>
                            <img src="{{ asset('storage/Products/'.$product->image) }}" class="card-img-top" alt="">

                            <div class="card-body ">
                                <div class="upper d-flex justify-content-center">
                                    <div class="price fs-3 text-info">
                                   {{$product->sale_price}}
                                    </div>
                                    <div class="cart ms-4 ">
                                        <i class="fa-solid fa-cart-plus"></i>
                                    </div>
                                </div>
                                <div class="lower d-flex justify-content-center">
                                    <small>
                                        <del class="text-danger ">$346.00</del>
                                    </small>
                                </div>

                            </div>

                        </div>
                    </a>

                </div>
         @endforeach
            </div>
            {{ $products->links()}}

        </section>
        <!--END Recommended -->
        <!-- <section class="featured">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 featured">
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                    </div>
                    <div class="col-md-3 onsale">
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                    </div>
                    <div class="col-md-3 topRated">
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                        <li>ABCD</li>
                    </div>
                    <div class="col-md-3 bg-info">
                        <h1>Image</h1>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Newsletter -->
        <section id="newsletter" class="container-fluid newsletter py-2">
            <div class="row ">
                <div class="col-md-3 newsletter-title">

                    <p class="text-end mt-2">
                        <i class="fa-solid fa-paper-plane"></i>
                        Sign up to Newsletter
                    </p>
                </div>
                <div class="col-md-3 newsletter-titlle-two text-end mt-3">
                    <p class="small">...and receive <b>$20 coupon for first shopping</b></p>
                </div>
                <div class="col-md-6 newsletter-searchbar d-flex justify-content-end">
                    <form class="example w-100 mt-3" action="">
                        <input class="px-3" type="email" placeholder="Enter Your Mail" name="search">
                        <button type="submit" class=" text-light" id="subscribe">Subscribe</button>
                    </form>

                </div>
            </div>
        </section>


    <!-- /END THE FEATURETTES -->
    @push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    @endpush
</x-frontend.master>
