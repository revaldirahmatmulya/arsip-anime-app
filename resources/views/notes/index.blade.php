@extends('layouts.index')
@section('content')
    <div class="row d-flex justify-content-around">
        <a href="{{ url('notes/create') }}" class="btn btn-primary">Add Notes</a>
        @foreach ($data as $item)
            <div class="col-lg-5 mt-4 border anime-card">
                <div class="title-box border-bottom p-3">
                    <a href="notes/{{ $item->id }}/show" style="text-decoration: none">
                        <p class="text-center title-card">{{ $item->title }}</p>
                    </a>
                </div>

                <div class="notes-button-group d-flex justify-content-around p-4">
                    <a href="/notes/{{ $item->id }}/show" class="btn btn-outline-primary">See</a>
                    <a href="/notes/{{ $item->id }}/edit" class="btn btn-outline-success">Edit</a>
                    <a href="/notes/{{ $item->id }}/delete" class="btn btn-outline-danger">Delete</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
