<x-master>
    <x-slot:title>
        Admin | Edit Product
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>Update Product</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
<<<<<<< HEAD
                                <a href="{{route('admin.productlist')}}">    <button type="button" class="btn btn-primary">Back Product List</button></a>
=======
                                <a href="productlist.html">    <button type="button" class="btn btn-primary">Back Product List</button></a>
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">
<<<<<<< HEAD
                          <form action="{{route( 'product.update',$products->id)}}" method="post">
                              @csrf
                              @method('patch')
=======
                            <form>
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                                <div class="row">

                                  <div class="col" style="padding: 15px; margin-left:25px;">                  
                                    <label>Product Name <span class="required_star">*</span></label>                 
<<<<<<< HEAD
                                    <input type="text" name="name" value="{{ $products->name }}" class="form-control" placeholder="Product name">
=======
                                    <input type="text" name="product_name" class="form-control" placeholder="Product name">
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                                  </div>
                  
                                  <div class="col" style="padding: 15px; margin-left:25px;">
                                    <label>Brand <span class="required_star">*</span></label>
<<<<<<< HEAD
                                    <input type="text" name="brand" value="{{ $products->model }}" class="form-control" placeholder="Brand Name">
=======
                                    <input type="text" name="brand" class="form-control" placeholder="Brand Name">
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                                  </div>  

                                </div>
                  
                                <div class="row">
                                    <div class="col" style="padding: 15px; margin-left:25px;">
                                        <label>Description <span class="required_star">*</span></label>
<<<<<<< HEAD
                                        <textarea class="form-control" name="description" value="{{ $products->description}}" id="exampleFormControlTextarea1" cols="1" rows="1">{{ $products->description}}</textarea>           
=======
                                        <textarea class="form-control" id="exampleFormControlTextarea1" cols="1" rows="1"></textarea>           
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                                    </div>
                                    
                                    <div class="col" style="padding: 15px; margin-left:25px;">                  
                                        <label>Sale Price <span class="required_star">*</span></label>                 
<<<<<<< HEAD
                                        <input type="number" name="sale_price" value="{{ $products->sale_price}}" class="form-control" placeholder="Sale_price">
=======
                                        <input type="number" name="sale_price" class="form-control" placeholder="Sale_price">
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                                    </div> 
                                    
                              

                                </div>

                                <div class="row">

                                  
                    
                                    <div class="col" style="padding: 15px; margin-left:25px;">
                                      <label>Purchase Price<span class="required_star">*</span></label>
<<<<<<< HEAD
                                      <input type="number" name="Purchase_price" value="{{ $products->purchase_price}}" class="form-control" placeholder="Purchase_price">
                                    </div> 
                                    <div class="col" style="padding: 15px; margin-left:25px;">                  
                                        <label>Quantity <span class="required_star">*</span></label>                 
                                        <input type="number" name="quantity" value="{{ $products->quantity}}" class="form-control" placeholder="Enter quantity">
=======
                                      <input type="number" name="Purchase_price" class="form-control" placeholder="Brand Name">
                                    </div> 
                                    <div class="col" style="padding: 15px; margin-left:25px;">                  
                                        <label>Quantity <span class="required_star">*</span></label>                 
                                        <input type="number" name="sale_price" class="form-control" placeholder="Sale_price">
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                                    </div> 
                                          
                                  </div>
                                  <div class="row">

                            
                    
<<<<<<< HEAD
                                  <div class="col-md-6" style="padding: 15px; margin-left:25px;">
                                      <label>Category<span class="required_star">*</span></label>

                                      <select class="form-select" name="category" aria-label="Default select example">
                                      <option  value="{{$products->category}}">{{$products->category}}</option>

                                       @foreach($categories as $category)

                                        <option  value="{{$category->name}}">{{$category->name}}</option>
                                        @endforeach

                                      </select>
                                    </div>   
=======
                                    <div class="col-md-6" style="padding: 15px; margin-left:25px;">
                                      <label>Available<span class="required_star">*</span></label>
                                      <select class="form-select" aria-label="Default select example">
                                        <option disabled>Open this select menu</option>
                                        <option value="yes">Yes</option>
                                        <option value="No">No</option>
                                      </select>
                                    </div>  
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc

                                    <div class="col-md-5" style="padding: 15px; margin-left:25px;">
                                      <label for="image">Product Image<span class="required_star">*</span></label> <br>
                                     <input type="file" id="image">
                                    </div> 
                                          
                                  </div>


                                <div class="form-row" style="padding: 15px; margin-left:15px;">
                             
<<<<<<< HEAD
                                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
=======
                                  <button type="button" name="submit" class="btn btn-primary">Submit</button>
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                  
                                </div>
                  
                  
                  
                              </form>
                        </section> 
                    </div>
                </div>
            </div>
        </div> 
     
</x-master>