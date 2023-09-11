<?php

include 'C:\Apache24\htdocs\sifo-laptop\config.php';

function login($data) {

   global $db;
   
   $username = $data['username'];
   
   $query = mysqli_query($db, "SELECT * FROM admin WHERE username = '$username'");

   return mysqli_affected_rows($db);
   
}