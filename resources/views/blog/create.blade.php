@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('admin.index')}}" class="btn btn-primary mb-3">Back</a>

                <div class="text-center">Create Post</div>
            
            <form action="{{route('admin.store')}}" method="Post">
                @csrf
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">

                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat">
                
                <label for="isi">Isi</label>
                <textarea name="isi" id="" cols="30" rows="10" class="form-control"></textarea>
                <br>
                <input type="submit" value="POST" class="btn btn-danger">
            </form>
                
            </div>
</div>
@endsection
