<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ajouter un Emprunt - Your Website</title>
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
        <h1 class="mb-4">Ajouter un Emprunt</h1>
        <form action="{{ route('emprunt.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="livre_id" class="form-label">Livre :</label>
                <select name="livre_id" id="livre_id" class="form-select">
                    @foreach ($livres as $livre)
                        <option value="{{ $livre->id }}">{{ $livre->titre }}</option>
                    @endforeach
                </select>
                @error('livre_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date_emprunt" class="form-label">Date d'emprunt :</label>
                <input type="date" name="date_emprunt" value="{{ now()->toDateString() }}" id="date_emprunt"
                    class="form-control">
                @error('date_emprunt')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date_retour" class="form-label">Date de retour :</label>
                <input type="date" name="date_retour" id="date_retour" class="form-control">
                @error('date_retour')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Ajouter Emprunt</button>
        </form>
    </div>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
</body>

</html>
