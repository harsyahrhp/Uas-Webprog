@extends('template')

@section('title', $product->name.' details')

@section('content')

<div class="d-flex flex-column" style="min-height: 500vh">

    <div class="d-flex flex-row g-4 p-5 justify-content-center" style="background: #e6e6e6;">
        <div class="rounded-5">
            <img src="{{ asset('product/' . $product->photo_path) }}" class=" img-fluid rounded-start"
                style="width: 48rem; max-height: 48rem;">
        </div>
        <div class="rounded-end p-5" style="background: #f7f7f7">
            <div class="card-body">
                <h5 class="display-3">{{$product->name}}</h5>
                <div style="width: 54rem" class="d-flex flex-row mb-5">
                    <div class="me-5" style="color: #747474">Detail</div>
                    <div>{{$product->description}}</div>
                </div>
                <div class="d-flex flex-row mb-5">
                    <div class="me-5" style="color: #747474">Price</div>
                    <div>{{'IDR '.$product->price}}</div>
                </div>
                @auth
                @if (Auth::user()->role == 'member')
                <form action="/addcart/{{$product->id}}" class="d-flex flex-column" method="POST">
                    @csrf
                    <div class="d-flex flex-row mb-5">
                        <div class="me-5" style="color: #747474">Qty</div>
                        <input type="number" name="quantity" id="quantity" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-secondary" value="Purchase">Purchase</button>
                </form>


                @endif
                @endauth

            </div>
        </div>
    </div>

</div>
@endsection
