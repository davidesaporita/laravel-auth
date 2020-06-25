@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $post->title }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td><a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id) }}" >Edit</a></td>
                <td>
                    <form action="POST" action="{{ route('admin.posts.edit', $post->id) }}">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger"type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>

</div>
@endsection
