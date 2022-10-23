<x-master>
    <x-slot:title>
        Admin | BrandList
        </x-slot>

        <div class="main-panel">
            <div class="content">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">


                        <section class="content-header">

                            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                <h1 class="h2">Brand List</h1>
                                <div class="btn-toolbar mb-2 mb-md-0">
                                    <div class="btn-group me-2">
                                        <a href="">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">PDF</button>
                                        </a>

                                        <button type="button" class="btn btn-sm btn-outline-secondary">Excel</button>
                                        
                                        <a href="{{route('brands.trash')}}">
                                            <button type="button" class="btn btn-sm btn-outline-danger">Trash</button>
                                        </a>
                                    </div>
                                    <a href="{{ route('brands.create')}}">
                                        <button type="button" class="btn btn-sm btn-outline-primary">
                                            <span data-feather="plus"></span>
                                            Add New
                                        </button>
                                    </a>
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

                                                    <table id="datatable" class=" table-striped" role="grid" aria-describedby="datatable_info" style="text-align: center;">
                                                        <thead>
                                                            <tr role="row" style="height: 50px;">
                                                                <th class="c_center" style="width:5%; padding: 25px;">SN
                                                                </th>
                                                                <th class="c_center" style="width:5%; padding: 25px;">
                                                                    Brand Name</th>

                                                                <th class="c_center" style="width:5%; padding: 25px;">
                                                                    Description</th>
                                                                <th class="c_center" style="width:5% ;padding: 25px;">
                                                                    View</th>
                                                                <th class="c_center" style="width:5% ;padding: 25px;">
                                                                    Edit</th>
                                                                <th class="c_center" style="width:5% ;padding: 25px;">
                                                                    Delete</th>




                                                                <th class="c_center" style="width:5%;"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="">
                                                            @foreach($brands as $brand)

                                                            <tr role="row" class="odd" style="height: 75px; padding: 25px">
                                                                <td class="c_center " style="padding: 25px;">{{ $brand->id }}</td>
                                                                <td class="c_center " style="padding: 25px;">{{ $brand->name }}</td>
                                                                <td class="c_center " style="padding: 25px;">{!! $brand->description !!}</td>

                                                                <!-- <td class="c_center " style="padding: 22px;">
                                                                    <a href="categoryview.html"> <button type="button"
                                                                            class="btn btn-success">View</button></a>

                                                                </td> -->
                                                                <td class="c_center " style="padding: 22px;">
                                                                    <a href="{{ route('brands.show', $brand->id) }}"> <button type="button" class="btn btn-success">show</button></a>

                                                                </td>

                                                                <td class="c_center " style="padding: 22px;">
                                                                    <a href="{{ route('brands.edit', $brand->id) }}"> <button type="button" class="btn btn-primary">Edit</button></a>

                                                                </td>
                                                                
                                                                <form action="{{ route('brands.destroy', $brand->id) }}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <td>
                                                                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are You sure want to delete ')">Delete</button>
                                                                    </td>

                                                                </form>

                                                            </tr>

                                                            @endforeach
                                                        </tbody>


                                                        <tfoot>
                                                            <tr style="height: 50px;">
                                                                <th class="c_center" style="width:5%; padding: 25px;">SN
                                                                </th>
                                                                <th class="c_center" style="width:5%; padding: 25px;">
                                                                    Brand Name</th>

                                                                <th class="c_center" style="width:5%; padding: 25px;">
                                                                    Description</th>
                                                                <th class="c_center" style="width:5% ;padding: 25px;">
                                                                    View</th>
                                                                <th class="c_center" style="width:5% ;padding: 25px;">
                                                                    Edit</th>
                                                                <th class="c_center" style="width:5% ;padding: 25px;">
                                                                    Delete</th>

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