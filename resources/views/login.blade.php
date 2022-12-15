@extends('template')

@section('title', 'Login')

@section('content')

@auth
<div>Hi, {{ Auth::user() }}</div>
<form action="/logout" method="POST">
    @csrf
    <input type="submit" value="Logout">
</form>
@else
<div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center my-5">
    <div class=" shadow-lg justify-content-center d-flex flex-column align-items-center" style="width: 50vw">
        <div class="display-4 m-2">Login</div>
        <form class="bg-light p-5" action="/login" method="POST" style="width: 50vw">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    placeholder="Enter your email" value={{ Cookie::get('email_cookie') !=null ?
                    Cookie::get('email_cookie') : old('email') }}>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter your password" value={{ Cookie::get('password_cookie') !=null ?
                    Cookie::get('password_cookie') : '' }}>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary" value="Login">Login</button>

            <div class="mt-5">Doesn't have an account? <a href="#">Register here!</a></div>
        </form>
    </div>
</div>

@endif

@endsection
