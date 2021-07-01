<?php

namespace App\Http\Controllers;

use App\Models\Refugio;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RefugioController extends Controller
{

    
    private $rules;

    public function __construct()
    {
        $this->rules = [
        'Direccion' => ['required','max:255'],
        'CantidadPerros' => ['required','integer',],
        'perro_id' => ['required','integer','min:1']
        ]; 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refugios = Refugio::all();
        return view('refugio.refugioIndex', compact('refugios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('refugio.refugioForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules);
        Refugio::create($request->all());
        return redirect()->route('refugio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Refugio  $refugio
     * @return \Illuminate\Http\Response
     */
    public function show(Refugio $refugio)
    {
        return view('refugio.refugioShow', compact('refugio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Refugio  $refugio
     * @return \Illuminate\Http\Response
     */
    public function edit(Refugio $refugio)
    {
        return view('refugio.refugioForm', compact('refugio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Refugio  $refugio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refugio $refugio)
    {
        $request->validate($this->rules);
        Refugio::where('id', $refugio->id)->update($request->except('_token', '_method'));

        return redirect()->route('refugio.show', $refugio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Refugio  $refugio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refugio $refugio)
    {
        $refugio->delete();
        return redirect()->route('refugio.index');
    }
}
