@extends('template')
@section('title', 'Update Product')
@section('content')
<div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center my-5">
    <div class=" shadow-lg justify-content-center d-flex flex-column align-items-center" style="width: 50vw">
        <div class="display-4 m-2">Update Product</div>
        <form class="bg-light p-5" action="{{url('updateproduct',$product->id)}}" method="POST" enctype="multipart/form-data" style="width: 50vw">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" value="{{$product->name}}" name="name">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label" value="">Category</label>
                <select id="category" class="form-control selector" name="category">
                    <option value={{$product->name}}>{{$product->name}}</option>
                    @foreach ($categories as $category)
                        <option value={{$category->name}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Detail</label>
                <input type="text" class="form-control" id="description" value="{{$product->description}}" name="description">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" value="{{$product->price}}" name="price">
            </div>
            <div class="mb-3">
                <label for="photo_path" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo_path" name="photo_path">
            </div>
            <button type="submit" class="btn btn-primary" value="Add">Update</button>
            <div class="mt-5"><a href="/showproduct">Back</a></div>
        </form>
    </div>
</div>
@endsection
