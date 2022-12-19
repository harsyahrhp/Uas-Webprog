@extends('template')

@section('title', 'Home')

@section('content')

<div class="display-5 mb-5">{{$categoryName}}</div>

<div class="row row-cols-1 row-cols-md-5 g-4 p-5" style="background: #e6e6e6">

    @foreach ($products as $product)
    <div class="col">
        <div class="card h-100" style="width: 18rem; overflow: hidden">
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

@endsection
