<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Medicijninfo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <body>
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
</x-app-layout>
