@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Create a new post</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
        </div>

        <div class="form-group">
            <label for="image">Title</label>
            <input class="form-control" type="file" name="image" id="image"">
        </div>

        <div class="form-group">
            <label for="title">Body</label>
            <textarea class="form-control" type="text" name="body" id="title">{{ old('body') }}</textarea>
        </div>

        <input class="btn btn-primary" type="submit" value="Create post">

    </form>

</div>
@endsection
