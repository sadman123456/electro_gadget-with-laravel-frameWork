<x-master>
  <x-slot:title>
    Admin | Trash Colors
    </x-slot>



    <div class="main-panel">
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-sm-12">
              <section class="content-header">
                <div class="row">
                  <div class="col-md-8 col-sm-6" style="padding: 25px;">
                    <h2>Trash colors</h2>
                  </div>
                  <div class="col-md-4">
                    <div class="col-md-2 col-sm-6" style="padding: 25px;">

                      <div class="col-md-2 col-sm-6" style="padding: 25px;">
                        <a href="{{ route('colors.index')}}"><button type="button" class="btn btn-primary">BacK</button></a>

                      </div>

                    </div>

                  </div>

              </section>
              <section class="content">
                <div class="row">
                  <div class="col-md-12 col-sm-12">
                    <x-forms.massege />

                    <!-- general form elements -->
                    <div class="box box-primary">
                      <!-- /.box-header -->
                      <div class="box-body table-responsive">
                        <input type="hidden" class="datatable_name" data-title="Product Categories" data-id_name="datatable">
                        <div id="datatable_wrapper" class="dataTables_wrapper">
                          <div class="dt-buttons">

                            <table id="datatable" class=" table-striped" role="grid" aria-describedby="datatable_info">
                              <thead>
                                <tr role="row" style="height: 50px;">

                                  <th class="c_center" style="width:5%; padding: 25px;">SN</th>
                                  <th class="c_center" style="width:5%; padding: 25px;">Color Name</th>
                                  <th class="c_center" style="width:5%; padding: 25px;">Color Code</th>

                                  <th class="c_center" style="width:5%; padding: 25px;">Brand</th>
                 

                                  <th class="c_center" style="width:5% ;padding: 25px;">Restore</th>
                                  <th class="c_center" style="width:5% ;padding: 25px;">Delete</th>


                                  <th class="c_center" style="width:5%;"></th>
                                </tr>
                              </thead>


                              <tbody id="">
                                @foreach($colors as $color)


                                <tr role="row" class="odd" style="height: 75px; padding: 25px">

                                  <td class="c_center " style="padding: 25px;">{{ $color->id }}</td>
                                  <td class="c_center " style="padding: 25px;">{{ $color->name }}</td>
                                  <td class="c_center " style="padding: 25px;">{{ $color->code }}</td>
                                  <td class="c_center " style="padding: 25px;">{{ $color->brand_id }}</td>



                                  <td class="c_center " style="padding: 22px;">
                                    <a href="{{ route('colors.restore', $color->id) }}"> <button type="button" class="btn btn-success">Restore</button></a>

                                  </td>

                                  <td class="c_center " style="padding: 22px;">
                                    <a href="{{ route('colors.delete', $color->id) }}"> <button class="btn btn-sm btn-outline-danger"onclick="return confirm('Are You sure want to delete ')">Delete</button>
                                    </a>

                                  </td>



                                </tr>

                                @endforeach
                              </tbody>


                              <tfoot>
                                <tr style="height: 50px;">
                                  <th class="c_center" style="width:5%; padding: 25px;">SN</th>
                                  <th class="c_center" style="width:5%; padding: 25px;">Name</th>
                                  <th class="c_center" style="width:5%; padding: 25px;">Code</th>

                                  <th class="c_center" style="width:5%; padding: 25px;">Brand</th>
                          
                                  <th class="c_center" style="width:5% ;padding: 25px;">Restore</th>
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