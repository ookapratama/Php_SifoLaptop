<?php 
session_start();
if (empty($_SESSION['login'])) {
   header("Location: ../auth/login.php");
   exit();
}
include '../controllers/admin/function.php';

if ($_SESSION['role'] !== 'admin') {
   echo "<script>
   alert('Akses ditolak! Akun Anda tidak memiliki izin untuk menghapus data.');
   history.back();
   </script>";
   exit();
}

$id = (int)$_GET['id'];

$stmt = $db->prepare("DELETE FROM kategori_laptop WHERE id_kategori = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data_kategori = $stmt->affected_rows;
$stmt->close();

if ($data_kategori > 0) {
   echo "<script>
   document.location.href ='view_kategori.php';
   </script>";
}
