@extends('layouts.index')
@section('content')
    {{-- {{ dd($video->items[0]->id->videoId) }} --}}
    <div class="row">
        <div class="col-lg-12">
            <h3 class="fw-bold mb-3">{{ $data->title }}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <img src="{{ $data->image }}" alt="">
            <ul style="list-style: none;padding-left:0" class="list-info mt-3">
                <li><strong>Season : </strong>{{ $data->season }}</li>
                <li><strong>Year : </strong>{{ $data->year }}</li>
                <li><strong>Studio : </strong>{{ $data->studio }}</li>
                <li><strong>Genre : </strong>{{ $data->genre }}</li>
                <li><strong>Rating : </strong>{{ $data->rating }}</li>
            </ul>
        </div>
        <div class="col-lg-8">
            <div class="description">
                <h5 class="border-bottom">Description</h5>
                <p style="text-align: justify">{{ $data->desc }}</p>
            </div>
            <div class="video mt-4">
                <h5 class="border-bottom">Promotion Video</h5>
                <iframe width="600" height="400"
                    src="https://www.youtube.com/embed/{{ $video->items[0]->id->videoId }}" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
