<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use App\Models\Livre;
use Illuminate\Http\Request;

class EmpruntController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // $emprunts = Emprunt::paginate(5);
        // return view('emprunt.index', compact('emprunts'));
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $emprunts = Emprunt::whereBetween('date_emprunt', [$start_date, $end_date])->paginate(5);

        return view('emprunt.index', compact('emprunts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $livres=Livre::all();
        return view('emprunt.create',compact('livres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fromsfildes=$request->validate([
            'livre_id'=>'required',
            'date_emprunt'=>'required',
            'date_retour'=>'required',

        ])
;
      Emprunt::create(

        $fromsfildes
      );

        return redirect()->route('emprunt.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Emprunt $emprunt)
    {
        return view('emprunt.show', compact('emprunt'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Emprunt $emprunt)
    {
        $livres=Livre::all();
        return view('emprunt.edit', compact('emprunt','livres'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Emprunt $emprunt)
    {
        $validatedData = $request->validate([
            'livre_id'=>'required',
            'date_emprunt'=>'required',
            'date_retour'=>'required',
        ]);

        $emprunt->update($validatedData);

        return redirect()->route('emprunt.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emprunt $emprunt)
    {
        $emprunt->delete();
        return redirect()->route('emprunt.index');
    }
    



    
     public function search(Request $request)
     {
     $start_date = $request->input('start_date');
     $end_date = $request->input('end_date');

     $emprunts = Emprunt::whereBetween('date_emprunt', [$start_date, $end_date])->paginate(5);

     return view('emprunt.index', compact('emprunts'));
    }

}
