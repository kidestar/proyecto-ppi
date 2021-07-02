<?php

namespace App\Http\Controllers;

use App\Models\Voluntario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VoluntarioController extends Controller
{
    private $rules;

    public function __construct()
    {
        $this->rules = [
        'Nombre' => ['required','max:255'],
        'Apellidos' => ['required','string','max:255'],
        'FechaNacimiento' => ['required','date',],

        ]; 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voluntarios = Voluntario::all();
        return view('voluntario.voluntarioIndex', compact('voluntarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('voluntario.voluntarioForm');
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
        Voluntario::create($request->all());
        return redirect()->route('voluntario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Voluntario  $voluntario
     * @return \Illuminate\Http\Response
     */
    public function show(Voluntario $voluntario)
    {
        return view('voluntario.voluntarioShow', compact('voluntario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voluntario  $voluntario
     * @return \Illuminate\Http\Response
     */
    public function edit(Voluntario $voluntario)
    {
        return view('voluntario.voluntarioForm', compact('voluntario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voluntario  $voluntario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voluntario $voluntario)
    {
        $request->validate($this->rules);
        
        Voluntario::where('id', $voluntario->id)->update($request->except('_token', '_method'));

        return redirect()->route('voluntario.show', $voluntario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Voluntario  $voluntario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voluntario $voluntario)
    {
        $voluntario->delete();
        return redirect()->route('voluntario.index');
    }
}
