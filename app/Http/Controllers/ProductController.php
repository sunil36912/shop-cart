<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
      
  
        return View('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
     
      $product=new Product();
      $fileimag='';
      $product->product_name=$request->product_name;
      $product->product_price=$request->product_price;
      $product->product_desc=$request->product_desc;
      if ($request->hasFile('product_image')) 
      {
    
            

           
            $filename=$request->file('product_image')->getClientOriginalName();
           
            $filesize=$request->file('product_image')->getClientSize();
            $request->product_image->storeAs('public/images',$filename);
            $fileimag=$filename;
            
       
    }
        else
        {
         
            $fileimag='defualt.jpeg';
        
        }
        $product->product_image=$fileimag;
        $product->save();
        return redirect('/product');




   
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($productid)
    {
        $contents = Storage::url('images/IMG_20170401_062359.jpg');

  echo "<img src='".$contents."' height='400px' width='200px'/>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($productid)
    {
        $product=Product::find($productid);
        return view('admin.product.show',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$productid)
    {
        $fileimag='';
        $product=Product::find($productid);
            if($request->hasFile('product_image'))
                    {
                      $oldinputfile=  $request->input('product_image1');
                     
                       if(Storage::delete("public/images/".$oldinputfile))
                   
                        $filename=$request->file('product_image')->getClientOriginalName();
           
                        $filesize=$request->file('product_image')->getClientSize();
                        $request->product_image->storeAs('public/images',$filename);
                        $fileimag=$filename;
                       
                    }
            else
                    {
                        $fileimag=$request->input('product_image1');
                    }
                    $product->product_name=$request->product_name;
                    $product->product_price=$request->product_price;
                    $product->Product_desc=$request->product_desc;
                    $product->Product_image=$fileimag;
                    $product->save();
                    return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
