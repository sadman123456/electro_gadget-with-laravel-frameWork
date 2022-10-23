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
                  <a href="{{route('product.index')}}"> <button type="button" class="btn btn-primary">Back Product List</button></a>

                </div>
              </div>

            </section>
            <section class="content">
              <form action="{{route('product.update', $product->id )}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')

                <div class="row">
                  <x-forms.input name='name' label='Product name' placeholder="Product name" :value="old('name',$product->name)" required />

                  <x-forms.select label='Brand' name='brand_id' :options="$brands" :selected="old('brand_id',$product->brand_id)" required />
                
                 

                </div>

                <div class="row">


                  <x-forms.textarea name='description' :value="old('description', $product->description)" label='Description' placeholder="Write Here" />

                  <x-forms.input label='Sale Price' type="number" name='sale_price' :value="old('sale_price',$product->sale_price)" placeholder="Sale_Price " required />



                </div>

                <div class="row">

                  <x-forms.input label='Purchase Price' type="number" name='Purchase_price' :value="old('Purchase_price',$product->purchase_price)" placeholder="Purchase_price" required />

                  <x-forms.input label='Quantity' type="number" name='quantity' :value="old('quantity',$product->quantity)" placeholder="Quantity" required />

                </div>
                <img style="height: 40px;width:40px; margin-left:55%;" src="{{ asset('storage/products/'.$product->image) }}" />


                <div class="row">
                  <x-forms.select name="category" label="Category" :options="$categories" :selected="old('category_id',$product->category_id)" required />
                  <x-forms.input type="file" name='image' :value="old('image', $product->image)" label='Product Image' />
                </div>

                <x-forms.checkbox name="colors[]" id="color" :checklist="$colors" :checkedItems="$selectedColors" label="Colors" />

                <x-forms.checkbox name="is_active" :checklist="[1 =>'Is Active']" :checkedItems="[$product->is_active]"  />


          




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