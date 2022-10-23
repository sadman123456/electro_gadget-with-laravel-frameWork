
<h1  style="margin: 10px">Products</h1>

<table border="1">
    <thead>
        <tr role="row" style="height: 5px;">

            <th class="c_center" style="width:5%; padding: 5px;">SN</th>
            <th class="c_center" style="width:5%; padding: 5px;">Name</th>
            <th class="c_center" style="width:5%; padding: 5px;">Brand</th>
            <th class="c_center" style="width:5%; padding: 5px;">Category</th>
            <th class="c_center" style="width:5%; padding: 5px;">Description</th>
            <th class="c_center" style="width:5%; padding: 5px;">Sale Price</th>
            <th class="c_center" style="width:5%; padding: 5px;">Purchase Price</th>
            <th class="c_center" style="width:5%; padding: 5px;">Quantity</th>
            <!-- <th class="c_center" style="width:5%; padding: 25px;">Image</th> -->


        </tr>
    </thead>


    <tbody id="">
        @foreach($products as $product)


        <tr role="row" class="odd" style="height: 5px; padding: 5px">

            <td class="c_center " style="padding: 5px;">{{ $product->id }}</td>
            <td class="c_center " style="padding: 5px;">{{ $product->name }}</td>
            <td class="c_center " style="padding: 5px;">{{ $product->model }}</td>

            <td class="c_center " style="padding: 5px;">{{ $product->category }}</td>


            <td class="c_center " style="padding: 5px;">{{ $product->description}}</td>
            <td class="c_center " style="padding: 5px;">{{ $product->sale_price}}</td>
            <td class="c_center " style="padding: 5px;">{{ $product->purchase_price}}</td>
            <td class="c_center " style="padding: 5px;">{{ $product->quantity}}</td>

            <!-- <td class="c_center " style="padding: 25px;">
                <img style="height: 40px;width:40px;" src="{{ asset('storage/products/'.$product->image) }}" />
            </td> -->

            @endforeach

    </tbody>


    <tfoot>
        <tr style="height: 5px;">
            <th class="c_center" style="width:5%; padding: 5px;">SN</th>
            <th class="c_center" style="width:5%; padding: 5px;">Name</th>
            <th class="c_center" style="width:5%; padding: 5px;">Brand</th>
            <th class="c_center" style="width:5%; padding: 5px;">Category</th>

            <th class="c_center" style="width:5%; padding: 5px;">Description</th>
            <th class="c_center" style="width:5%; padding: 5px;">Sale Price</th>
            <th class="c_center" style="width:5%; padding: 5px;">Purchase Price</th>
            <th class="c_center" style="width:5%; padding: 5px;">Quantity</th>
            <!-- <th class="c_center" style="width:5%; padding: 5px;">Image</th> -->


    

        </tr>
    </tfoot>
</table>