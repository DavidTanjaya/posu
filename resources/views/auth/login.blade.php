@extends('layouts.navbar')

@section('content')
    <div class="row justify-content-center my-5">
        <div class="col-md-4">

            @if (session()->has('registerSuccess'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('registerSuccess') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginFailed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginFailed') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin m-auto">
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
                <form action="/login" method="POST">
                    @csrf
                    {{-- email --}}
                    <div class="form-floating ">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" autofocus
                            id="email" placeholder=" name@example.com" required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- password --}}
                    <div class="form-floating">
                        <input type="password" name="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                            placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

                </form>
                <small> Have not registered ? <a href="/register">Register here</a></small>
            </main>
        </div>
    </div>
@endsection
