<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Cart;
use App\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function addProductToCart(Request $request,$id)
     {
      $product=Product::find($id);
      
      $oldCart=Session::has('cart') ? Session::get('cart') : null;
    
     /*  Session::forget('cart');
      return; */
      $cart =new Cart($oldCart);
  
      $cart->add($product,$product->id);
      $request->session()->put('cart',$cart);
      return redirect()->route('home');

     }
     public function ProductInCart()
     {
                if(!Session::has('cart'))
                        {
                            return view('product.shoping_cart',['products'=> null]);
                        }
        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);
        return view('admin.product.shoping_cart',['products'=> $cart->items,
        'totalPrice'=>$cart->totalPrice
        ]);
     }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
