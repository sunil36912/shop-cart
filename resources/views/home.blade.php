@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
@if (count($products)>0)


@foreach ($products->chunk(3) as $chunk)
<div class="row">              
                   
        @foreach($chunk as $item)                      
<div class="card col-sm-4 ml-2" style="width: 18rem;">
        <img class="card-img-top" src="/storage/images/{{$item->Product_image}}" alt="Card image cap" style="height:300px;" >
        <div class="card-body">
    <h3 class="card-title">{{$item->product_name}}</h3>
       <p class="card-text">{{$item->Product_desc}}</p>
      <p class="card-text text-danger">Rs.{{$item->product_price}}</p>
          <a href="{{route('cart.add',['id'=>$item->id])}}" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
      @endforeach   
    </div>            
     @endforeach
                        
                            @endif
                        </div>
                     
                </div>
              
            </div>
        </div>
    </div>
</div>
@endsection
