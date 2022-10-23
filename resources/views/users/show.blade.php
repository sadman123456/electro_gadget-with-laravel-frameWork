


        <x-master>
    <x-slot:title>
        Admin | User Details
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>View User</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{route('users.index')}}"> <button type="button" class="btn btn-primary">Back User List</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">

                            <div class="box-body row">
     
                
                                <div class="col-md-6">
                                  <ul class="list-group">
                                   <center> <p class="list-group-item list-group-item-success"><b>User DETAILS</b></p></center>
                                   <li class="list-group-item"><b>User ID : {{ $user->id }}</b><span class="badge"></span></li>
                                   <li class="list-group-item"><b>User Name : {{ $user->name }}</b> <span class="label label-info pull-right"></span></li>
                                   <li class="list-group-item"><b>Email : {{ $user->email }}</b> <span class="label label-primary pull-right"></span></li>
    
                                   
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


