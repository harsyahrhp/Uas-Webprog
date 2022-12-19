@extends('template')

@section('title', 'Home')

@section('content')
<form class="d-flex mb-5" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-secondary" type="submit">Search</button>
</form>

@foreach ($categories as $category)
<div style="background: #ededed " class="p-5 pt-3 mb-5">

    <div class="display-5">{{$category->name}}</div>
    <a class="display-10" href="/category/{{$category->id}}">See more</a>

    <div class="d-flex flex-row flex-nowrap overflow-auto">
        <div class="d-flex flex-row flex-nowrap" style="gap: 2rem">

            @foreach ($category->products as $product)
            <div class="col">
                <div class="card h-100" style="width: 18rem; overflow: hidden;">
                    <img src="{{ asset('product/' . $product->photo_path) }}" class="card-img-top" alt={{ $product->name
                    }} style="width: 18rem; height:18rem">
                    <div class="card-body">
                        <p class="card-text">{{ $product->name }}</p>
                        <p class="card-text"><b>{{ 'Rp. ' . $product->price }}</b></p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endforeach
@endsection
