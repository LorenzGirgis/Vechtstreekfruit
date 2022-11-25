<?php
session_start();
if (isset($_SESSION["username"])) {
    if ($_SESSION["username"] === "Admin") {
?>
<?php
$host = 'localhost';
$username = 'vechtstreekfruit';
$password = 'zxy5qhr6JWP3cjc!jaf';
$dbname = 'vechtstreekfruit';

try {
  $conn = new PDO("mysql:host=localhost;port=3306;dbname=vechtstreekfruit", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>
<?php
if (isset($_POST['submit'])) {
$rasnaam = $_POST['rasnaam'];
$soort = $_POST['soort'];
$aantal = $_POST['aantal'];
$tijdvak = $_POST['tijdvak'];
$jaarcheck = $_POST['jaarcheck'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$pdoQuery =
    ' INSERT INTO `bomen`(`rasnaam`, `soort`, `aantal`, `tijdvak`, `jaarcheck`, `latitude`, `longitude`) VALUES (:rasnaam, :soort, :aantal, :tijdvak, :jaarcheck, :latitude, :longitude)';
$pdoQuery_run = $conn->prepare($pdoQuery);
$pdoQuery_execc = $pdoQuery_run->execute([
    ':rasnaam' => $rasnaam,
    ':soort' => $soort,
    ':aantal' => $aantal,
    ':tijdvak' => $tijdvak,
    ':jaarcheck' => $jaarcheck,
    ':latitude' => $latitude,
    ':longitude' => $longitude,
]);
if ($pdoQuery_execc) {
    echo '<p><center>Boom is toegevoegd</center></p>';
    header('Location: kaart.php');
} else {
    echo '<p><center>Boom is niet toegevoegd</center></p>';
}
}
$mirvat = $conn->prepare('SELECT * FROM bomen');
$mirvat->execute();

// update button code
if (isset($_POST['submit'])) {
    $rasnaam = $_POST['rasnaam'];
    $soort = $_POST['soort'];
    $aantal = $_POST['aantal'];
    $tijdvak = $_POST['tijdvak'];
    $jaarcheck = $_POST['jaarcheck'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $pdoqueryUS = "UPDATE bomen SET rasnaam=:rasnaam, soort=:soort, aantal=:aantal, tijdvak=:tijdvak, jaarcheck=:jaarcheck, latitude=:latitude, longitude=:longitude";
    $pdoquery_runUS = $dbconn->prepare($pdoqueryUS);
    $pdoquery_execUS = $pdoquery_runUS->execute(array(":rasnaam"=>$rasnaam, ":soort"=>$soort, ":aantal"=>$aantal, ":tijdvak"=>$tijdvak, ":jaarcheck"=>$jaarcheck, ":latitude"=>$latitude, ":longitude"=>$longitude));

    if ($pdoquery_execUS) {
        echo '<script> alert("Data updated") </script>';
    } else {
        echo 'No data updated';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Panel</title>
<link rel="apple-touch-icon" sizes="180x180" href="./Assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./Assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./Assets/favicon/site.webmanifest">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<header class="pb-5 relative z-20">
        <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
            <div x-data="{ open: false }"
                class="flex flex-col w-full px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="p-4 flex flex-row items-center justify-between">
                    <img src="Assets/logo.png" class="h-6 mr-3 sm:h-9 drop-shadow-md" alt="Vechtstreekfruit">
                    <a href="index.php"
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
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="index.php">Over ons</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">Blog</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">Diensten</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">Contact</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="kaart.php">Kaart</a>
                        <?php if (isset($_SESSION['userid'])) {
                            if ($_SESSION['username'] === 'Admin') { ?>
                           <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="admin.php">Admin</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="includes/logout.inc.php">Logout</a>
    <?php } else { ?>
    <a class="mr-4"><?= $_SESSION['username'] ?></a>
    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="includes/logout.inc.php">Logout</a>
                                <?php }
                        } else {
                                ?>
    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="login.php">Login</a>
    <?php
                        } ?>    
                </nav>
            </div>
        </div>
    </header>
    <h1 class="flex justify-center">Bomen Editen</h1>
    <br>
    <form class="flex justify-center" action="" method="post">
<div class="grid gap-6 mb-6 md:grid-cols-8">
    <div>
        <label for="rasnaam" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rasnaam</label>
        <input type="text" name="rasnaam" value="<?php echo $rasnaam ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Rasnaam" required>
    </div>
    <div>
        <label for="soort" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Soort</label>
        <input type="text" name="soort" value="<?php echo $soort ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Soort" required>
    </div>
    <div>
        <label for="aantal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Aantal</label>
        <input type="number" name="aantal" value="<?php echo $aantal ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Aantal" required>
    </div>  
    <div>
        <label for="tijdvak" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tijdvak</label>
        <input type="text" name="tijdvak" value="<?php echo $tijdvak ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tijdvak" required>
    </div>
    <div>
        <label for="jaarcheck" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jaarcheck</label>
        <input type="number" name="jaarcheck" value="<?php echo $jaarcheck ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jaarcheck" required>
    </div>
    <div>
        <label for="latitude" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Latitude</label>
        <input type="text" name="latitude" value="<?php echo $latitude ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Latitude" required>
    </div>
    <div>
        <label for="longitude" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Longitude</label>
        <input type="text" name="longitude" value="<?php echo $longitude ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Longitude" required>
    </div>
    <div>
    <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-7">Submit</button>
</div>
                    </div>
</form>
</body>
</html>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<?php } else {header('Location: index.php');}
} else {
header('Location: index.php');
} ?>