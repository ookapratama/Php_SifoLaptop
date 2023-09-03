<?php 
include '../controllers/admin/function.php';

$id = $_GET['id'];

$data_kategori = delete('kategori_laptop', "id_kategori = $id");

if ($data_kategori > 0) {
   echo "<script>
   document.location.href ='view_kategori.php';
   </script>";
}
