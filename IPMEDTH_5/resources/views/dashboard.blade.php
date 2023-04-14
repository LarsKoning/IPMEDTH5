<x-app-layout>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <script src="/js/Index.js"></script>
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
        <section class="buttony">
            <section class="resetButton2">
                <a href="stap_verder">STAP VERDER</a>
            </section>
            <section class="resetButton">
                @if($patient != null)
                <a href="reset">Reset</a>
                <!-- <p> app_state is {{$patient->app_state}}</p> -->
                @endif
            </section>
        </section>
    </article>
    </body>
</x-app-layout>
