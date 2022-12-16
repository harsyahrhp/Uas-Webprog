@extends('template')

@section('title', 'Register')

@section('content')
<div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center my-5">
    <div class=" shadow-lg justify-content-center d-flex flex-column align-items-center" style="width: 50vw">
        <div class="display-4 m-2">Register</div>
        <form class="bg-light p-5" action="/register" method="POST" style="width: 50vw">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                    value={{old('name') }}>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    placeholder="Enter your email" value={{old('email') }}>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter your password">
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword"
                    placeholder="Confirm your password">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label" v>Gender</label>
                <br>
                <input type="radio" class="radio" id="gender-male" name="gender" value='male'>
                <label class="form-check-label" for="gender-male">Male</label>
                <br>
                <input type="radio" class="radio" id="gender-female" name="gender" value='female'>
                <label class="form-check-label" for="gender-female">Female</label>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date of birth</label>
                <br>
                <input type="date" class="form-control date" id="date" name="date">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label" value="">Choose a country</label>
                <select id="country" class="form-control selector" name="country">
                    <option value="" disabled selected>--select country--</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Laos">Laos</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Vietnam">Vietnam</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary" value="Register">Register</button>

            <div class="mt-5">Already have an account? <a href="/login">Login here!</a></div>
        </form>
    </div>
</div>

@endsection
