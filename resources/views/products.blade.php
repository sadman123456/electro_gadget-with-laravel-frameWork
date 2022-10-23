<x-frontend.master>
<x-frontend.partials.sidebar>
<section class="headphones container mb-5">
            <h4 class="mb-3">{{$category->name}}</h4>
            <div class="row">
                <div class="col-md-3 ads ">
                    <img src="./images/banners/banner5.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-9">
                    <div class="row">
                    @forelse($category->products as $product)

                        <div class="col-md-2 col-sm-6 col-lg-2 gx-0">
                            <a href="single-product.html">
                                <div class="card">
                                    <!-- <small class="text-danger">{{$category->name}}</small> -->
                                    <div class="card-header text-primary fw-bold text-center p-0">
                                        <small>    {{ Str::limit($product->name, 40)}}</small>
                                    </div>
                                    <img src="{{ asset('storage/Products/'.$product->image) }}" class="card-img-top" alt="">

                                    <div class="card-body ">
                                        <div class="upper d-flex justify-content-center">
                                            <div class="price fs-5 text-info">
                                            {{$product->sale_price}}
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
                        @empty
                        <h1>No Data Found</h1>
                @endforelse
                  
                    </div>
                </div>
            </div>

        </section>
</x-frontend.partials.sidebar>
</x-frontend.master>