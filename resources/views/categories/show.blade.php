@extends('layouts.base')

@section('content')
    <h1>{{ $category->name }}</h1>

    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
        @foreach ($category->movies as $movie)
            @include('partials.movie')
        @endforeach
    </div>
@endsection