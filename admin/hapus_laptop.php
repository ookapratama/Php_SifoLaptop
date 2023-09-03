<?php 
include '../controllers/admin/function.php';

$id = $_GET['id'];

$data_laptop = delete('laptop', "id_laptop = $id");

if ($data_laptop > 0) {
   echo "<script>
   document.location.href ='view_laptop.php';
   </script>";
}
