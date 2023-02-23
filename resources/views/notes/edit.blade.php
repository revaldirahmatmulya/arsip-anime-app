@extends('layouts.index')

@section('content')
    <h5 class="border-bottom">Edit Notes</h5>

    <form action="{{ url('notes/' . $data->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $data->title }}" />
        </div>
        <div class="mb-3">
            <label class="form-label">Anime's Title</label>
            <select name="anime" id="" class="form-select">
                @foreach ($data2 as $item)
                    <option value="{{ $item->id }}" @if ($item->id == $data->titles_id) selected @endif>
                        {{ $item->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Notes </label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="resize: none" name="notes">{{ $data->notes }}</textarea>
        </div>



        <div class="mb-3 form-check"></div>
        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </form>
@endsection
