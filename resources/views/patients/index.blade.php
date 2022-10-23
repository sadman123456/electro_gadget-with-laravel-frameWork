<x-master>
    <x-slot:title>
        Admin | PatientList
        </x-slot>

        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>Patient List</h2>
                                @if(session('message'))
                                    <p class="text-success">
                                        {{ session('message') }}
                                    </p>
                                    @endif
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{route('admin.addpatient')}}"> <button type="button" class="btn btn-primary">Add Patient</button></a>
                
                              </div>
                            </div>
                
                          </section>
                          <section class="content">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <!-- general form elements -->
                                    <div class="box box-primary">
                                        <!-- /.box-header -->
                                        <div class="box-body table-responsive">
                                            <input type="hidden" class="datatable_name" data-title="Product Categories" data-id_name="datatable">
                                            <div id="datatable_wrapper" class="dataTables_wrapper">
                                                <div class="dt-buttons"> 

                            
                                                  <table id="datatable"  class=" table-striped"  role="grid" aria-describedby="datatable_info" style="text-align: center;">
                                                    <thead>

                                                  
                                                        <tr role="row" style="height: 50px;">
                                                            <th class="c_center" style="width:5%; padding: 25px;">SN</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">Name</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">Address</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">Phone</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">Email</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">Last Visited</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">Department</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">District</th>

                                                            <th class="c_center" style="width:5% ;padding: 25px;">View</th>
                                                            <th class="c_center" style="width:5% ;padding: 25px;">Edit</th>
                                                            <th class="c_center" style="width:5% ;padding: 25px;">Delete</th>
                
                
                
                                                     
                                                            <th class="c_center" style="width:5%;"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="">
                                                    @foreach($patients as $patient)

                                                                                              
                                                    <tr role="row" class="odd" style="height: 75px; padding: 25px">

                                                        <td class="c_center " style="padding: 25px;" >{{ $patient->id }}</td>
                                                        <td class="c_center " style="padding: 25px;">{{ $patient->name }}</td>
                                                        <td class="c_center "style="padding: 25px;">{{ $patient->adress }}</td>
                                                        <td class="c_center "style="padding: 25px;">{{ $patient->phone }}</td>
                                                        <td class="c_center "style="padding: 25px;">{{ $patient->email }}</td>
                                                        <td class="c_center "style="padding: 25px;">{{ $patient->last_visited }}</td>
                                                        <td class="c_center "style="padding: 25px;">{{ $patient->department }}</td>
                                                        <td class="c_center "style="padding: 25px;">{{ $patient->distict }}</td>


          
                                                        <td class="c_center "style="padding: 22px;">
                                                          <a href="{{ route('patient.show', $patient->id) }}">  <button type="button" class="btn btn-success">View</button></a>
          
                                                          </td>
          
                                                          <td class="c_center " style="padding: 22px;">
                                                                    <a href="{{ route('admin.editpatient', $patient->id) }}"> <button type="button"
                                                                            class="btn btn-primary">Edit</button></a>

                                                                </td>
          
                                                                <form action="{{ route('patient.destroy', $patient->id) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                <td>
                                                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                                                                </td>

                                                                </form>
                                  
                                                    </tr>
                                                    @endforeach
                                                  
                                                </tbody>
          
          
                                         
                
                                 
                                                    <tfoot>
                                                        <tr style="height: 50px;">
                                                        <th class="c_center" style="width:5%; padding: 25px;">SN</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">Name</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">Address</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">Phone</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">Email</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">Last Visited</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">Department</th>
                                                            <th class="c_center" style="width:5%; padding: 25px;">District</th>

                                                            <th class="c_center" style="width:5% ;padding: 25px;">View</th>
                                                            <th class="c_center" style="width:5% ;padding: 25px;">Edit</th>
                                                            <th class="c_center" style="width:5% ;padding: 25px;">Delete</th>
                                              
                                                        </tr>
                                                    </tfoot>
                                                    </table>
                                 
                              
                                        </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>
                            </div>
                        </section> 
                    </div>
                </div>
            </div>
        </div>


</x-master>