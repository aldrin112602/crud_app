@extends('../layouts.app')

@section('title', 'Login Page')

@section('content')
<div class="p-5">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('login.submit') }}" class="mx-auto col-lg-6 col bg-light border rounded shadow" style="overflow: hidden;">
        @csrf
        <h4 class="bg-primary p-4 text-white">Login</h4>
        <div class="p-4">
            @error('error')
                <div class="alert alert-danger p-2 mt-2">{{ $message }}</div>
            @enderror
            <div class="mt-2">
                <label for="email" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="email" value="{{ old('email') }}" required>
            </div>
            <div class="mt-2">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" value="{{ old('password') }}" required>
            </div>
            <button type="submit" class="btn btn-outline-dark d-block mt-4 col-lg-3 col-12 mx-auto">Login</button>
            <hr>
            <p class="text-center fs-5">
                Don't have an account? <br>
            <a href="/signup" class="btn btn-outline-primary d-block mt-2 col-lg-2 col-12 mx-auto">Register</a>
            </p>
        </div>
    </form>
</div>
@endsection