@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">File Upload</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                         
                        </div>
                    @endif

                <form method="post" action="file_upload" enctype="multipart/form-data" >
                    <input type="file" name="file_name" >
                    @csrf
                    <input type="submit" value="Upload">
                </form>
                <div class="row"> <img src="" alt="" title=""></a></div>

             
                </div>
            </div>
        </div>
    </div>
</div>
@endsection