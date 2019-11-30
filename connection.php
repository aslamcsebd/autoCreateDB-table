<?php

   session_start();
   
   function DB_connect() {
      $conn =mysqli_connect('localhost', 'root', '' ,'imtiaz');
      return $conn;
   }
?>