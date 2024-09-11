@extends('layouts.app')

@section('content')
<h1>{{ $post['title'] }}</h1>
<p><strong>Author:</strong> {{ $post['author'] }}</p>
<p><strong>Created At:</strong> {{ $post['created_at'] }}</p>

<a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
<a href="{{ route('posts.edit', $post['id']) }}" class="btn btn-warning">Edit Post</a>

<form action="{{ route('posts.destroy', $post['id']) }}" method="POST" style="display:inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

@endsection
