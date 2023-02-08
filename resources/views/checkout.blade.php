@extends('template')

@section('title', 'Check Out')

@section('content')
    <style>
        .center h2{
            font-size: 35px;
            text-align: center;
        }
        .center h4{
            font-size: 20px;
        }
    </style>
        <div class="col text-center">
            <h2 class="center">
                Success!
            </h2>
            <br>
            <h4 class="center">
                We will contact you 1x24 hours.
            </h4>
            <a href="/home" class="center">
                Click here to 'Home'
            </a>
        </div>

@endsection
