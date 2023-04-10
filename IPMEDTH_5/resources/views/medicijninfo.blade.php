<x-app-layout>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <title>Caroussel</title>
</head>
    <body class="dash">
        <p class="pilneem">Dit zijn de medicijnen die u neemt:</p>
        <article class="meds">
        @foreach ($medicijnen as $medicijn)
            <article class="medInfo">
                <h1 class="mednaam">{{$medicijn->naam}}</h1>
                <p class="meddosis">{{$medicijn->dosis}}</p>
            </article>
        @endforeach
        </article>
    </body>
</x-app-layout>