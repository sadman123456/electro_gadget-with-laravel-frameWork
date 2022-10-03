


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
                                <a href="productlist.html"> <button type="button" class="btn btn-primary">Back Product List</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">

                            <div class="box-body row">
     
                
                                <div class="col-md-6">
                                  <ul class="list-group">
                                   <center> <p class="list-group-item list-group-item-success"><b>PRODUCT DETAILS</b></p></center>
                                   <li class="list-group-item"><b>Product ID : {{ $products->id }}</b><span class="badge"></span></li>
                                   <li class="list-group-item"><b>Product Name : {{ $products->name }}</b> <span class="label label-info pull-right"></span></li>
                                   <li class="list-group-item"><b>Brand : {{ $products->model }}</b> <span class="label label-primary pull-right"></span></li>
                                   <li class="list-group-item"><b>Category :{{ $products->category }} </b><span class="label label-info pull-right"></span></li>

                                   <li class="list-group-item"><b>Description: -{{ $products->description}} </b><span></span></li>

                                   <li class="list-group-item"><b>Purchase Price :{{ $products->purchase_price}}</b> <span class="label label-warning pull-right"></span></li>
                                   <li class="list-group-item"><b>Sale Price :{{ $products->sale_price}} </b><span class="label label-warning pull-right"></span></li>
                                   <li class="list-group-item"><b>Quantity :{{ $products->quantity}} </b><span class="label label-success pull-right"></span></li>
                                   
                                  </ul>
                                </div>
                                 <div class="col-md-6">
                                  <ul class="list-group">
                                   <center> <p class="list-group-item list-group-item-success"><b>PRODUCT IMAGE</b></p> </center>
                                   <center>
                                      <img  style="height: 240px; width:240px;" src="./images/aiphone13pm-fcvs-sel-1-1037991-1635242483.jpg"
                            
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