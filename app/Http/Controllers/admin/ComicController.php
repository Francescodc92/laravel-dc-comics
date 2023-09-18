<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//models
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'title'=> 'required|max:64',
            'description'=> 'nullable',
            'thumb'=> 'nullable|max:2048',
            'price'=> 'required|decimal:0,2|min:0.01|max:100',
            'series'=> 'required|max:100',
            'sale_date' => 'required|date',
            'type'=> 'required|max:100',
            'artists' => 'required',
            'writers' => 'required',
        ], [
            'title.required'=> 'il titolo è obbligatorio',
            'title.max'=> 'il titolo non può essere più lungo di 64 caratteri spazi compresi',
            'thumb.max'=> 'il link dell\'immagine  non può essere più lungo di 2048 caratteri spazi compresi',
            'price.required'=> 'il prezzo è obbligatorio',
            'price.decimal'=> 'il prezzo può avere un massimo di 2 cifre decimali',
            'price.min'=> 'il prezzo non può essere minore di 0.01€',
            'price.max'=> 'il prezzo non può essere maggiore di 100€',
            'series.required'=> 'la serie è obbligatoria',
            'series.max'=> 'la serie non può avere più di 100 caratteri spazi compresi',
            'sale_date.required'=> 'la data di vendita è obbligatoria',
            'sale_date.date'=> 'la data deve essere un valore valido (es 18/09/2023)',
            'type.required'=> 'il tipo del comic è obbligatorio',
            'type.max'=> 'il tipo del comic può contenere un massimo di 100 caratteri spazi inclusi',
            'artists.required'=> 'gli artisti sono obbligatori',
            'writers.required'=> 'gli scrittori sono obbligatori',
        ]);


        $comic = Comic::create($formData);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $formData = $request->validate([
            'title'=> 'required|max:64',
            'description'=> 'nullable',
            'thumb'=> 'nullable|max:2048',
            'price'=> 'required|decimal:0,2|min:0.01|max:100',
            'series'=> 'required|max:100',
            'sale_date' => 'required|date',
            'type'=> 'required|max:100',
            'artists' => 'required',
            'writers' => 'required',
        ],[
            'title.required'=> 'il titolo è obbligatorio',
            'title.max'=> 'il titolo non può essere più lungo di 64 caratteri spazi compresi',
            'thumb.max'=> 'il link dell\'immagine  non può essere più lungo di 2048 caratteri spazi compresi',
            'price.required'=> 'il prezzo è obbligatorio',
            'price.decimal'=> 'il prezzo può avere un massimo di 2 cifre decimali',
            'price.min'=> 'il prezzo non può essere minore di 0.01€',
            'price.max'=> 'il prezzo non può essere maggiore di 100€',
            'series.required'=> 'la serie è obbligatoria',
            'series.max'=> 'la serie non può avere più di 100 caratteri spazi compresi',
            'sale_date.required'=> 'la data di vendita è obbligatoria',
            'sale_date.date'=> 'la data deve essere un valore valido (es 18/09/2023)',
            'type.required'=> 'il tipo del comic è obbligatorio',
            'type.max'=> 'il tipo del comic può contenere un massimo di 100 caratteri spazi inclusi',
            'artists.required'=> 'gli artisti sono obbligatori',
            'writers.required'=> 'gli scrittori sono obbligatori',
        ]);

        $comic->update($formData);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
