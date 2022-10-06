<x-master>
    <x-slot:title>
        Admin | ProductList
        </x-slot>

      

            <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-header">
                            <div class="row">
                              <div class="col-md-3 col-sm-6" style="padding: 25px;">
                                <h2>Products List</h2>
                              </div>
                            <div class="col-md-6"></div>
                              <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                <a href="{{ route('admin.addproduct')}}"><button type="button" class="btn btn-primary">Add Products</button></a>
                
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
                            
                                                  <table id="datatable"  class=" table-striped"  role="grid" aria-describedby="datatable_info">
                                                    <thead>
                                                        <tr role="row" style="height: 50px;">

                                                          <th class="c_center" style="width:5%; padding: 25px;">SN</th>
                                                          <th class="c_center" style="width:5%; padding: 25px;">Name</th>
                                                          <th class="c_center" style="width:5%; padding: 25px;">Brand</th>
                                                          <th class="c_center" style="width:5%; padding: 25px;">Category</th>                                                            
                                                          <th class="c_center" style="width:5%; padding: 25px;">Description</th>                                                            
                                                          <th class="c_center" style="width:5%; padding: 25px;">Sale Price</th>
                                                          <th class="c_center" style="width:5%; padding: 25px;">Purchase Price</th>
                                                          <th class="c_center" style="width:5%; padding: 25px;">Quantity</th>  
<<<<<<< HEAD
                                                          <th class="c_center" style="width:5%; padding: 25px;">Image</th>  

=======
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc

                                                          <th class="c_center" style="width:5% ;padding: 25px;">View</th>
                                                          <th class="c_center" style="width:5% ;padding: 25px;">Edit</th>
                                                          <th class="c_center" style="width:5% ;padding: 25px;">Delete</th>
                
                                                     
                                                            <th class="c_center" style="width:5%;"></th>
                                                        </tr>
                                                    </thead>
                                          
                
                                                        <tbody id="">
                                                        @foreach($products as $product)

                                                                                              
                                                          <tr role="row" class="odd" style="height: 75px; padding: 25px">
                                                           
                                                              <td class="c_center " style="padding: 25px;" >{{ $product->id }}</td>
                                                              <td class="c_center " style="padding: 25px;">{{ $product->name }}</td>
                                                              <td class="c_center "style="padding: 25px;">{{ $product->model }}</td>
                                                              <td class="c_center "style="padding: 25px;">{{ $product->category }}</td>

                                                              <td class="c_center "style="padding: 25px;">{{ $product->description}}</td>
                                                              <td class="c_center "style="padding: 25px;">{{ $product->sale_price}}</td>
                                                              <td class="c_center "style="padding: 25px;">{{ $product->purchase_price}}</td>
                                                              <td class="c_center "style="padding: 25px;">{{ $product->quantity}}</td>

<<<<<<< HEAD
                                                              <td class="c_center "style="padding: 25px;">
                                                              <img style="height: 40px;width:40px;" src="{{ asset('storage/products/'.$product->image) }}"/>
                                                              </td>

=======
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                
                                                              <td class="c_center "style="padding: 22px;">
                                                              <a href="{{ route('admin.viewproduct', $product->id) }}">  <button type="button" class="btn btn-success">View</button></a>
                
                                                                </td>
                
                                                                <td class="c_center "style="padding: 22px;">
<<<<<<< HEAD
                                                                <a href="{{ route('admin.editproduct', $product->id) }}"> <button type="button" class="btn btn-primary">Edit</button></a>
                  
                                                                  </td>
                
                                                                  <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                <td>
                                                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                                                                </td>

                                                                </form>
=======
                                                                  <a href="editproduct.html"> <button type="button" class="btn btn-primary">Edit</button></a>
                  
                                                                  </td>
                
                                                                  <td>
                                                                <a class="btn btn-sm btn-outline-danger" href="{{ route('product.destroy', $product->id) }}">Delete</a>
                                                                 </td>
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
                                        
                                                          </tr>
                                                          
                                                          @endforeach
                                                      </tbody>
                
                
                                                    <tfoot>
                                                        <tr style="height: 50px;">
                                                          <th class="c_center" style="width:5%; padding: 25px;">SN</th>
                                                          <th class="c_center" style="width:5%; padding: 25px;">Name</th>
                                                          <th class="c_center" style="width:5%; padding: 25px;">Brand</th>
                                                          <th class="c_center" style="width:5%; padding: 25px;">Description</th>
                                                          <th class="c_center" style="width:5%; padding: 25px;">Sale Price</th>
                                                          <th class="c_center" style="width:5%; padding: 25px;">Purchase Price</th>
<<<<<<< HEAD
                                                          <th class="c_center" style="width:5%; padding: 25px;">Quantity</th>
                                                          <th class="c_center" style="width:5%; padding: 25px;">Image</th>  
  
=======
                                                          <th class="c_center" style="width:5%; padding: 25px;">Quantity</th>  
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc

                                                          <th class="c_center" style="width:5%; padding: 25px;">Available</th>
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