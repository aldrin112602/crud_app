@extends('../layouts.app')

@section('title', 'Login Page')

@section('content')
<div class="p-5">
    <form action="" method="post" class="mx-auto col-lg-6 col bg-light border rounded shadow" style="overflow: hidden;">
        <h4 class="bg-primary p-4 text-white">Login</h4>
        <div class="p-4">
            <div class="mt-2">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mt-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary px-5">Login</button>
        </div>
    </form>
</div>
@endsection