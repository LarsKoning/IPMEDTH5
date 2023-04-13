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
        <article class="sectie2 timer">
            <span id="uren">00</span>
            <span>:</span>
            <span id="minuten">00</span>
        </article>
        <article class="sectie3 daggedeelte">
            <figure class="figuurdag">
                <img src="img/Avond.png" alt="Een foto van caroussel" class="foto" id="figuurdag">
            </figure>
            <header>
                <h2 id="kopdag">Avond</h2>
            </header>
            <section class="lees-meer-tekst">
                <p class="tekst2" id="tekstdag">
                    Het is nu avond,
                    volgende pil moet je
                    nemen na 8:00
                </p>
            </section>
        </article>
        @if($patient != null)
        <a href="stap_verder">STAP VERDER</a>
        <a href="reset">DIT IS EEN OVERVAL RESET</a>
        <p> app_state is {{$patient->app_state}}</p>
        @endif
    </article>
    <script src="{{ asset('/js/index.js') }}"></script>
    </body>
</x-app-layout>
