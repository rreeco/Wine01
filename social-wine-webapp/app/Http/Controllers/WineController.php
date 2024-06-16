<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wine = Wine::all();
        return response(view('wine.index', compact('wine')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(view('wine.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        $request -> validate ([
            'name',
            'uvaggio',
            'annata',
            'descrizione',
            'categoria',
            'storia',
            'image_path',
            'prezzo',
            'listino',
            'cantina_id',
        ]);

        Wine::create($request -> all());

        return redirect() -> route('wine.index')
                          -> with ('success', 'Vino inserito con successo.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function show(Wine $wine)
    {
        $wine = Wine::findOrFail($wine);
        return response(view('wine.show', compact('wine')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wine  $wine
     * @return \Illuminate\Http\Response
     */
    public function edit(Wine $wine)
    {
        $wine = Wine::findOrFail($wine);
        return response(view('wine.edit', compact('wine')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wine  $wine
     * 
     */
    public function update(Request $request, Wine $wine)
    {
        $request -> validate ([
            'name',
            'uvaggio',
            'annata',
            'descrizione',
            'categoria',
            'storia',
            'image_path',
            'prezzo',
            'listino',
            'cantina_id',
        ]);

        $wine = Wine::findrOrFail($wine);
        $wine -> update($request -> all());

        return redirect() -> route ('wine.index')
                          -> with ('success', 'Vino modificato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wine  $wine
     * 
     */
    public function destroy(Wine $wine)
    {
        $wine = Wine::findOrFail($wine);
        $wine -> delete();

        return redirect() -> route('wine.index')
                          -> with ('success', 'Vino eliminato con successo.');
    }
}
