<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   
     $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>