


        <x-master>
    <x-slot:title>
        Admin | Patients Details
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>View Patients</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{route('patient.index')}}"> <button type="button" class="btn btn-primary">Back Product List</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">

                            <div class="box-body row">
     
                
                                <div class="col-md-6">
                                  <ul class="list-group">
                                   <center> <p class="list-group-item list-group-item-success"><b>Patience DETAILS</b></p></center>
                                   <li class="list-group-item"><b> ID: {{ $patients->id }} </b><span class="badge"></span></li>
                                   <li class="list-group-item"><b> Name: {{ $patients->name }}</b> <span class="label label-info pull-right"></span></li>
                                   <li class="list-group-item"><b>phone: {{ $patients->phone }}</b> <span class="label label-primary pull-right"></span></li>
                                   <li class="list-group-item"><b>Address: -{{ $patients->adress }} </b><span></span></li>

                                   <li class="list-group-item"><b>email: {{ $patients->email }}</b> <span class="label label-warning pull-right"></span></li>
                                   <li class="list-group-item"><b>Last Visit: {{ $patients->last_visited }} </b><span class="label label-warning pull-right"></span></li>
                                   <li class="list-group-item"><b>Department: {{ $patients->department }}</b><span class="label label-success pull-right"></span></li>
                                   <li class="list-group-item"><b>District:  {{ $patients->distict }}</b><span class="label label-info pull-right"></span></li>
                                   
                                  </ul>
                                </div>
                                 <div class="col-md-6">
                                  <!-- <ul class="list-group">
                                   <center> <p class="list-group-item list-group-item-success"><b>PRODUCT IMAGE</b></p> </center>
                                   <center>
                                      <img  style="height: 240px; width:240px;" src="./images/aiphone13pm-fcvs-sel-1-1037991-1635242483.jpg"
                            
                                    </center>
                                  </ul> -->
                                </div>
                                    
                                
                              </div>
                        </section> 
                    </div>
                </div>
            </div>
        </div>
</x-master>