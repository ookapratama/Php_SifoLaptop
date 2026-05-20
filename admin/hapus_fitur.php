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

$stmt = $db->prepare("SELECT * FROM fitur_laptop WHERE id_fitur = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$get_fitur = $result->fetch_assoc();
$jenis_fitur = $get_fitur['jenis_fitur'];
$stmt->close();

$stmt = $db->prepare("DELETE FROM fitur_laptop WHERE id_fitur = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data_fitur = $stmt->affected_rows;
$stmt->close();

if ($data_fitur > 0) {
   echo "<script>
   document.location.href ='view_fitur.php?jenis_fitur=$jenis_fitur';
   </script>";
}
