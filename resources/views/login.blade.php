@extends('layouts.guest')
@section('content')
    <section class="body-sign">
        <div class="center-sign">
            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-end">
                    <h2 class="title text-uppercase font-weight-bold m-0"><i
                            class="bx bx-user-circle me-1 text-6 position-relative top-5"></i> Sign In</h2>
                </div>
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('login.store') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Username</label>
                            <div class="input-group">
                                <input name="username" type="text" class="form-control form-control-lg" />
                                <span class="input-group-text">
                                    <i class="bx bx-user text-4"></i>
                                </span>
                            </div>
                            @error('username')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>

                        <div class="form-group mb-3">
                            <div class="clearfix">
                                <label class="float-start">Password</label>
                            </div>
                            <div class="input-group">
                                <input name="password" type="password" class="form-control form-control-lg" />
                                <span class="input-group-text">
                                    <i class="bx bx-lock text-4"></i>
                                </span>
                            </div>
                            @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                            </div>
                            <div class="col-sm-4 text-end">
                                <button type="submit" class="btn btn-primary mt-2">Sign In</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <p class="text-center text-muted mt-3 mb-3">&copy; Copyright 2025. All Rights Reserved.</p>
        </div>
    </section>
@endsection
