<?php

namespace App\Http\Controllers;

use App\Events\livreEvent;
use App\Models\Auteur;
use App\Models\Livre;
use Illuminate\Http\Request;
use App\Models\LivreHistory;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livres = Livre::with('auteur')->paginate(10);
        return view('livre.index', compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auteurs = Auteur::all();
        return view('livre.create', compact('auteurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fromsfildes = $request->validate([
            'auteur_id' => 'required|numeric',
            'titre' => 'required|string',
            'date_de_publication' => 'required|date',
            "nombre_de_pages" => "required|numeric",
        ]);
        Livre::create($fromsfildes);
        return redirect()->route('livre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Livre $livre)
    {
        return view('livre.show', compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Livre $livre)
    {
        //
        $auteurs = Auteur::all();
        return view('livre.edit', compact('livre', 'auteurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livre $livre)
    {

        $validatedData = $request->validate([
            "auteur_id" => "required",
            'titre' => 'required',
            'date_de_publication' => 'required',
            "nombre_de_pages" => 'required|numeric',
        ]);
        $livre->update($validatedData);

        $livre = $livre->id;
        event(new livreEvent($livre, "le livre est Modifier "));


        return redirect()->route('livre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livre $livre)
    {
        $livre->delete();
        return redirect()->route('livre.index');
    }
}
