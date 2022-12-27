@extends('template')
@section('title', 'Profile')
@section('content')
<div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center my-5">
    <div class=" shadow-lg justify-content-center d-flex flex-column align-items-center" style="width: 50vw">
        <div class="display-4 m-2">Profile</div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <p class="form-control">{{$data->name}}</p>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label" value="">Email</label>
                <p class="form-control">{{$data->email}}</p>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Gender</label>
                <p class="form-control">{{$data->gender}}</p>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Date of Birth</label>
                <p class="form-control">{{$data->dob}}</p>
            </div>
            <div class="mb-3">
                <label for="photo_path" class="form-label">Country</label>
                <p class="form-control">{{$data->country}}</p>
            </div>

    </div>
</div>
@endsection
