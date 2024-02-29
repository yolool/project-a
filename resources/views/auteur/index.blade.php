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
            <h1>les Auteurs</h1>
            <a href="{{ route('auteur.create') }}" class="btn btn-primary">Ajouter</a>

            <table class="table table-hover">
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Action</th>
                </tr>
                @foreach ($auteurs as $auteur)
                    <tr>
                        <td>{{ $auteur->nom }}</td>
                        <td>{{ $auteur->prenom }}</td>
                        <td>
                            <a href="{{ route('auteur.edit', $auteur->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('auteur.destroy', $auteur->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $auteurs->links() }}
        </div>
    @endsection
</body>

</html>
