@extends('layouts.app')

@section('content')
<h1>All Posts</h1>
<a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{ $post['id'] }}</td>
        <td>{{ $post['title'] }}</td>
        <td>{{ $post['author'] }}</td>
        <td>{{ $post['created_at'] }}</td>
        <td>
            <a href="{{ route('posts.show', $post['id']) }}" class="btn btn-primary">View</a>
            <a href="{{ route('posts.edit', $post['id']) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('posts.destroy', $post['id']) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
