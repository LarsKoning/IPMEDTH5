<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <title>Caroussel</title>
</head>
<body>
    <nav class="navigatie">
        <ul class="navigatienav">
            <li class="navitem">
                <figure class="figuurtje">
                    <img src="img/logo.png" alt="Logo Pill&Co" class="fototje">
                </figure>
            </li>
            <li class="navitem">
                <a href="{{ route('register') }}" class="button button1">Log in</a>
            </li>
        </ul>
    </nav>
    
    <article class="samenvatting">
        <article class="sectie1 app">
            <figure class="figuur">
                <img src="{{ asset('img/app.png') }}" alt="Een foto van een telefoon" class="foto">
            </figure>
            <header>
                <h2>De app</h2>
            </header>
            <section class="lees-meer-tekst">
                <p class="tekst">
                    Beheer het medicijncarrousel, krijg een melding als je een pil moet 
                    nemen en bekijk wanneer je een pil moet nemen  
                </p>
            </section>
        </article>
        <article class="sectie1 caroussel">
            <figure class="figuur">
                <img src="{{ asset('img/caroussel.png') }}" alt="Een foto van caroussel" class="foto">
            </figure>
            <header>
                <h2>De carrousel</h2>
            </header>
            <section class="lees-meer-tekst">
                <p class="tekst">
                    De carrousel geeft de pillen,  kan makkelijk bijgevuld worden en 
                    word geopend via een knop of de app 
                </p>
            </section>
        </article>
    </article>
    <script src="{{ asset('/js/index.js') }}"></script>
</body>
</html>