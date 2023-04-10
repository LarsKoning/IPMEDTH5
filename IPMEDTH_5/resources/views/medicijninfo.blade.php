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
        <article class="home">
            <p>hier komt medicijninfo</P>
        </article>
        <article class="meds">
        @foreach ($medicijnen as $medicijn)
            <article class="medInfo">
                <h1>{{$medicijn->naam}}</h1>
                <p>{{$medicijn->dosis}}</p>
            </article>
        @endforeach
        </article>
        <script src="{{ asset('/js/index.js') }}"></script>
    </body>
</x-app-layout>