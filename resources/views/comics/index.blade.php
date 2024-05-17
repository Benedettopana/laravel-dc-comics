@extends('layout.main')

@section('content')

<h1>comics</h1>

<div class="container-xl">
    @if (session('deleted'))
    <div class="alert alert-info my-5 " role="alert">
        {{ session('deleted')}}
    </div>

    @endif
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
                    <p class="card-title"> Artists: {{ $comic->artists }}</p>
                    <p class="card-title"> Writers: {{ $comic->writers }}</p>
                    <p class="text-primary"> {{ $comic->price }}</p>
                    <div class="d-flex justify-content-center  ">
                    {{-- More info --}}
                    <a href="{{ route('comics.show', $comic)}}" class="btn btn-warning me-1">More info</a>

                    {{--? Edit --}}
                    <a href="{{ route('comics.edit', $comic)}}" class="btn btn-success me-1"><i class="fa-solid fa-pen"></i></a>
                    {{--! delete --}}
                    <form action="{{ route('comics.destroy', $comic) }} metho" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
