<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        return response(view('supplier.index', compact ('supplier')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(view('supplier.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * //@return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate ([
            'name',
            'born',
            'email',
            'password',
            'phone',
            'vat',
            'city',
            'country',
            'address',
            'postal_code',
            'description',
            'image_path',
        ]);

        Supplier::create($request -> all());

        return redirect() -> route('supplier.index')
                          -> with ('success', 'Fornitore inserito con successo.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        $supplier = Supplier::findOrFail($supplier);
        return response(view('supplier.show', compact('supplier')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        $supplier = Supplier::findOrFail($supplier);
        return response(view('supplier.edit', compact('supplier')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * //@return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request -> validate([
            'name',
            'born',
            'email',
            'password',
            'phone',
            'vat',
            'city',
            'country',
            'address',
            'postal_code',
            'description',
            'image_path'
        ]);

        $supplier = Supplier::findOrFail($supplier);
        $supplier -> update($request -> all());

        return redirect() -> route('supplier.index')
                          -> with ('success', 'Fornitore aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy(Supplier $supplier)
    {
        $supplier = Supplier::findOrFail($supplier);
        $supplier -> delete();

        return redirect() -> route('supplier.index')
                          -> with ('success', 'Fornitore eliminato con successo.');
    }
}
