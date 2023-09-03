<?php 
include '../controllers/admin/function.php';

$id = $_GET['id'];

$fitur_old = select("SELECT * FROM fitur_laptop WHERE id_fitur = $id");

$get_fitur = mysqli_fetch_assoc($fitur_old);
$jenis_fitur = $get_fitur['jenis_fitur'];

$data_fitur = delete('fitur_laptop', "id_fitur = $id");

if ($data_fitur > 0) {
   echo "<script>
   document.location.href ='view_fitur.php?jenis_fitur=$jenis_fitur';
   </script>";
}
