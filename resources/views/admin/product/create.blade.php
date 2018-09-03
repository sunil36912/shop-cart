@extends('admin.layout.main')
@section('content')
<div class="row">
   <h1 class="text-center">Create Product</h1>
</div>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <form  method="post" action="{{route('product.store')}}" enctype="multipart/form-data" >
        <div class="form-group">
                <label for="my-input"> Product Name</label>
<input type="text" name="product_name" placeholder="Enter Product Name" class="form-control" >
</div>

    <div class="form-group">
    <label for="my-input">Description</label>
    <textarea id="my-input" class="form-control" rows="3"  name="product_desc">

    </textarea>
</div>
<div class="form-group">
        <label for="my-input"> Product Price</label>
<input type="text" name="product_price" placeholder="Enter Product price"  class="form-control"  />
</div>
<div class="form-group">
        <label for="my-input"> Product Image</label>
<input type="file" name="product_image"    />

      
    </div>
    @csrf
    <input type="submit" value="create product" class="btn btn-info" />
</form>
</div>
   
</div>
@endsection