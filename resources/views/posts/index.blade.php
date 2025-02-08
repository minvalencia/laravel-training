@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <section class="card">
            <div class="card-body">
                <x-alert />
                <a href="{{ route('posts.create') }}" class="mb-1 mt-1 me-1 btn btn-primary">Add Post</a><br><br>
                <form method="GET" action="{{ route('posts.index') }}">
                    <input type="text" name="search" id="search" class="form-control" placeholder="Search Post" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-info mt-1">Search</button>
                </form>
                <table class="table table-responsive-md mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                <td>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                {{ $posts->links() }}
            </div>
        </section>
    </div>
</div>
@endsection
