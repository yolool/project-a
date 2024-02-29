<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modifier un Livre {{$livre->id}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="container mt-5">

    <div>
        <h1>Modifier un Livre {{$livre->id}}</h1>
        <form action="{{ route('livre.update',  $livre['id'] ) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $livre->id }}">

            <div class="mb-3">
                <label for="titre" class="form-label">Titre :</label>
                <input type="text" class="form-control" id="titre" name="titre" value="{{ $livre->titre }}">
                @error('titre')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="date_de_publication" class="form-label">Date de publication :</label>
                <input type="text" class="form-control" id="date_de_publication" name="date_de_publication"
                    value="{{ $livre->date_de_publication }}">
                @error('date_de_publication')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="nombre_de_pages" class="form-label">Nombre de pages :</label>
                <input type="text" class="form-control" id="nombre_de_pages" name="nombre_de_pages"
                    value="{{ $livre->nombre_de_pages }}">
                @error('nombre_de_pages')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="auteur_id" class="form-label">Auteur :</label>
                <select class="form-select" id="auteur_id" name="auteur_id">
                    @foreach ($auteurs as $auteur)
                        <option value="{{ $auteur->id }}" @if ($livre->auteur_id == $auteur->id) selected @endif>
                            {{ $auteur->nom }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
</body>

</html>
