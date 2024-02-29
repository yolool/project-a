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
    <h1>Modifier les livres</h1>
        <form action="{{ route('emprunt.update', $emprunt['id']) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Livre :</label>
            <select name="livre_id" class="form-control">
                @foreach ($livres as $livre)
                    <option value="{{ $livre->id }}" @if ($emprunt->livre_id == $livre->id) selected @endif>
                        {{ $livre->titre }}</option>
                @endforeach
            </select><br>
            @error('livre_id')
                <p style="color: red">{{ $message }}</p>
            @enderror
            <label>Date d'emprunt :</label>
            <input type="date" name="date_emprunt" value="{{ $emprunt->date_emprunt }}" class="form-control"><br>
            @error('date_emprunt')
                <p style="color: red">{{ $message }}</p>
            @enderror
            <label>Date de retour :</label>
            <input type="date" name="date_retour" value="{{ $emprunt->date_retour }}" class="form-control"><br>
            @error('date_retour')
                <p style="color: red">{{ $message }}</p>
            @enderror
            <button type="submit" class="btn btn-primary">Modifier Emprunt</button>
        </form>
    @endsection
</body>

</html>
