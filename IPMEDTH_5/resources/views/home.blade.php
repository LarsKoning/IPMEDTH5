<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
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
        </ul>
    </nav>
    
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
                    nemen na <p class="tijd" id="tijd">8:00</p>
                </p>
            </section>
        </article>
    </article>
    <script src="Index.js"></script>
</body>
</html>