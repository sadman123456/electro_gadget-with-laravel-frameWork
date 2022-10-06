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
                          <x-forms.error />

                            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="row">
                                <x-forms.input 
                                       name='name'
                                       label='Product name'
                                       placeholder="Product name"
                                       :value="old('name')"
                                       required
                           
                                     />
                                     <x-forms.input 
                                    
                                       label='Brand'
                                       name='brand'
                                       :value="old('brand')"
                                       placeholder="Product brand"

                                       required
                           
                                     />
                       
                                </div>

                                
                  
                                <div class="row">

                                  <x-forms.textarea 
                                    name='description'
                                    :value="old('description')"
                                    label='Description'
                                    placeholder="Write Here"
                           
                                 />
                                 
                                 <x-forms.input 
                                    
                                    label='Sale Price'
                                    type="number"
                                    name='sale_price'
                                    :value="old('sale_price')"

                                    placeholder="Sale_Price "

                                    required
                        
                                  />
                             
                                </div>

                                <div class="row">

                                <x-forms.input 
                                    
                                    label='Purchase Price'
                                    type="number"
                                    name='Purchase_price'
                                    :value="old('Purchase_price')"

                                    placeholder="Purchase_price"

                                    required
                        
                                  />
                                  <x-forms.input 
                                    
                                    label='Quantity'
                                    type="number"
                                    name='quantity'
                                    :value="old('quantity')"
                                    placeholder="Quantity"

                                    required
                        
                                  />
                                  </div>


                                  <div class="row">
                                                                  
                                  <x-forms.select 
                                  name='category'
                                  :options="$categories"
                                  
                                  />

                                   <x-forms.input 
                                   
                                       type="file"
                                       name='image'
                                       label='Product Image'
                           
                                     />
                                          
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