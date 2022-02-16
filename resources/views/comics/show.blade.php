@extends('layouts.app')

@section('main_content')
<div class="wrapper">
    <div class="container-fluid">
        <div class="card">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
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
            </div>
        </div>
    </div>
</div>
@endsection