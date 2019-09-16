@extends('admin.dashboard')

@section('admincontent')
    <a href="{{route('admin_products')}}" class="btn btn-info" role="button">Back</a>
        <form action='{{route("post_add_product")}}' method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="product_name">Product Name</label>
                    <input type="input" class="form-control" id="product_name" placeholder="Product Name" name="name">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="sku">SKU</label>
                    <input type="input" class="form-control" id="sku" placeholder="SkU" name="sku">
                </div>
            </div>
            <div class="form-row">        
                <div class="form-group col-md-6">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="10" name="price">
                </div>
            </div>
            <div class="form-row"> 
                <div class="form-group col-md-6">
                    <label for="quantity">Quantity</label>
                    <input type="text" class="form-control" id="quantity" placeholder="15" name="quantity">
                </div>
            </div> 
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="description">Description</label>
              <input type="text" class="form-control" id="description" name="description">
            </div>
          </div>
          <div class="form-row">
              <div class="form-group col-md-2">
                  <label for="image">Image</label>
                  <input type="file" class="form-control" id="image" name="image">
              </div>
          </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
    </form>
@endsection

