<x-master>
    <x-slot:title>
        Admin | Add Brand
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>Add Brand</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{route('brands.index')}}"> <button type="button" class="btn btn-primary">Back Brand List</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">
                          <x-forms.error />
                            <form action="{{route('brands.store')}}" method="post">
                              @csrf
                                <div class="row">

                            <x-forms.input 
                            type="text"
                            name='name'
                            :value="old('name')"
                            label='Brand Name'
                            placeholder="Brand name"
                           
                            />
                            <x-forms.textarea 
                            name='description'
                            :value="old('description')"

                            label='Description'
                            placeholder="Write Here"
                           
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