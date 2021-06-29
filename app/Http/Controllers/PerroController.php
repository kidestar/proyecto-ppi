<?php

namespace App\Http\Controllers;

use App\Models\Perro;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PerroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perros = Perro::all();
        return view('perro.perroIndex', compact('perros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perro.perroForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Perro::create($request->all());
        return redirect()->route('perro.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perro  $perro
     * @return \Illuminate\Http\Response
     */
    public function show(Perro $perro)
    {
        //
        return view('perro.perroShow', compact('perro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perro  $perro
     * @return \Illuminate\Http\Response
     */
    public function edit(Perro $perro)
    {
        //
        return view('perro.perroForm', compact('perro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perro  $perro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perro $perro)
    {
        //
        Perro::where('id', $perro->id)->update($request->except('_token', '_method'));

        return redirect()->route('perro.show', $perro);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perro  $perro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perro $perro)
    {
        $perro->delete();
        return redirect()->route('perro.index');
    }
}
