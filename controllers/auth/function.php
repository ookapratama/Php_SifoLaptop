<?php

include __DIR__ . '/../../config.php';

function login($data) {
   global $db;
   
   $username = mysqli_real_escape_string($db, $data['username']);
   $password = $data['password'];
   
   $stmt = mysqli_prepare($db, "SELECT * FROM admin WHERE username = ?");
   mysqli_stmt_bind_param($stmt, "s", $username);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);
   
   if ($row = mysqli_fetch_assoc($result)) {
      if (password_verify($password, $row['password'])) {
         return $row;
      }
   }
   
   return false;
}