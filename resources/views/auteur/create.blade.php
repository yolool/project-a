<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    @extends('layouts.master')

    @extends('partes.navbar')
    @section('main')
        <div>
            <h1>Ajouter un Auteur</h1>
            <form action="{{ route('auteur.store') }}" method="POST">
                @csrf
                Nom<input class="form-control" type="text" name="nom"><br>
                @error('nom')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                Prenom<input class="form-control" type="text" name="prenom"><br>
                @error('prenom')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    @endsection
</body>

</html>
