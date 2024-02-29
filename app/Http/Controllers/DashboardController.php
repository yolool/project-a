<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Livre; // Assurez-vous d'importer le modèle Livre ou le modèle approprié

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function generatePDF()
    {
        // Logique pour récupérer les données à inclure dans le PDF
        $livres = Livre::all(); // Récupérez tous les livres, par exemple

        $data = [
            'livres' => $livres,
            'date_generation' => now()->format('d/m/Y'), // Ajoutez la date de génération du PDF
        ];

        // Chargez la vue du PDF avec les données
        $pdf = PDF::loadView('dashboard.pdf', $data);

        // Retournez le PDF pour affichage ou téléchargement
        return $pdf->stream('rapport.pdf');
    }
}
