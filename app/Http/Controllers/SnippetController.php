<?php

namespace App\Http\Controllers;

use App\Http\Requests\SnippetRequest;
use App\Models\Snippet;
use App\Models\Technologies;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SnippetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Inertia::render('Snippets/Index', [
            'snippets' => Snippet::with('user:id,name,email')->latest()->get(),//Llama a los snippets con la relacion que tengan con usuario y los campos deseados
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Snippets/Create', [
            'technologies' => Technologies::all()->sortBy('name'),
            
            // //ESTO ES PARA PODER PASAR EN EL FORMATO CORRECTO LOS DATOS AL MULTIAUTOCOMPLETE DE MaterialUI
            // //Uso el toArray para convertir de coleccion de Laravel a un arreglo normal y el array_values para dejar un arreglo con solo los valores del array asociativo
            // 'technologies' => array_values(Technologies::all()->sortBy('name')->toArray()),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SnippetRequest $request)
    {
        $data = $request->validated();

        $request->user()->snippets()->create($data);

        return redirect(route('snippets.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function show(Snippet $snippet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function edit(Snippet $snippet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Snippet $snippet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Snippet  $snippet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Snippet $snippet)
    {
        //
    }
}
