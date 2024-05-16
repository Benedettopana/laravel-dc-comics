@extends('layout.main')

@section('content')

<h1>comics</h1>

<div class="container-xl">
    <div class="row row-cols-3 ">
        @foreach ($comics as $comic)
        <div class="col ">
            <div class="card" style="width: 18rem;">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                    {{--? Titolo e descrizione --}}
                    <h5 class="card-title">{{ $comic->title }}</h5>
                    {{-- <p class="card-text">{{ $comic->description }}</p> --}}
                    <p class="card-title"> {{ $comic->series }}</p>
                    <p class="card-title"> {{ $comic->sale_date }}</p>
                    <p class="card-title"> {{ $comic->type }}</p>
                    <p class="card-title"> {{ $comic->artists }}</p>
                    <p class="card-title"> {{ $comic->writers }}</p>
                    <p class="text-primary"> {{ $comic->price }}</p>
                    <div class="d-flex justify-content-center ">

                        <a href="#" class="btn btn-warning">More info</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
