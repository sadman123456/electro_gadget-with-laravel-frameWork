
<h1  style="margin: 10px">Colors</h1>

<table border="1">
    <thead>
        <tr role="row" style="height: 5px;">

            <th class="c_center" style="width:5%; padding: 5px;">SN</th>
            <th class="c_center" style="width:5%; padding: 5px;">Name</th>
            <th class="c_center" style="width:5%; padding: 5px;">Code</th>

            <th class="c_center" style="width:5%; padding: 5px;">Brand</th>
  
            <!-- <th class="c_center" style="width:5%; padding: 25px;">Image</th> -->


        </tr>
    </thead>


    <tbody id="">
        @foreach($colors as $color)


        <tr role="row" class="odd" style="height: 5px; padding: 5px">

            <td class="c_center " style="padding: 5px;">{{ $color->id }}</td>
            <td class="c_center " style="padding: 5px;">{{ $color->name }}</td>
            <td class="c_center " style="padding: 5px;">{{ $color->code }}</td>

            <td class="c_center " style="padding: 5px;">{{ $color->brand_id }}</td>


            <!-- <td class="c_center " style="padding: 25px;">
                <img style="height: 40px;width:40px;" src="{{ asset('storage/products/'.$color->image) }}" />
            </td> -->

            @endforeach

    </tbody>


    <tfoot>
        <tr style="height: 5px;">
            <th class="c_center" style="width:5%; padding: 5px;">SN</th>
            <th class="c_center" style="width:5%; padding: 5px;">Name</th>
            <th class="c_center" style="width:5%; padding: 5px;">Code</th>

            <th class="c_center" style="width:5%; padding: 5px;">Brand</th>


            <!-- <th class="c_center" style="width:5%; padding: 5px;">Image</th> -->


    

        </tr>
    </tfoot>
</table>