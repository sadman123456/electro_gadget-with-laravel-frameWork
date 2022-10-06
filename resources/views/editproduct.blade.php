<x-master>
  <x-slot:title>
    Admin | Edit Product
    </x-slot>
    <div class="main-panel">
      <div class="content">
        <div class="row">
          <div class="col-lg-12 col-sm-12">
            <section class="content-header">
              <div class="row">
                <div class="col-md-3 col-sm-6" style="padding: 25px;">
                  <h2>Update Product</h2>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-2 col-sm-6" style="padding: 25px;">
                  <a href="{{route('admin.productlist')}}"> <button type="button" class="btn btn-primary">Back Product List</button></a>

                </div>
              </div>

            </section>
            <section class="content">
              <form action="{{route( 'product.update',$products->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">
                  <x-forms.input name='name' label='Product name' placeholder="Product name" :value="old('name',$products->name)" required />
                  <x-forms.input label='Brand' name='brand' :value="old('brand',$products->model)" placeholder="Product Brand" required />

                </div>

                <div class="row">


                  <x-forms.textarea name='description' :value="old('description', $products->description)" label='Description' placeholder="Write Here" />

                  <x-forms.input label='Sale Price' type="number" name='sale_price' :value="old('sale_price',$products->sale_price)" placeholder="Sale_Price " required />



                </div>

                <div class="row">

                  <x-forms.input label='Purchase Price' type="number" name='Purchase_price' :value="old('Purchase_price',$products->purchase_price)" placeholder="Purchase_price" required />
                  <x-forms.input label='Quantity' type="number" name='quantity' :value="old('quantity',$products->quantity)" placeholder="Quantity" required />
                </div>

                <div class="row">

                  <div class="col" style="padding: 15px; margin-left:25px;">
                    <label>Category<span class="required_star">*</span></label>

                    <select class="form-select" name="category" aria-label="Default select example">
                      <option value="{{$products->category}}">{{$products->category}}</option>

                      @foreach($categories as $category)

                      <option value="{{$category->name}}">{{$category->name}}</option>
                      @endforeach

                    </select>
                  </div>

                  <div class="col" style="padding: 15px; margin-left:25px;">
                    <label for="image">Product Image<span class="required_star">*</span></label> <br>
                    <input type="file" id="image">
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