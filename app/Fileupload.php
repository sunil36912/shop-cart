<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fileupload extends Model
{
	
   protected $fillable = ['product_name','file_name','file_size'];
}
