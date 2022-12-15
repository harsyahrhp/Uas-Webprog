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
<div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center ">
    <div class="row row-cols-3 gap-5">
        <form action="/login" method="POST">
            @csrf
            <input type="email" name="email" id="email" placeholder="email"
                value={{Cookie::get('email_cookie')!=null?Cookie::get('email_cookie'):old('email')}}>
            <input type="password" name="password" id="password" placeholder="password"
                value={{Cookie::get('password_cookie')!=null?Cookie::get('password_cookie'):old('password')}}>
            <input type="checkbox" name="remember" id="remember"> Rememberme
            <input type="submit" value="Login">
        </form>
    </div>
</div>

@endif

@endsection