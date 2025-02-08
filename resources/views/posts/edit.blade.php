@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <section class="card">
            <div class="card-body">
                <form class="form-horizontal form-bordered" method="POST" action="{{ route('posts.update', $post) }}">
                    @csrf @method('PUT')
                   <x-input label="Title" name="title" value="{{ $post->title }}" />
                   @error('title')
                       <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                   <x-input label="Content" name="content" value="{{ $post->content }}" />
                   @error('content')
                       <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                   <x-button color="primary" type="submit">Submit</x-button>
                   <a href="/posts" class="mb-1 mt-1 me-1 btn btn-default">back</a>
                </form>
            </div>

            <hr>
            <table class="table table-responsive-md mb-0">
                <thead>
                    <tr>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($post->comments as $comment)
                        <tr>
                            <td>{{ $comment->message }}</td>
                        </tr>
                    @endforeach
            </table>
        </section>
    </div>
</div>
@endsection
