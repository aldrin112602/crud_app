@extends('../layouts.app')

@section('title', 'Edit Page')

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
    <form action="{{ route('edit.submit', $user) }}" method="POST" class="mx-auto col-lg-6 col bg-light border rounded shadow" style="overflow: hidden;">
        @csrf
        @method('PUT')
        <h4 class="bg-primary p-4 text-white">Edit user</h4>
        <div class="p-4">
        @error('error')
            <div class="alert alert-danger p-2 mt-2">{{ $message }}</div>
        @enderror
        <div class="mt-1">
                <label for="name" class="form-label my-0">Full name</label>
                <input value="{{ $user->name }}" name="name" type="name" class="form-control" id="name" required>
            </div>
            <div class="mt-1">
                <label for="email" class="form-label my-0">Email address</label>
                <input value="{{ $user->email }}" name="email" type="email" class="form-control" id="email" required>
            </div>
            <div class="mt-1">
                <label for="password" class="form-label my-0">New password</label>
                <input value="{{ old('password') }}" name="password" type="password" class="form-control" id="password">
            </div>

            <button type="submit" class="btn btn-outline-dark d-block mt-4 col-lg-3 col-12 mx-auto">Save Changes</button>
        </div>
    </form>
</div>
@endsection