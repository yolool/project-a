<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapport PDF</title>
</head>
<body>
    <h1>Liste des Livres</h1>
    <p>Date de Génération: {{ $date_generation }}</p>

    <table border="1" >
        <thead>
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Nombre de Pages</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livres as $livre)
                <tr>
                    <td>{{ $livre->titre }}</td>
                    <td>
                        @if ($livre->auteur)
                            {{ $livre->auteur->nom }} {{ $livre->auteur->prenom }}
                        @else
                            Auteur non spécifié
                        @endif
                    </td>
                    <td>{{ $livre->nombre_de_pages }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
