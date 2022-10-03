<x-master>
    <x-slot:title>
        Admin | Update Patient
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>Update Patient</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{route('patient.index')}}"> <button type="button" class="btn btn-primary">Back Category List</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">
                            <form action="{{route('patient.update', $patients->id)}}" method="post">
                              @csrf
                              @method('patch')
                                <div class="row">

                                  <div class="col" style="padding: 15px; margin-left:25px;">                  
                                    <label>Patient Name <span class="required_star">*</span></label>                 
                                    <input type="text" name="name" value="{{ $patients->name }}" class="form-control" placeholder="Patient name">
                                  </div>
                  
                                  <div class="col-md-6" style="padding: 15px; margin-left:25px;">
                                        <label>Address <span class="required_star">*</span></label>
                                        <textarea class="form-control" name="address" value="{{ $patients->adress }}" id="exampleFormControlTextarea1" cols="1" rows="1">{{ $patients->adress }}</textarea>           
                                    </div>

                                 


                                </div>
                                <div class="row">
                                <div class="col" style="padding: 15px; margin-left:25px;">                  
                                    <label>Phone Number <span class="required_star">*</span></label>                 
                                    <input type="number" name="number" class="form-control" value="{{ $patients->phone }}" placeholder="Phone Number">
                                  </div>

                                  <div class="col" style="padding: 15px; margin-left:25px;">                  
                                    <label>Email<span class="required_star">*</span></label>                 
                                    <input type="email" name="email" value="{{ $patients->email }}" class="form-control" placeholder="Email">
                                  </div>

                                </div>

                                <div class="row">
                                <div class="col" style="padding: 15px; margin-left:25px;">                  
                                    <label>Last Visited <span class="required_star">*</span></label>                 
                                    <input type="datetime-local" name="last_visited" value="{{ $patients->last_visited }}" class="form-control" >
                                  </div>

                                  <div class="col-md-6" style="padding: 15px; margin-left:25px;">
                                      <label>Department<span class="required_star">*</span></label>
                                      <select class="form-select" name='department' value="{{ $patients->department }}" aria-label="Default select example">
                                        <option selected>{{ $patients->department }}</option>
                                        <option value="heart">Heart</option>
                                        <option value="eye">Eye</option>
                                        <option value="dental">Dental</option>
                                        <option value="orthopadics">Ortho-padics</option>


                                      </select>
                                    </div>  

                                </div>
                                <div class="row">
    

                                  <div class="col-md-6" style="padding: 15px; margin-left:25px;">
                                      <label>District<span class="required_star">*</span></label>
                                      <select class="form-select" name='district' value="{{ $patients->distict }}" aria-label="Default select example">
                                        <option selected>{{ $patients->distict }}</option>
                                        <option value="Dhaka">Dhaka</option>
                                        <option value="Gazipur">Gazipur</option>
                                        <option value="cumilla">Cumilla</option>
                                        <option value="feni">Feni</option>


                                      </select>
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