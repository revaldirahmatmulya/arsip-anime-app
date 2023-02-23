@extends('layouts.index')

@section('content')
    <h5 class="border-bottom">Add Notes</h5>

    <form action="{{ url('notes/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" />
        </div>
        <div class="mb-3">
            <label class="form-label">Anime's Title</label>
            <select name="anime" id="" class="form-select">
                @foreach ($data as $item)
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Notes </label>

            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize: none" name="notes"></textarea>
        </div>



        <div class="mb-3 form-check"></div>
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </form>
@endsection
