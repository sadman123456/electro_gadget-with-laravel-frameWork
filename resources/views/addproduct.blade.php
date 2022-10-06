<x-master>
    <x-slot:title>
        Admin | Add Product
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>Add Product</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{route('admin.productlist')}}">    <button type="button" class="btn btn-primary">Back Product List</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">
<<<<<<< HEAD
                          <x-forms.error />

                            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="row">
                                <x-forms.input 
                                       name='name'
                                       label='Product name'
                                       placeholder="Product name"

                                       required
                           
                                     />
                                     <x-forms.input 
                                    
                                       label='Brand'
                                       name='brand'
                                       placeholder="Product name"

                                       required
                           
                                     />
                       
                                </div>

                                
                  
                                <div class="row">

                                  <x-forms.textarea 
                                    name='description'
                                    label='Description'
                                    placeholder="Write Here"
                           
                                 />
                                 
                                 <x-forms.input 
                                    
                                    label='Sale Price'
                                    type="number"
                                    name='sale_price'
                                    placeholder="Sale_Price "

                                    required
                        
                                  />
                             
                                </div>

                                <div class="row">
                                <x-forms.input 
                                    
                                    label='Purchase Price'
                                    type="number"
                                    name='Purchase_price'
                                    placeholder="Purchase_price"

                                    required
                        
                                  />
                                  <x-forms.input 
                                    
                                    label='Quantity'
                                    type="number"
                                    name='quantity'
                                    placeholder="Quantity"

                                    required
                        
                                  />
                                  </div>


=======
                            <form action="{{route('product.store')}}" method="post">
                              @csrf
                                <div class="row">

                                  <div class="col" style="padding: 15px; margin-left:25px;">                  
                                    <label>Product Name <span class="required_star">*</span></label>                 
                                    <input type="text" name="name" class="form-control" placeholder="Product name">
                                  </div>
                  
                                  <div class="col" style="padding: 15px; margin-left:25px;">
                                    <label>Brand <span class="required_star">*</span></label>
                                    <input type="text" name="brand" class="form-control" placeholder="Brand Name">
                                  </div>  

                                </div>
                  
                                <div class="row">
                                    <div class="col" style="padding: 15px; margin-left:25px;">
                                        <label>Description <span class="required_star">*</span></label>
                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" cols="1" rows="1"></textarea>           
                                    </div>
                                    
                                    <div class="col" style="padding: 15px; margin-left:25px;">                  
                                        <label>Sale Price <span class="required_star">*</span></label>                 
                                        <input type="number" name="sale_price" class="form-control" placeholder="Sale_price">
                                    </div> 
                                    
                              

                                </div>

                                <div class="row">

                                  
                    
                                    <div class="col" style="padding: 15px; margin-left:25px;">
                                      <label>Purchase Price<span class="required_star">*</span></label>
                                      <input type="number" name="Purchase_price" class="form-control" placeholder="Brand Name">
                                    </div> 
                                    <div class="col" style="padding: 15px; margin-left:25px;">                  
                                        <label>Quantity <span class="required_star">*</span></label>                 
                                        <input type="number" name="quantity" class="form-control" placeholder="Sale_price">
                                    </div> 
                                          
                                  </div>
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                                  <div class="row">

                            
                    
                                    <div class="col-md-6" style="padding: 15px; margin-left:25px;">
                                      <label>Category<span class="required_star">*</span></label>

<<<<<<< HEAD
                                      <select class="form-select form-control" name="category" aria-label="Default select example">
=======
                                      <select class="form-select" name="category" aria-label="Default select example">
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                                      @foreach($categories as $category)

                                        <option  value="{{$category->name}}">{{$category->name}}</option>
                                        @endforeach

                                      </select>
                                    </div>  
<<<<<<< HEAD
                                  <!-- <x-forms.select
                                   @foreach($categories as $category)

                                   <option  value="{{$category->name}}">{{$category->name}}</option>
                                   @endforeach
                                   
                                   /> -->

                                   <x-forms.input 
                                       type="file"
                                       name='image'
                                       label='Product Image'
                           
                                     />
=======

                                    <div class="col-md-5" style="padding: 15px; margin-left:25px;">
                                      <label for="image">Product Image<span class="required_star">*</span></label> <br>
                                     <input type="file" name="image" id="image">
                                    </div> 
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                                          
                                  </div>


                                <div class="form-row" style="padding: 15px; margin-left:15px;">
                             
                                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  
                                </div>
                  
                  
                  
                              </form>
                        </section> 
                    </div>
                </div>
            </div>
        </div>
     
</x-master>