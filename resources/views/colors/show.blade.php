


        <x-master>
    <x-slot:title>
        Admin | Color Details
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>View Color</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{route('colors.index')}}"> <button type="button" class="btn btn-primary">Back Color List</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">

                            <div class="box-body row">
     
                
                                <div class="col-md-6">
                                  <ul class="list-group">
                                   <center> <p class="list-group-item list-group-item-success"><b>COLOR DETAILS</b></p></center>
                                   <li class="list-group-item"><b>Color ID : {{ $color->id }}</b><span class="badge"></span></li>
                                   <li class="list-group-item"><b>Color Name : {{ $color->name }}</b> <span class="label label-info pull-right"></span></li>
                                   <li class="list-group-item"><b>Brand : {{ $color->brand_id }}</b> <span class="label label-primary pull-right"></span></li>
                                   <li class="list-group-item"><b>Color Code :{{ $color->code }} </b><span class="label label-info pull-right"></span></li>

                                   
                                  </ul>
                                </div>
                                 <div class="col-md-6">
                         
                                </div>
                                    
                                
                              </div>
                        </section> 
                    </div>
                </div>
            </div>
        </div>
</x-master>