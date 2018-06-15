@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>File Upload<h1></div>

                <div class="panel-body">
 <form action="{{URL::to('upload')}}" method="post" enctype="multipart/form-data">
    <label>Select image to upload:</label>
    <input type="file" name="file" id="file">
    <input type="submit" value="upload" name="submit">
    <input type="hidden" value="{{csrf_token()}}" name="_token">
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
