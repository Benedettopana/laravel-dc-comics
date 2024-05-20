@extends('layout.main')

@section('content')

<div class="container-xl my-5">
    {{-- !Alert --}}
    @if ($errors ->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- !/Alert --}}
    <form action="{{ route('comics.update', $comic)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row row-cols-2 ">
            <div class="col ">
                {{--? Titolo --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Aggiungi il titolo</label>
                    <input
                      type="text"
                      class="form-control @error('title')
                      is-invalid
                  @enderror"
                      id="title"
                      name="title"
                      value="{{$comic->title}}"
                    >
                    @error('title')
                        <small class="text-danger">
                            {{ $message}}
                        </small>
                    @enderror
                </div>
                {{--? /Titolo --}}
            </div>
            <div class="col ">
                {{--? Descrizione --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Aggiungi la descrizione</label>
                    <input
                      type="text"
                      class="form-control"
                      id="description"
                      name="description"
                      value="{{$comic->description}}"
                    >
                </div>
                {{--? /Descrizione --}}
            </div>
            <div class="col ">
                {{--? img --}}
                <div class="mb-3">
                    <label for="thumb" class="form-label">Aggiungi la thumb</label>
                    <input
                      type="text"
                      class="form-control"
                      id="thumb"
                      name="thumb"
                      value="{{$comic->thumb}}"
                    >
                </div>
                {{--? /img --}}
            </div>
            <div class="col ">
                {{--? Prezzo --}}
                <div class="mb-3">
                    <label for="price" class="form-label">Aggiungi il prezzo</label>
                    <input
                      type="text"
                      class="form-control @error('price')
                      is-invalid
                  @enderror"
                      id="price"
                      name="price"
                      value="{{$comic->price}}"
                    >
                    @error('price')
                        <small class="text-danger">
                            {{ $message}}
                        </small>
                    @enderror
                </div>
                {{--? /Prezzo --}}
            </div>
            <div class="col ">
                {{--? series --}}
                <div class="mb-3">
                    <label for="series" class="form-label">Aggiungi la serie</label>
                    <input
                      type="text"
                      class="form-control @error('series')
                      is-invalid
                  @enderror"
                      id="series"
                      name="series"
                      value="{{$comic->series}}"
                    >
                    @error('series')
                        <small class="text-danger">
                            {{ $message}}
                        </small>
                    @enderror
                </div>
                {{--? /series --}}
            </div>
            <div class="col ">
                {{--? sale_date --}}
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Aggiungi la data</label>
                    <input
                      type="text"
                      class="form-control @error('sale_date')
                      is-invalid
                  @enderror"
                      id="sale_date"
                      name="sale_date"
                      value="{{$comic->sale_date}}"
                    >
                    @error('sale_date')
                        <small class="text-danger">
                            {{ $message}}
                        </small>
                    @enderror
                </div>
                {{--? /sale_date --}}
            </div>
            <div class="col ">
                {{--? type --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Aggiungi il tipo</label>
                    <input
                      type="text"
                      class="form-control @error('type')
                      is-invalid
                  @enderror"
                      id="type"
                      name="type"
                      value="{{$comic->type}}"
                    >

                    @error('type')
                        <small class="text-danger">
                            {{ $message}}
                        </small>
                    @enderror
                </div>
                {{--? /type --}}
            </div>
            <div class="col ">
                {{--? artists --}}
                <div class="mb-3">
                    <label for="artists" class="form-label">Aggiungi gli artisti</label>
                    <input
                      type="text"
                      class="form-control"
                      id="artists"
                      name="artists"
                      value="{{$comic->artists}}"
                    >
                </div>
                {{--? /artists --}}
            </div>
            <div class="col ">
                {{--? writers --}}
                <div class="mb-3">
                    <label for="writers" class="form-label">Aggiungi gli scrittori</label>
                    <input
                      type="text"
                      class="form-control"
                      id="writers"
                      name="writers"
                      value="{{$comic->writers}}"
                    >
                </div>
                {{--? /writers --}}
            </div>

        </div>

        {{--? BTN Submit --}}
        <div class="d-flex justify-content-center ">
            <button type="submit" class="btn btn-primary m-2 ">Submit</button>
            <button type="reset" class="btn btn-danger m-2">Reset</button>
        </div>

    </form>
</div>

@endsection
