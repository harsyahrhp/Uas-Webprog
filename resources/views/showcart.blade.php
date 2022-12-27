@extends('template')

@section('title', 'Cart')

@section('content')
@php
    $pricetotal = 0;
@endphp
@foreach ($carts as $cart)
<div class="d-flex flex-column" style="min-height: 500vh">
    @foreach ($cart->products as $product)
    <div class="d-flex flex-row g-4 p-5 justify-content-center" style="background: #e6e6e6;">
        <td>
            <a class="btn btn-danger" href="
            {{url('deletecart',$product->id)}}">Delete</a>
        </td>
        <div class="rounded-5">
            <img src="{{ asset('product/' . $product->photo_path) }}" class=" img-fluid rounded-start"
                style="width: 48rem; max-height: 48rem;">
        </div>
        <div class="rounded-end p-5" style="background: #f7f7f7">
            <div class="card-body">
                <h5 class="display-3">{{$product->name}}</h5>
                <div class="d-flex flex-row mb-5">
                    <div class="me-5" style="color: #747474">Quantity</div>
                    <div>{{'Quantity: '.$cart->quantity}}</div>
                </div>
                <div class="d-flex flex-row mb-5">
                    <div class="me-5" style="color: #747474">Price</div>
                    @php
                        $total = $product->price * $cart->quantity;
                        $pricetotal = $pricetotal + $total;
                    @endphp
                    <div>{{'Total Price: IDR '. $total}}</div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
@endforeach
<form action="/purchase" class="d-flex flex-column" method="POST">
    @csrf
    <div class="d-flex flex-row mb-5">
        <div class="me-5" style="color: #747474">{{ $pricetotal }}</div>
    </div>
    <button type="submit" class="btn btn-secondary" value="Purchase">Purchase</button>
</form>
@endsection
