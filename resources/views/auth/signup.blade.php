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

            <button type="submit" class="btn btn-primary px-5">Signup</button>
        </div>
    </form>
</div>
@endsection