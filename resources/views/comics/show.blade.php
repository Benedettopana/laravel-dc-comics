
@extends('layout.main')

@section('content')

<h1>comics</h1>

<div class="container-xl">
    <div class="row justify-content-center align-content-center ">
            <div class=" d-flex justify-content-between ">
                <img src="{{ $comic->thumb }}" class="card-img-top me-5 " alt="{{ $comic->title }}">
                <div class="">
                    <h3 class="card-title mb-3 ">{{ $comic->title }}</h3>
                    <p class="card-text">{{ $comic->description }}</p>
                    <p class="card-title"> {{ $comic->series }}</p>
                    <p class="card-title"> {{ $comic->sale_date }}</p>
                    <p class="card-title"> {{ $comic->type }}</p>
                    <p class="card-title"> Artists: {{ $comic->artists }}</p>
                    <p class="card-title"> Writers: {{ $comic->writers }}</p>
                    <p class="text-primary my-3 "> {{ $comic->price }}</p>
                </div>
            </div>

    </div>
</div>

@endsection
