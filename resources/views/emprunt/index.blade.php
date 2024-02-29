<!DOCTYPE html>
<html lang="en">

<head>
    <title>Les Emprunts - Your Website</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    @extends('layouts.master')

    @extends('partes.navbar')
    @section('main')
        <div class="container mt-5">
            <h1 class="mb-4">Les Emprunts</h1>
            <a href="{{ route('emprunt.create') }}" class="btn btn-primary mb-3">Ajouter</a>

            <form action="{{ route('emprunt.index') }}" method="GET" class="mb-3">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="start_date" class="form-label">Date de début :</label>
                        <input type="date" name="start_date" id="start_date" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="end_date" class="form-label">Date de fin :</label>
                        <input type="date" name="end_date" id="end_date" class="form-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-success mt-2">Rechercher</button>
            </form>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Date d'emprunt</th>
                            <th>Date de retour</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emprunts as $emprunt)
                            <tr>
                                <td>{{ $emprunt->livre->titre }}</td>
                                <td>{{ $emprunt->livre->auteur->nom }} {{ $emprunt->livre->auteur->prenom }}</td>
                                <td>{{ $emprunt->date_emprunt }}</td>
                                <td>{{ $emprunt->date_retour }}</td>
                                <td>
                                    <a href="{{ route('emprunt.edit', $emprunt->id) }}"
                                        class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('emprunt.destroy', $emprunt->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center">
                {{ $emprunts->links() }}
            </div>
        </div>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
</body>

</html>
