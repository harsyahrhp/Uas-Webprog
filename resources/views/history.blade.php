@extends('template')

@section('title', 'History')

@section('content')
@foreach ($data as $datas)
{{-- <p>{{"Transaction Date ". $datas->created_at}}</p> --}}
<table>
    <tr>
      <th>Name</th>
      <th>Quantity</th>
      <th>Sub Price</th>
    </tr>
    <tr>
        {{-- <td>{{ $datas->users->name }}</td> --}}
    </tr>
  </table>
@endforeach
@endsection
