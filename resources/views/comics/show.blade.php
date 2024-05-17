
@extends('layout.main')

@section('content')

<h1>comics</h1>

<div class="container-xl">
    <div class="row justify-content-center align-content-center ">
            <div class=" d-flex justify-content-between ">
                <img src="{{ $comic->thumb }}" class="card-img-top me-5 w-100" alt="{{ $comic->title }}">
                <div class="w-50">
                    <h3 class="card-title mb-3 ">{{ $comic->title }}</h3>
                    <p class="card-text">{{ $comic->description }}</p>
                    <p class="card-title"> {{ $comic->series }}</p>
                    <p class="card-title"> {{ $comic->sale_date }}</p>
                    <p class="card-title"> {{ $comic->type }}</p>
                    {{-- <p class="card-title"> Artists: {{ $comic->artists }}</p> --}}
                    {{-- <p class="card-title"> Writers: {{ $comic->writers }}</p> --}}

                    @php
                        $artist_arr = explode(',', $comic->artists);
                        $writers_arr = explode(',', $comic->writers);
                    @endphp
                    <div class="row">
                        <div class="col-6">
                            <p class="card-title">
                                Artists:
                                <ul>
                                    @foreach ($artist_arr as $artist)
                                        <li>{{ $artist }}</li>
                                    @endforeach
                                </ul>
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="card-title">
                                Writers:
                                <ul>
                                    @foreach ($writers_arr as $writers)
                                        <li>{{ $writers }}</li>
                                    @endforeach
                                </ul>
                            </p>
                        </div>
                    </div>


                    <p class="text-primary my-3 "> {{ $comic->price }}</p>
                </div>
            </div>

    </div>
</div>

@endsection
