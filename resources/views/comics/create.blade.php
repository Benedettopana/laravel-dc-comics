@extends('layout.main')

@section('content')

<div class="container-xl my-5">
    <form action="{{ route('comics.store')}}" method="POST">
        @csrf
        <div class="row row-cols-2 ">
            <div class="col ">
                {{--? Titolo --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Aggiungi il titolo</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                {{--? /Titolo --}}
            </div>
            <div class="col ">
                {{--? Descrizione --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Aggiungi la descrizione</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                {{--? /Descrizione --}}
            </div>
            <div class="col ">
                {{--? img --}}
                <div class="mb-3">
                    <label for="thumb" class="form-label">Aggiungi la thumb</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                {{--? /img --}}
            </div>
            <div class="col ">
                {{--? Prezzo --}}
                <div class="mb-3">
                    <label for="price" class="form-label">Aggiungi il prezzo</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                {{--? /Prezzo --}}
            </div>
            <div class="col ">
                {{--? series --}}
                <div class="mb-3">
                    <label for="series" class="form-label">Aggiungi la serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                {{--? /series --}}
            </div>
            <div class="col ">
                {{--? sale_date --}}
                <div class="mb-3">
                    <label for="sale_date" class="form-label">Aggiungi la data</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>
                {{--? /sale_date --}}
            </div>
            <div class="col ">
                {{--? type --}}
                <div class="mb-3">
                    <label for="type" class="form-label">Aggiungi il tipo</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>
                {{--? /type --}}
            </div>
            <div class="col ">
                {{--? artists --}}
                <div class="mb-3">
                    <label for="artists" class="form-label">Aggiungi gli artisti</label>
                    <input type="text" class="form-control" id="artists" name="artists">
                </div>
                {{--? /artists --}}
            </div>
            <div class="col ">
                {{--? writers --}}
                <div class="mb-3">
                    <label for="writers" class="form-label">Aggiungi gli scrittori</label>
                    <input type="text" class="form-control" id="writers" name="writers">
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
