@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <section class="card">
            <div class="card-body">
                <form class="form-horizontal form-bordered" method="POST" action="{{ route('posts.store') }}">
                    @csrf
                   <x-input label="Title" name="title" value="{{ request('title') }}" />
                   @error('title')
                       <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                   <x-input label="Content" name="content" value="{{ request('content') }}" />
                   @error('content')
                       <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                   <x-button color="primary" type="submit">Submit</x-button>
                   <a href="/posts" class="mb-1 mt-1 me-1 btn btn-default">back</a>
                </form>
            </div>
        </section>
    </div>
</div>
@endsection
