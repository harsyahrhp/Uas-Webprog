@extends('template')

@section('title', 'Register')

@section('content')

<style>
     .form{
            display: flex;
            gap: 5rem;
            justify-content: center;
            margin-bottom: 5rem;
        }

        .reg{
            text-align: center;
            padding: 3rem;
        }
</style>

        <div class="reg">
            <h1>Register</h1>
        </div>
        <form action="/register" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form">

                <div class="left">
                <label for="name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="name" name="name"
                    value={{old('name') }}>


                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname"
                    value={{old('lname') }}>


                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    value={{old('email') }}>


                <label for="role" class="form-label" value="">Role</label>
                <select id="role" class="form-control selector" name="role">
                    <option value="" disabled selected> </option>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select>


                <label for="gender" class="form-label">Gender</label>
                <br>
                <input type="radio" class="radio" id="gender-male" name="gender" value='male'>
                <label class="form-check-label" for="gender-male">Male</label>
                <br>
                <input type="radio" class="radio" id="gender-female" name="gender" value='female'>
                <label class="form-check-label" for="gender-female">Female</label>
                </div>

                <div class="right">

                <label for="file" class="form-label">Display Picture</label>
                <input type="file" class="form-control" id="file" name="file">


                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">


                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">

                <button type="submit" class="btn btn-warning" value="Register">Register</button>
                <div class="mt-5"><a href="/login">Already have an account? click here to login in</a></div>

                </div>



        </div>
        </form>
    </div>



@endsection
