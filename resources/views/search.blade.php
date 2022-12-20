@extends('template')

@section('Search Result')

@section('content')

<form class="d-flex mb-5" action={{ route('search') }} method="POST">
    @csrf
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
    <button class="btn btn-secondary" type="submit">Search</button>
</form>

<div class="display-5 mb-5">Search Result</div>
<div class="d-flex flex-column" style="min-height: 100vh">

    <div class="row row-cols-1 row-cols-md-5 g-4 p-5" style="background: #e6e6e6">

        @foreach ($products as $product)
        <a class="col" style="text-decoration: none" href="/product/{{$product->id}}">
            <div class="card h-100" style="width: 12rem; overflow: hidden">
                <img src="{{ asset('product/' . $product->photo_path) }}" class="card-img-top" alt={{ $product->name
                }} style="width: 12rem; height:12rem">
                <div class="card-body">
                    <p class="card-text" style="color: black">{{ $product->name }}</p>
                    <p class="card-text" style="color: black"><b>{{ 'Rp. ' . $product->price }}</b></p>
                </div>
            </div>
        </a>
        @endforeach
        @if (count($products) == 0)
        <div class="mb-5">No match products</div>

        @endif

    </div>

</div>
@endsection
