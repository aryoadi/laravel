@extends('layouts.app')

@section('content')
<!-- <div class="jumbotron" style="margin-top:-23px;"> -->
	<a href="{{route('admin.index')}}"class="ml-5 btn btn-primary">Back</a>
    
<h3 class="text-center">Selamat Datang</h3>


</div>


<div class="container">
    <div class="card">
        <div class="card-body">
        <h1 class="text-center">{{$blog->title}}</h1> <hr> <br>
        <p>{{$blog->alamat}}</p>
        <p>{{$blog->isi}}</p>
        </div>
    </div>

</div>
    
@endsection