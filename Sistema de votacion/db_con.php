<?php


  function getConnection($servername,$username,$password,$db){
     $conn = mysqli_connect($servername, $username, $password,$db);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      else{
        return $conn;
      }
      

    }





?>