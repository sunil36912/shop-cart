<?php

namespace App\Http\Controllers;

use App\Fileupload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileuploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('file_upload/index');
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
       if ($request->hasFile('file_name')) {
        if ($request->file('file_name')->isValid()) {
            

           
            $filename=$request->file('file_name')->getClientOriginalName();
            $filesize=$request->file('file_name')->getClientSize();
            $request->file_name->storeAs('public/images',$filename);

/*  $path = $request->file_name->path();*/

/*$extension = $request->file_name->extension();*/
/*$path = $request->file_name->storeAs('public/images','sunil.jpg');*/
//$request->session()->flash('message', 'Thanks for uploading');
/*return back();//->with('message', 'Thanks for uploading');*/
 $file =new Fileupload();
 $file->file_name=$filename;
 $file->file_size=$filesize;
 $file->save();
 $request->session()->flash('message', 'Thanks for uploading');
 return back();//->with('message', 'Thanks for uploading');

}
    
}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function show($data,Fileupload $fileupload)
    {
        
     $contents = Storage::url('images/sunil.jpg');

  echo "<img src='".$contents."' height='400px' width='200px'/>";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function edit(Fileupload $fileupload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fileupload $fileupload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fileupload  $fileupload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fileupload $fileupload)
    {
        //
    }
}
