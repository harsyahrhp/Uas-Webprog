@extends('template')

@section('title', 'Home')

@section('content')
    <h1 class="d-flex justify-content-center mb-3 mt-3">Post</h1>
    <div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center ">
        <div class="row row-cols-3 gap-5">
            {{-- @foreach ($posts as $p)
                <div class="card shadow-sm p-3 mb-5 bg-white rounded" style="width: 24rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->title }}</h5>
                        <p class="card-text">{{ $p->text }}</p>
                        <hr>
                        <p class="date">{{ $p->created_at }}</p>
                    </div>
                </div>
            @endforeach --}}
        </div>
        <div style="margin: 2rem">
            {{-- {{ $posts->links() }} --}}
        </div>
    </div>

@endsection
