<?php
class DB {
    protected function connect() {
          $server = "localhost";
          $username = "vechtstreekfruit";
          $password = "zxy5qhr6JWP3cjc!jaf";
          $dbname = "vechtstreekfruit";
          
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