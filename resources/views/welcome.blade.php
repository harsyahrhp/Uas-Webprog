@extends('template')

@section('title', 'Home')

@section('content')

@foreach ($categories as $category)
<h1>{{$category->name}}</h1>
<div class="d-flex flex-row flex-nowrap overflow-auto">
    <div class="d-flex flex-row flex-nowrap">
        @foreach ($category->products as $product)
        <div class="col">
            <div class="card" style=" width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endforeach
@endsection
