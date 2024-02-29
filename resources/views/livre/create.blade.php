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
            <h1>Ajouter un Livre</h1>
            <form action="{{ route('livre.store') }}" method="POST">
                @csrf
                titre<input class="form-control" type="text" name="titre"><br>
                @error('titre')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                date_de_publication<input class="form-control" type="date" name="date_de_publication"><br>
                @error('date_de_publication')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                nombre_de_pages :<input class="form-control" type="text" name="nombre_de_pages"><br>
                @error('nombre_de_pages')
                    <p style="color: red">{{ $message }}</p>
                @enderror


                
                <label for="auteur_id">Auteur</label>
    <select class="form-control" name="auteur_id" id="auteur_id">
        @foreach ($auteurs as $auteur)
            <option value="{{ $auteur->id }}">{{ $auteur->nom }}</option>
        @endforeach
    </select>


                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    @endsection
</body>

</html>
