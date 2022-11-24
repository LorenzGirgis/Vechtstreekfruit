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
    <link rel="icon" type="image/x-icon" href="logo.png">
</head>

<body>
    <nav class="bg-inherit px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0">
    
        <section class="container flex flex-wrap items-center justify-between mx-auto">
    
            <header href="index.php" class="flex items-center">
                <img src="logo.png" class="h-6 mr-3 sm:h-9 drop-shadow-md" alt="Flowbite Logo">
                <a href="index.php"
                    class="self-center text-xl subFont whitespace-nowrap dark:text-white drop-shadow-md">Vechtstreekfruit</a>
            </header>
    
            <aside class="flex md:order-2">
    
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm grey rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Side menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
    
            </aside>
    
            <nav class="hidden w-full md:flex md:max-w-lg md:order-1 pr-96" id="navbar-sticky">
                <ul
                    class="flex flex-col w-1/3 text-xl p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
    
                    <li class="pl-10">
                        <a href="#"
                            class=" truncate block py-2 pl-3 pr-4 grey rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 drop-shadow-md"
                            aria-current="page">Over ons</a>
                    </li>
    
                    <li class="pl-10">
                        <a href="#"
                            class="block py-2 pl-3 pr-4 grey rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 drop-shadow-md">Diensten</a>
                    </li>
                    <li class="pl-10">
                        <a href="#"
                            class="block py-2 pl-3 pr-4 grey rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 drop-shadow-md">Contact</a>
                    </li>
                    <div class="form">
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
                        <a href="login.php"
                        class="block py-2 pl-3 pr-4 grey rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 drop-shadow-md">Inloggen</a>
                        <?php
                        }
                        ?>
                        </li>
<a href="kaart.php"
                        class="block py-2 pl-3 pr-4 grey rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-500 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700 drop-shadow-md">Kaart</a>
                    </div>
                </ul>
            </nav>
            <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        </section>

    </nav>

</body>

</html>