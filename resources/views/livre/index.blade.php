<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa; /* Couleur de fond */
            padding-top: 20px; /* Espace en haut de la page */
        }

        h1 {
            color: #343a40; /* Couleur du texte */
        }

        .btn-primary {
            background-color: #007bff; /* Couleur de fond du bouton */
            border-color: #007bff; /* Couleur de la bordure du bouton */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Couleur de fond du bouton au survol */
            border-color: #0056b3; /* Couleur de la bordure du bouton au survol */
        }

        .table {
            background-color: #fff; /* Couleur de fond du tableau */
            border-radius: 8px; /* Bordure arrondie */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Ombre */
        }

        .table th,
        .table td {
            border: none; /* Supprimer les bordures des cellules */
        }

        .table-hover tbody tr:hover {
            background-color: #f2f2f2; /* Couleur de fond au survol */
        }
    </style>
</head>

<body>
    @extends('layouts.master')

    @section('main')
        <div class="container">
            <h1>Les Livres</h1>
            <a href="{{ route('livre.create') }}" class="btn btn-primary">Ajouter</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Date de Publication</th>
                        <th>Nombre de Pages</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($livres as $livre)
                        <tr>
                            <td>{{ $livre->titre }}</td>
                            <td>{{ $livre->auteur->nom }} {{ $livre->auteur->prenom }}</td>
                            <td>{{ $livre->date_de_publication }}</td>
                            <td>{{ $livre->nombre_de_pages }}</td>
                            <td>
                                <a href="{{ route('livre.edit', $livre->id) }}" class="btn btn-primary">Edit</a>
                            </td>    
                                <td>
                                    <form action="{{ route('livre.destroy', $livre->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $livres->links() }} --}}
        </div>
    @endsection
</body>

</html>
