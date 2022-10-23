<x-master>
    <x-slot:title>
        Admin | Add Colors
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>Add Color</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{route('colors.index')}}">    <button type="button" class="btn btn-primary">Back Color List</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">
                          <x-forms.error />

                            <form action="{{route('colors.store')}}" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="row">
                                <x-forms.input 
                                       name='name'
                                       label='Color name'
                                       placeholder="Color name"
                                       :value="old('name')"
                                       required
                           
                                     />
                                     <x-forms.input 
                                       type='color'                    
                                       label='Code'
                                       name='code'
                                       :value="old('code')"
                                       placeholder="Color"

                                       required
                           
                                     />
                       
                                </div>



                                  <div class="row">
                                                                  
                             
                                  <x-forms.select 
                                  name="brand_id" 
                                  label="Brand" 
                                  :options="$brands" 
                                  :selected="old('brand_id')" 
                                  required/>



                             
                                          
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