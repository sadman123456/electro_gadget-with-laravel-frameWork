<x-master>
    <x-slot:title>
        Admin | User
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>Update Role</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{route('users.index')}}">    <button type="button" class="btn btn-primary">Back Product List</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">
                          <x-forms.error />

                            <form action="{{route('user.update_role', $user->id)}}" method="post" >
                              @csrf
                              @method('patch')
              



                                  <div class="row">
                                                                  
                             
                                  <x-forms.select 
                                  name="role_id" 
                                  label="Role" 
                                  :options="$roles" 
                                  :selected="old('role_id',$user->role_id)" 
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