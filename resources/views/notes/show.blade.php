@extends('layouts.index')
@section('content')
    <h3 class="fw-bold">{{ $data->title }}</h3>
    <p>{{ $date }}</p>
    <div class="border-bottom"></div>
    <p style="text-align: justify">{{ $data->notes }}</p>
@endsection
