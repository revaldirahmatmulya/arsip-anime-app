@extends('layouts.index')
@section('content')
    <div class="row d-flex justify-content-around">
        @foreach ($data as $item)
            @if (request()->is('home/winter') ||
                request()->is('home/summer') ||
                request()->is('home/spring') ||
                request()->is('home/fall'))
                @if ((request()->is('home/winter') && $item->season == 'Winter') ||
                    (request()->is('home/summer') && $item->season == 'Summer') ||
                    (request()->is('home/spring') && $item->season == 'Spring') ||
                    (request()->is('home/fall') && $item->season == 'Fall'))
                    <div class="col-lg-5 mt-4 border anime-card">
                        <div class="title-box border-bottom p-3">
                            <a href="/detail/{{ $item->id }}/{{ Str::slug($item->title) }}" style="text-decoration: none"
                                class="title-clicked" data-id="{{ $item->title }}">
                                <p class="text-center title-card">{{ $item->title }}</p>
                            </a>
                        </div>

                        <div class="row mt-2">
                            <div class="col-lg-6 text-center">
                                <img src="{{ $item->image }}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <ul style="list-style: none" class="list-info">
                                    <li><strong>Season : </strong>{{ $item->season }}</li>
                                    <li><strong>Year : </strong>{{ $item->year }}</li>
                                    <li><strong>Studio : </strong>{{ $item->studio }}</li>
                                    <li><strong>Genre : </strong>{{ $item->genre }}</li>
                                    <li><strong>Rating : </strong>{{ $item->rating }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
            {{-- @elseif (request()->is('home/summer'))
            @if ($item->season == 'Summer')
                <div class="col-lg-5 mt-4 border anime-card">
                    <div class="title-box border-bottom p-3">
                        <a href="/detail/{{ $item->id }}" style="text-decoration: none" class="title-clicked"
                            data-id="{{ $item->title }}">
                            <p class="text-center title-card">{{ $item->title }}</p>
                        </a>
                    </div>

                    <div class="row mt-2">
                        <div class="col-lg-6 text-center">
                            <img src="{{ $item->image }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <ul style="list-style: none" class="list-info">
                                <li><strong>Season : </strong>{{ $item->season }}</li>
                                <li><strong>Year : </strong>{{ $item->year }}</li>
                                <li><strong>Studio : </strong>{{ $item->studio }}</li>
                                <li><strong>Genre : </strong>{{ $item->genre }}</li>
                                <li><strong>Rating : </strong>{{ $item->rating }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        @elseif (request()->is('home/spring'))
            @if ($item->season == 'Winter')
                <div class="col-lg-5 mt-4 border anime-card">
                    <div class="title-box border-bottom p-3">
                        <a href="/detail/{{ $item->id }}" style="text-decoration: none" class="title-clicked"
                            data-id="{{ $item->title }}">
                            <p class="text-center title-card">{{ $item->title }}</p>
                        </a>
                    </div>

                    <div class="row mt-2">
                        <div class="col-lg-6 text-center">
                            <img src="{{ $item->image }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <ul style="list-style: none" class="list-info">
                                <li><strong>Season : </strong>{{ $item->season }}</li>
                                <li><strong>Year : </strong>{{ $item->year }}</li>
                                <li><strong>Studio : </strong>{{ $item->studio }}</li>
                                <li><strong>Genre : </strong>{{ $item->genre }}</li>
                                <li><strong>Rating : </strong>{{ $item->rating }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        @elseif (request()->is('home/fall'))
            @if ($item->season == 'Fall')
                <div class="col-lg-5 mt-4 border anime-card">
                    <div class="title-box border-bottom p-3">
                        <a href="/detail/{{ $item->id }}" style="text-decoration: none" class="title-clicked"
                            data-id="{{ $item->title }}">
                            <p class="text-center title-card">{{ $item->title }}</p>
                        </a>
                    </div>

                    <div class="row mt-2">
                        <div class="col-lg-6 text-center">
                            <img src="{{ $item->image }}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <ul style="list-style: none" class="list-info">
                                <li><strong>Season : </strong>{{ $item->season }}</li>
                                <li><strong>Year : </strong>{{ $item->year }}</li>
                                <li><strong>Studio : </strong>{{ $item->studio }}</li>
                                <li><strong>Genre : </strong>{{ $item->genre }}</li>
                                <li><strong>Rating : </strong>{{ $item->rating }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        @endif --}}
        @endforeach


    </div>
@endsection
