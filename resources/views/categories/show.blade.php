<x-master>
    <x-slot:title>
        Admin | <Details></Details>
        </x-slot>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <section class="content-header">

                                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                    <h1 class="h2">{{$category->name}}</h1>
                                    <div class="col-md-2 col-sm-6" style="padding: 25px;">
                                        <a href="{{route('category.index')}}"> <button type="button" class="btn btn-primary">Back </button></a>

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

                                                                    <th class="c_center" style="width:5%; padding: 5px;">SN</th>
                                                                    <th class="c_center" style="width:5%; padding: 5px;">Name</th>
                                                                    <th class="c_center" style="width:5%; padding: 5px;">Brand</th>
                                                                    <th class="c_center" style="width:5%; padding: 5px;">Category</th>

                                                                    <th class="c_center" style="width:5%; padding: 5px;">Description</th>
                                                                    <th class="c_center" style="width:5%; padding: 5px;">Sale Price</th>
                                                                    <th class="c_center" style="width:5%; padding: 5px;">Purchase Price</th>
                                                                    <th class="c_center" style="width:5%; padding: 5px;">Quantity</th>


                                                                    <th class="c_center" style="width:5%;"></th>
                                                                </tr>
                                                            </thead>


                                                            <tbody id="">
                                                                @foreach($category->products as $product)


                                                                <tr role="row" class="odd" style="height: 75px; padding: 25px">

                                                                    <td class="c_center " style="padding: 25px;">{{ $product->id }}</td>
                                                                    <td class="c_center " style="padding: 25px;">{{ $product->name }}</td>
                                                                    <td class="c_center " style="padding: 25px;">{{ $product->model }}</td>
                                                                    <td class="c_center " style="padding: 25px;">{{ $product->category->name }}</td>
                                                                    <td class="c_center " style="padding: 25px;">{!! $product->description !!}</td>
                                                                    <td class="c_center " style="padding: 25px;">{{ $product->sale_price}}</td>
                                                                    <td class="c_center " style="padding: 25px;">{{ $product->purchase_price}}</td>
                                                                    <td class="c_center " style="padding: 25px;">{{ $product->quantity}}</td>


                                                                </tr>

                                                                @endforeach
                                                            </tbody>


                                                            <tfoot>
                                                                <tr style="height: 50px;">
                                                                    <th class="c_center" style="width:5%; padding: 5px;">SN</th>
                                                                    <th class="c_center" style="width:5%; padding: 5px;">Name</th>
                                                                    <th class="c_center" style="width:5%; padding: 5px;">Brand</th>
                                                                    <th class="c_center" style="width:5%; padding: 5px;">Category</th>

                                                                    <th class="c_center" style="width:5%; padding: 5px;">Description</th>
                                                                    <th class="c_center" style="width:5%; padding: 5px;">Sale Price</th>
                                                                    <th class="c_center" style="width:5%; padding: 5px;">Purchase Price</th>
                                                                    <th class="c_center" style="width:5%; padding: 5px;">Quantity</th>



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