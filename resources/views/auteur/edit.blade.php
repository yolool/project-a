<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>

        <div>
            <h1>Modifier un auteur {{$auteur->id}}</h1>
            <form action="{{ route('auteur.update',  $auteur['id'] ) }}" method="POST">
                @csrf
                @method('PUT')

                <input type="hidden" name="id" value="{{ $auteur->id }}">

                <label>Nom :</label>
                <input class="form-control" type="text" name="nom" value="{{ $auteur->nom }}"><br>
                @error('nom')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <label>Prenom :</label>
                <input class="form-control" type="text" name="prenom" value="{{ $auteur->prenom }}"><br>
                @error('prenom')
                    <p style="color: red">{{ $message }}</p>
                @enderror

                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>

    </body>
</html>
