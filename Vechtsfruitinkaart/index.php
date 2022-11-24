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
        <header class="pb-5 relative z-20">
            <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
                <div x-data="{ open: false }"
                    class="flex flex-col w-full px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                    <div class="p-4 flex flex-row items-center justify-between">
                        <img src="./Assets/logo.png" class="h-6 mr-3 sm:h-9 drop-shadow-md" alt="Vechtstreekfruit">
                        <a href="#"
                            class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Vechtstreekfruit</a>
                        <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline"
                            @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="!open" fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                                <path x-show="open" fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <nav :class="{'flex': open, 'hidden': !open}"
                        class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                        <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="#">Over ons</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="">Blog</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="">Diensten</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="kaart.php">Kaart</a>
                        <?php
                        if (isset($_SESSION["userid"])) {
                            if ($_SESSION["username"] === "Admin") {
                        ?>
                        <a href="admin.php" class="mr-4">Admin</a>
                        <a href="includes/logout.inc.php">Logout</a>
                        <?php   
                            } else {
                        ?>
                        <a class="mr-4"><?= $_SESSION["username"] ?></a>
                        <a href="includes/logout.inc.php">Logout</a>
                        <?php
                            }
                        } else {
                        ?>
                         <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                            href="login.php">Inloggen</a>
                        <?php
                        }
                        ?>
                    </nav>
                </div>
            </div>
        </header>

        <article>
            <img src="./Assets/home/Left Graphic.png"
                class="absolute hidden md:block md:h-5/6 z-10 md:bottom-0 md:left-0" alt="Left graphic">
            <img src="./Assets/home/Right Graphic.png"
                class="absolute hidden md:block md:h-5/6 z-10 md:top-0 md:right-0" alt="Right graphic">
        </article>

        <article class="relative z-10">
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
        <div class="z-0 w-full h-full">
            <img src="https://cdn.pixabay.com/photo/2016/08/20/20/57/autumn-1608537_960_720.png" class="i n1"></img>
            <img src="https://purepng.com/public/uploads/large/purepng.com-yellow-leafautumnleavesleafmapleseasonfall-541521070454nw6oe.png"
                class="i n2"></img>
            <img src="https://www.freepngimg.com/thumb/autumn%20leaves/3-autumn-png-leaf-thumb.png" class="i n3"></img>
            <img src="https://cdn.pixabay.com/photo/2016/08/20/20/57/autumn-1608537_960_720.png" class="i n4"></img>
            <img src="https://purepng.com/public/uploads/large/purepng.com-yellow-leafautumnleavesleafmapleseasonfall-541521070454nw6oe.png"
                class="i n5"></img>
            <img src="https://www.freepngimg.com/thumb/autumn%20leaves/3-autumn-png-leaf-thumb.png" class="i n6"></img>

            <iframe src='https://my.spline.design/untitled-965b91290eb7e3f37c500c5499022a76/' frameborder='0'
                width='100%' height='100%'>
            </iframe>
        </div>
    </section>

    <section id="page3">
        <div class="bg-black bg-opacity-50 rounded-lg p-10 h-full">
            <div class="container mx-auto">
                <div class="flex flex-wrap justify-start align-middle">
                    <div class="text-center">
                        <h1 class="text-6xl mainFont text-white drop-shadow-md">Onze visie</h1>
                        <p class="text-4xl subFont spacing pt-10 text-white drop-shadow-md">Het bouwen van een
                            collectief
                            van
                            boomgaarden die samen zorgen voor:
                        </p>
                        <ul class="text-3xl subFont text-white drop-shadow-md">
                            <li class="pt-10">Het versterken van lokale biodiversiteit en cultureel erfgoed</li>
                            <li class="pt-10">Kennis uitwisseling, aanplant en onderhoud</li>
                            <li class="pt-10">Verwerken van de oogst tot mooie lokale producten</li>
                            <li class="pt-10">Herwaardering van bijzondere, oude fruitrassen</li>
                        </ul>
                    </div>
                </div>
            </div>
    </section>

    <section id="page4">

    </section>

</body>

<footer class="text-center lg:text-left">
    <div class="text-center p-4" style="background-color: rgba(255, 255, 255, 0.2);">
        © 2022 Copyright:
        <a class="text-green-800" href="#">De Wilde Boomgaard</a>
    </div>
</footer>

<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</html>