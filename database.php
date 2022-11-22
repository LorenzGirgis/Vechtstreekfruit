<?php
class DB {

    protected function connect() {
          $server = "localhost";
          $username = "root"; // bit_academy
          $password = ""; // bit_academy
          $dbname = "vechtsfruit";
          
          try {
               $conn = new PDO(
                    "mysql:host=$server; dbname=$dbname",
                    "$username", "$password"
               );
               
               $conn->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
               );
               return $conn;
          }
          catch(PDOException $e) {
               die('Unable to connect with the database');
          }
          
     }
}
function pdo_connect_mysql() {
     $DATABASE_HOST = 'localhost';
     $DATABASE_USER = 'root';
     $DATABASE_PASS = '';
     $DATABASE_NAME = 'vechtsfruit';
     try {
          return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
     } catch (PDOException $exception) {
          exit('Failed to connect to database!');
     }
 }

 
?>
