<x-master>
    <x-slot:title>
        Admin | Update Category
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>Update Category</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{route('admin.categorylist')}}"> <button type="button" class="btn btn-primary">Back Category List</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">
                          <form action="{{route('category.update', $categories->id)}}" method="post">
                              @csrf
                              @method('patch ')
                            
                                <div class="row">

                                  <div class="col" style="padding: 15px; margin-left:25px;">                  
                                    <label>Category Name <span class="required_star">*</span></label>                 
                                    <input type="text" name="name" value="{{$categories->name}}"class="form-control" placeholder="Category name">
                                  </div>
                  
                                  <div class="col-md-6" style="padding: 15px; margin-left:25px;">
                                        <label>Description <span class="required_star">*</span></label>
                                        <textarea class="form-control" name="description" value="{{ $categories->description }}" id="exampleFormControlTextarea1" cols="1" rows="1">{{ $categories->description }}</textarea>           
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