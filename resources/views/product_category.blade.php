@extends('template')

@section('title', 'Home')

@section('content')

<div class="display-5 mb-5">{{$categoryName}}</div>
<div class="d-flex flex-column">

    <div class="row row-cols-1 row-cols-md-5 g-4 p-5" style="background: #e6e6e6">

        @foreach ($products as $product)
        <div class="col">
            <div class="card h-100" style="width: 12rem; overflow: hidden">
                <img src="{{ asset('product/' . $product->photo_path) }}" class="card-img-top" alt={{ $product->name
                }} style="width: 12rem; height:12rem">
                <div class="card-body">
                    <p class="card-text">{{ $product->name }}</p>
                    <p class="card-text"><b>{{ 'Rp. ' . $product->price }}</b></p>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <div style="margin: 2rem" class="align-self-center">
        {{ $products->links() }}
    </div>

</div>
@endsection
