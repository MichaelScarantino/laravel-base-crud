@extends('layouts.app')

@section('main_content')
    <div class="container">
        <h2>Comics List</h2>

        @foreach ($comics as $comic)
            <h3>
                <a href="#">{{ $comic->title }}</a>
            </h3>
            <div>
                {{ $comic->series }}
            </div>
            <div>
                {{ $comic->type }}
            </div>
        @endforeach
    </div>
@endsection