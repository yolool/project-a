<?php

namespace App\Http\Controllers;

use App\Models\Auteur;
use Illuminate\Http\Request;

class AuteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auteurs = Auteur::paginate(10);
        return view('auteur.index', compact('auteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('auteur.create');

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
        $fromsfildes=$request->validate([
            'nom'=>'required',
            'prenom'=>'required',
        ])
;
      Auteur::create(

        $fromsfildes
      );

        return redirect()->route('auteur.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Auteur $auteur)
    {
        //
        return view('auteur.show', compact('auteur'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Auteur $auteur)
    {
        return view('auteur.edit', compact('auteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Auteur $auteur)
    {
        $validatedData = $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
        ]);

        $auteur->update($validatedData);

        return redirect()->route('auteur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auteur $auteur)
    {
        $auteur->delete();
        return redirect()->route('auteur.index');
    }
}
