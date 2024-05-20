<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;
use App\Functions\Helper;
use App\Http\Requests\ComicRequest;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComicRequest $request)
    {

        $form_data = $request->all();
        $new_comic = new Comic();


            // $new_comic->title = $form_data['title'];
            // $new_comic->description = $form_data['description'];
            // $new_comic->thumb = $form_data['thumb'];
            // $new_comic->price = $form_data['price'];
            // $new_comic->series = $form_data['series'];
            // $new_comic->sale_date = $form_data['sale_date'];
            // $new_comic->type = $form_data['type'];
            // $new_comic->artists = $form_data['artists'];
            // $new_comic->writers = $form_data['writers'];

            $new_comic->fill($form_data);
            $new_comic->save();

            return redirect()->route('comics.show', $new_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComicRequest $request, Comic $comic)
    {
        $form_data = $request->all();
        $comic->update($form_data);
        // dd($comic);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted', 'Hai eliminato ' . $comic->titolo . ' con successo!');
    }
}
