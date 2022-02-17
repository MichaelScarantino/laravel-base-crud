@extends('layouts.app')

@section('main_content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card align-items-center text-center">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <div>
                    Series: {{ $comic->series }}
                </div>
                <div>
                    Type: {{ $comic->type }}
                </div>
                <div>
                    Price: {{ $comic->price }}
                </div>
                <div>
                    Sale date: {{ $comic->sale_date }}
                </div>
                <div>
                    <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit</a>
                </div>
                <div>
                    <form action="{{ route('comics.destroy', [ 'comic' => $comic->id] ) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection