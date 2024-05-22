@extends('../layouts.app')

@section('title', 'Signup Page')

@section('content')
<div class="p-5">
    <form action="" method="post" class="mx-auto col-lg-6 col bg-light border rounded shadow" style="overflow: hidden;">
        <h4 class="bg-primary p-4 text-white">Signup</h4>
        <div class="p-4">
        <div class="mt-1">
                <label for="name" class="form-label my-0">Full name</label>
                <input name="name" type="name" class="form-control" id="name" required>
            </div>
            <div class="mt-1">
                <label for="email" class="form-label my-0">Email address</label>
                <input name="email" type="email" class="form-control" id="email" required>
            </div>
            <div class="mt-1">
                <label for="password" class="form-label my-0">Password</label>
                <input name="password" type="password" class="form-control" id="password" required>
            </div>
            <div class="mt-1 pb-2">
                <label for="Confirm_password" class="form-label my-0">Confirm Password</label>
                <input name="confirm_password" type="password" class="form-control" id="Confirm_password" required>
            </div>

            <button type="submit" class="btn btn-outline-dark d-block mt-4 col-lg-3 col-12 mx-auto">Signup</button>
            <hr>
            <p class="text-center fs-5">
                Already have an account? <br>
            <a href="/login" class="btn btn-outline-primary d-block mt-2 col-lg-2 col-12 mx-auto">Login</a>
            </p>
        </div>
    </form>
</div>
@endsection