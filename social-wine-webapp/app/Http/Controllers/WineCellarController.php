<?php

namespace App\Http\Controllers;

use App\Models\WineCellar;
use Illuminate\Http\Request;

class WineCellarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wineCellar = WineCellar::all();
        return response(view('wineCellar.index', compact('wineCellar')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(view('wineCellar.create'));
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
            'born',
            'description',
            'email',
            'password',
            'phone',
            'vat' => 'required | min:9 | max:19',
            'address',
            'city',
            'country',
            'image_path'
        ]);

        WineCellar::create($request -> all());

        return redirect() -> route('wineCellar.index')
                          -> with ('suiccess', 'Cantina inserita con successo.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WineCellar  $wineCellar
     * @return \Illuminate\Http\Response
     */
    public function show(WineCellar $wineCellar)
    {
        $wineCellar = WineCellar::findOrFail($wineCellar);
        return response(view('wineCellar.show', compact('wineCellar')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WineCellar  $wineCellar
     * @return \Illuminate\Http\Response
     */
    public function edit(WineCellar $wineCellar)
    {
        $wineCellar = WineCellar::findOrFail($wineCellar);
        return response(view('wineCellar.edit', compact('wineCellar')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WineCellar  $wineCellar
     * 
     */
    public function update(Request $request, WineCellar $wineCellar)
    {
        $request -> validate ([
            'name',
            'born',
            'description',
            'email',
            'password',
            'phone',
            'vat' => 'required | min:9 | max:19',
            'address',
            'city',
            'country',
            'image_path'
        ]);

        $wineCellar = WineCellar::findOrFail($wineCellar);
        $wineCellar -> update($request -> all());

        return redirect() -> route ('wineCellar.index')
                          -> with ('success', 'Cantina modificata con successo.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WineCellar  $wineCellar
     * 
     */
    public function destroy(WineCellar $wineCellar)
    {
        $wineCellar = WineCellar::findOrFail($wineCellar);
        $wineCellar -> delete();

        return redirect() -> route('wineCellar.index')
                          -> with ('success', 'Cantina eliminata con successo.');
    }
}
