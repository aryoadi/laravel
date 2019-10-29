@extends('layouts.app')

@section('content')
<div class="container">
<a href="{{route('admin.create')}}" class="btn btn-primary mb-3">Create Post</a>

<div class="text-center"><h1>Admin</h1></div>               
                <table class="table table-striped" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Isi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blog as $blog)
                        <tr>
                        <th>{{$blog->id}}</th>
                        <th>{{$blog->title}}</th>
                        <th>{{$blog->alamat}}</th>
                        <td style="white-space;nowrap; overflow:hodden; text overflow:ellipsis; max-width:75ch;">{{$blog->isi}}</td>
                        <td>
                        <a href="{{route('destroy',$blog->id)}}" class="btn btn-danger">Delete</a>
                        <a href="{{route('edit',$blog->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('details',$blog->id)}}" class="btn btn-info">View</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
</div>
@endsection
