<x-master>
    <x-slot:title>
        Admin | Add Category
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>Add Category</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{route('admin.categorylist')}}"> <button type="button" class="btn btn-primary">Back Category List</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">
                          <!-- @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                          @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                           @endforeach
                          </ul>
                          </div>
                           @endif -->
                            <form action="{{route('category.store')}}" method="post">
                              @csrf
                                <div class="row">

                                  <div class="col" style="padding: 15px; margin-left:25px;">                  
                                    <label>Category Name <span class="required_star">*</span></label>                 
                                    <input type="text"
                                     name="name" 
                                     value="{{ old('name') }}"
                                     class="form-control"
                                     placeholder="Category name">
                                     @error('name')
                                   <div class="from text text-danger">{{ $message }}</div>
                                       @enderror
                                  </div>
                  
                                  <div class="col-md-6" style="padding: 15px; margin-left:25px;">
                                        <label>Description <span class="required_star">*</span></label>
                                        <textarea 
                                         class="form-control"
                                         name="description"
                                         value="{{ old('description') }}
                                          id="exampleFormControlTextarea1"
                                           cols="1"
                                           rows="1">
                                          </textarea> 
                                          @error('description')
                                   <div class="from text text-danger">{{ $message }}</div>
                                       @enderror          
                                    </div>

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