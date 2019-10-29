@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('admin.index')}}" class="btn btn-primary mb-3">Back</a>
            <div class="card">
                <div class="text-center">Edit Post</div>
            <form action="{{route('update', $blog->id)}}" method="Post">
                @csrf
                <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{$blog->title}}">

            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{$blog->alamat}}">

                <label for="isi">Isi</label>
            <textarea name="isi" id="" cols="30" rows="10" class="form-control">{{$blog->isi}}</textarea>
                <br>
                <input type="submit" value="POST" class="btn btn-primary">
            </form> 
                </div>
            </div>
</div>
@endsection
