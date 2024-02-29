<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
{
    // Assuming you have a Livre model, adjust this according to your actual model and data retrieval logic
    $livres = \App\Models\Livre::all(); 

    return view('livre.index', compact('livres'));
}

}
