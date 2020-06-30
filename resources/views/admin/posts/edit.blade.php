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

    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $post->title) }}">
        </div>

        <div class="form-group">
            <label for="image">
                <p><span>Image</span></p>
                <img width="200" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->image }}">
            </label>
            @isset($post->image)
                <h6 class="mt-4">Change image:</h6>
            @endisset
            <input class="form-control" type="file" name="image" id="image"">
        </div>

        {{-- @isset($post->image)
            <div class="form-check">
                <input type="checkbox" name="delete_img" id="delete_img">
                <label for="del_image">Delete image</label>
            </div>
        @endisset --}}

        <div class="form-group">
            <label for="title">Body</label>
            <textarea class="form-control" type="text" name="body" id="title">{{ old('body', $post->body) }}</textarea>
        </div>

        <input class="btn btn-primary" type="submit" value="Update">

    </form>

</div>
@endsection
