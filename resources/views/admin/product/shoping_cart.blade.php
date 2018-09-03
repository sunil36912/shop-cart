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
@if (Session::has('cart'))
<div class="row">
<div class="col-sm-6 col-sm-offset-3">

    <ul class="list-group">

             @foreach ($products as $product)
<li class="list-group-item"> 
    <span class="badge badge-info" >{{$product['qty']}}</span>
    <strong>{{ $product['item']['title']}}</strong>
    <span class="label label-success">{{$product['price']}}</span>
        <div class="btn-group">
                <button class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">
                    Actions<span  class="caret"></span>
                </button>
                            <ul class="dropdown-menu">
                             <a href="dropdown-item"><li class="">Reduce By 1</li></a>
                             <a href="dropdown-item"><li class=""> Reduce All</li></a>
                            </ul>
        </div>

</li>
    
@endforeach
</ul>
</div>
</div>
<div class="row">
        <div class="col-sm-6 col-sm-offset-3">
                <Strong>Total:{{ $totalPrice }}</Strong>      
                </div>
                <hr>
                <div class="col-sm-6 col-sm-offset-3">
                        <Strong><button type="button" class="btn btn-normal btn-danger">Checkout</button></Strong>      
                        </div>
</div>
@else
<div class="col-sm-6 col-sm-offset-3">
        <Strong>NO Items In Cart</Strong>      
        </div>
@endif
</div>
                     
</div>

</div>
</div>
</div>
</div>

@endsection