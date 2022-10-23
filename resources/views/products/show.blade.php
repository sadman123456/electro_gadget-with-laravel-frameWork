


        <x-master>
    <x-slot:title>
        Admin | Product Details
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>View Product</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{route('product.index')}}"> <button type="button" class="btn btn-primary">Back Product List</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">

                            <div class="box-body row">
     
                
                                <div class="col-md-6">
                                  <ul class="list-group">
                                   <center> <p class="list-group-item list-group-item-success"><b>PRODUCT DETAILS</b></p></center>
                                   <li class="list-group-item"><b>Product ID : {{ $product->id }}</b><span class="badge"></span></li>
                                   <li class="list-group-item"><b>Product Name : {{ $product->name }}</b> <span class="label label-info pull-right"></span></li>
                                   <li class="list-group-item"><b>Brand : {{ $product->brand?->name }}</b> <span class="label label-primary pull-right"></span></li>
                                   <li class="list-group-item"><b>Category :{{ $product->category->name }} </b><span class="label label-info pull-right"></span></li>

                                   <li class="list-group-item"><b>Description: -{!! $product->description !!} </b><span></span></li>

                                   <li class="list-group-item"><b>Purchase Price :{{ $product->purchase_price}}</b> <span class="label label-warning pull-right"></span></li>
                                   <li class="list-group-item"><b>Sale Price :{{ $product->sale_price}} </b><span class="label label-warning pull-right"></span></li>
                                   <li class="list-group-item"><b>Quantity :{{ $product->quantity}} </b><span class="label label-success pull-right"></span></li>
                                   
                                  </ul>
                                </div>
                                 <div class="col-md-6">
                                  <ul class="list-group">
                                   <center> <p class="list-group-item list-group-item-success"><b>PRODUCT IMAGE</b></p> </center>
                                   <center>
                                      <img  style="height: 240px; width:240px;" src="{{ asset('storage/products/'.$product->image) }}"/>
                            
                                    </center>
                                  </ul>
                                </div>
                                    
                                
                              </div>
                        </section> 
                    </div>
                </div>
            </div>
        </div>
</x-master>


