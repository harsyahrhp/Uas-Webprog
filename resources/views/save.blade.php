@extends('template')

@section('title', 'Save')

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
                Saved!
            </h2>
            <br>
            <a href="/home" class="center">
                Click here to 'Home'
            </a>
        </div>


@endsection
