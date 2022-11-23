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