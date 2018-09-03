<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable=['product_name','product_desc','product_price','product_image',];
}
