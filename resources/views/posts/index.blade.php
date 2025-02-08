@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <section class="card">
            <div class="card-body">
                <x-alert />
                <a href="{{ route('posts.create') }}" class="mb-1 mt-1 me-1 btn btn-primary">Add Post</a>
                <table class="table table-responsive-md mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Content</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
@endsection
