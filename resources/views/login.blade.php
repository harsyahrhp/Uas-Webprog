@extends('template')

@section('title', 'Login')

@section('content')

<style>
    .title{
        text-align: center;
    }

    form{
        justify-content: center;
        align-items: center;
        margin-left: 15rem;
        margin-bottom: 15rem;
    }
</style>


        <div class="title">
            <h1>Login</h1>
        </div>
        <form action="/login" method="POST" style="width: 50vw">
            @csrf

                <label for="email" class="form-label">Email Address: </label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    value={{ Cookie::get('email_cookie') !=null ?
                    Cookie::get('email_cookie') : old('email') }}>


                <label for="password" class="form-label">Password: </label>
                <input type="password" class="form-control" id="password" name="password"
                    value={{ Cookie::get('password_cookie') !=null ?
                    Cookie::get('password_cookie') : '' }}>

            <button type="submit" class="btn" value="Login" style="background-color: yellow">Login</button>

            <div class="mt-5"><a href="/register">Don't have an account? click here to sign up</a></div>
        </form>
    </div>
</div>

@endsection
