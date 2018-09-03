@extends('admin.layout.main')
@section('content')
<div class="row">
   <h1 class="text-center">Update Product</h1>
</div>
<div class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <form  method="post" action="{{route('product.update',$product->id)}}"   enctype="multipart/form-data" >
            @method('put')
        <div class="form-group">
                <label for="my-input"> Product Name</label>
<input type="text" name="product_name" placeholder="Enter Product Name" @if ($product->product_name)
value='{{$product->product_name}}''
    
@endif    class="form-control" >
</div>

<div class="form-group">
    <label for="my-input">Description</label>
    <textarea id="my-input" class="form-control" rows="3"  name="product_desc">@if($product->Product_desc)
      {{$product->Product_desc}}
    @endif 

    </textarea>
</div>
<div class="form-group">
        <label for="my-input"> Product Price</label>
<input type="text" name="product_price" placeholder="Enter Product price"  @if ($product->product_price)
value='{{$product->product_price}}'
    
@endif  class="form-control"  />
</div>
<div class="form-group">
        <label for="my-input"> Product Image</label>
<input type="file" name="product_image"    />

      
    </div>
    <input type="hidden" name="product_image1" value="@if($product->Product_image)
    {{ $product->Product_image }}
    @endif" >
    @if ($product->Product_image)
    <div class="row">Current Image
            <img src="/storage/images/{{ $product->Product_image }}" width="100px" height="100px"></td>
  
</div>
        
    @endif
    @csrf
    <br>
    <input type="submit" value="Update product" class="btn btn-info" />
</form>
</div>
   
</div>
@endsection