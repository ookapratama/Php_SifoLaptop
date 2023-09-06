<?php

try {
   //code...
   $db = mysqli_connect("localhost", "root", "root", "toko_laptop");
} catch (Exception $e) {
   echo "Message = ". $e;
}