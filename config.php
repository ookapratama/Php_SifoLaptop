<?php

try {
   //code...
   $db = mysqli_connect("localhost", "root", "", "toko_laptop");
} catch (Exception $e) {
   echo "Message = ". $e;
}