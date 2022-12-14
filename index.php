<?php
session_start();
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./CSS/main.css">
    <title>Vechtstreekfruit</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./Assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./Assets/favicon/site.webmanifest">
</head>

<body class="main">
    <section id="page1">
        <header class="pb-5">
            <nav class="bg-transparent static w-full">
                <div class="container flex flex-wrap items-center justify-between mx-auto mt-4">
                    <div class="flex items-center justify-start h-6">
                        <img src="./Assets/logo.png" class="h-6 mr-3 sm:h-9 drop-shadow-md" alt="Vechtstreekfruit Logo">
                        <a href="index.php"
                            class="self-center text-xl title whitespace-nowrap drop-shadow-md">Vechtstreekfruit</a>
                    </div>

                    <div class="hidden w-full md:flex md:max-w-xs md:order-1 justify-center mr-96 lg:flex">
                        <ul
                            class="flex flex-col text-xl p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 mr-96">
                            <li class="pl-10">
                                <a href="index.php"
                                    class="truncate block py-2 pl-3 pr-4 grey rounded bg-transparent md:hover:text-green-500 md:p-0 drop-shadow-md"
                                    aria-current="page">Over ons</a>
                            </li>
                            <li class="pl-10">
                                <a href="#"
                                    class="truncate block py-2 pl-3 pr-4 grey rounded bg-transparent md:hover:text-green-500 md:p-0 drop-shadow-md"
                                    aria-current="page">Blog</a>
                            </li>
                            <li class="pl-10">
                                <a href="./HTML/quiz.html"
                                    class="truncate block py-2 pl-3 pr-4 grey rounded bg-transparent md:hover:text-green-500 md:p-0 drop-shadow-md">Quiz</a>
                            </li>
                            <li class="pl-10">
                                <a href="kaart.php"
                                    class="truncate block py-2 pl-3 pr-4 grey rounded bg-transparent md:hover:text-green-500 md:p-0 drop-shadow-md">Kaart</a>
                            </li>
                            <li class="pl-10">
                                <a href="#"
                                    class="truncate block py-2 pl-3 pr-4 grey rounded bg-transparent md:hover:text-green-500 md:p-0 drop-shadow-md">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <aside class="flex md:order-2 lg:hidden highlight">
                        <div id="navbar">
                            <a href="#" class="truncate block py-2 pl-3 pr-4 grey rounded bg-transparent md:p-0 drop-shadow-md"
                                aria-current="page">Over ons</a>
                            <a href="#" class="truncate block py-2 pl-3 pr-4 grey rounded bg-transparent drop-shadow-md"
                                aria-current="page">Blog</a>
                            <a href="./HTML/quiz.html" class="truncate block py-2 pl-3 pr-4 grey rounded bg-transparent drop-shadow-md">Quiz</a>
                            <a href="kaart.php" class="truncate block py-2 pl-3 pr-4 grey rounded bg-transparent drop-shadow-md">Kaart</a>
                            <a href="#" class="truncate block py-2 pl-3 pr-4 grey rounded bg-transparent drop-shadow-md">Contact</a>
                        </div>
                        <button href="javascript:void(0);" class="icon" onclick="hamburger()">
                            <svg class="w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </aside>
                </div>
            </nav>
        </header>

        <article>
            <div class="container mx-auto">
                <img src="./Assets/home/Left Graphic.png"
                    class="absolute hidden md:block md:h-5/6 z-10 md:bottom-0 md:left-0" alt="Left graphic">
                <img src="./Assets/home/Right Graphic.png"
                    class="absolute hidden md:block md:h-5/6 z-10 md:top-0 md:right-0" alt="Right graphic">
            </div>
        </article>

        <article>
            <div class="container mx-auto">
                <div class="flex flex-wrap centered">
                    <div class="text-center">
                        <img class="object-fit h-32" src="./Assets/home/De Wilde Boomgaard.png">
                        <p class="text-2xl subFont pt-10 grey drop-shadow-md">Ontmoet elkaar in je lokale boomgaard.</p>
                        <p class="text-2xl subFont spacing grey drop-shadow-md">Waar oude fruitrassen, noten en kruiden
                            groeien in hun oorspronkelijke <br> ecosysteem.</p>
                        <p class="text-2xl subFont spacing grey drop-shadow-md">Zo genieten we zelf van smaakvol fruit
                            en
                            verrijken we biodiversiteit.</p>
                    </div>
                </div>
        </article>

    </section>

    <section id="page2">
        <div class="relative flex items-center align-middle h-screen overflow-hidden">
            <div class="absolute z-30 text-2xl text-white bg-transparent bg-opacity-50 rounded-lg p-10 glass ml-10 mr-10">
                <div class="flex justify-start flex-col">
                    <h1 class="grey mainFont">Hoeveel fruit verspillen we per jaar?</h1>
                    <p class="grey subFont break-normal">
                        Wereldwijd verspillen we op dit moment 1555 miljoen ton aan voedsel per jaar.
                        <br><br> Dat is 1/3 van het totale voedsel dat geproduceerd wordt.
                        <br><br> Waaonder, 644 miljoen ton afval (42%) komt van fruit en groenten.
                        <br>
                    </p>
                    <a href="https://toogoodtogo.be/nl-be/movement/knowledge/what-food-is-wasted" target="_blank" class="spacing">
                        <button class="grey rounded-md read">
                            Lees meer
                        </button>
                    </a>
                </div>
            </div>
            <video autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
                <source src="./Assets/home/apples.mp4" type="video/mp4" alt="Falling Apples" />
                Your browser does not support the video tag.
            </video>
        </div>
    </section>

    <section id="page3">
        <div class="bg-black bg-opacity-50 rounded-lg p-10 h-full">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-start align-middle">
                    <div class="text-center">
                        <h1 class="text-5xl mainFont text-white drop-shadow-md">Onze visie</h1>
                        <p class="text-3xl subFont spacing pt-10 text-white drop-shadow-md">Het bouwen van een
                            collectief
                            van
                            boomgaarden die samen zorgen voor:
                        </p>
                        <ul class="text-2xl subFont text-white drop-shadow-md overflow-auto">
                            <li class="pt-16">Het versterken van lokale biodiversiteit en cultureel erfgoed</li>
                            <li class="pt-16">Kennis uitwisseling, aanplant en onderhoud</li>
                            <li class="pt-16">Verwerken van de oogst tot mooie lokale producten</li>
                            <li class="pt-16">Herwaardering van bijzondere, oude fruitrassen</li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>
    
    <footer class="text-center lg:text-left">
        <div class="text-center p-4 subFont" style="background-color: rgba(255, 255, 255, 0.2);">
            Vreechstreek Fruit ?? 2022
            <a href="./HTML/legal.html" class="read pl-5" target="_blank">Legal</a>
            <a href="https://mbo.bit-academy.nl/" class="read pl-5" target="_blank">BitAcademy</a>
            <a href="https://www.google.com/maps" class="read pl-5" target="_blank">Google Maps</a>
            <a href="https://github.com/LorenzGirgis/Vechtstreekfruit/" class="read pl-5" target="_blank">GitHub</a>
        </div>
    </footer>

    <script src="./JS/nav.js"></script>
</body>

</html>