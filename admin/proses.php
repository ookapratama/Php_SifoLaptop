<?php
include '../controllers/admin/function.php';

$proses = $_GET['proses'];
$jenis = $_GET['jenis'];

if ($proses == 'store') {
   // var_dump($_POST);
   if ($jenis == 'laptop') {

      $merk_laptop = $_POST['merk_laptop'];
      $kategori_id = $_POST['kategori_laptop'];
      $no_serial = $_POST['no_serial'];
      $harga_laptop = $_POST['harga_laptop'];
      $ram_laptop = $_POST['ram_laptop'];
      $prosesor_laptop = $_POST['prosesor_laptop'];
      $vga_laptop = $_POST['vga_laptop'];
      $model_laptop = $_POST['model_laptop'];
      $storage_laptop = $_POST['storage_laptop'];
      $screen_laptop = $_POST['screen_laptop'];
      
      // $tes = "Rp. 5.100.000";
      $harga = (float)preg_replace("/[^0-9]/", '', $harga_laptop);
      // echo $harga;

      $uniq_name = upload_gambar();
      
      $data_query = "(null, '$kategori_id', '$merk_laptop', '$no_serial', '$harga', '$ram_laptop', '$prosesor_laptop', '$storage_laptop', '$vga_laptop', '$screen_laptop', '$uniq_name', '$model_laptop')";
      
      $data_laptop = store("laptop", $data_query);
      var_dump($data_laptop);

      if ($data_laptop > 0) {
         echo "<script>
         document.location.href ='view_laptop.php';
         </script>";
      }

   } else if ($jenis == 'kategori') {

      $nama_kategori = $_POST['kategori_laptop'];

      $data_query = "('', '$nama_kategori')";
      // var_dump($data_query);
      $data_laptop = store('kategori_laptop', $data_query);

      if ($data_laptop > 0) {
         echo "<script>
         document.location.href ='view_kategori.php';
         </script>";
      }
   }
   else {
      // var_dump($_POST);
      $jenis_fitur = $_POST['jenis_fitur'];
      $nama_fitur = $_POST['nama_fitur'];

      $data_query = "('', '$jenis_fitur', '$nama_fitur')";
      $data_fitur = store('fitur_laptop', $data_query);

      if ($data_fitur > 0) {
         
         echo "<script>
         document.location.href ='view_fitur.php?jenis_fitur=$jenis_fitur';
         </script>";
      }
   }
} else {
   // var_dump($_POST);
   if ($jenis == 'laptop') {
      $id_laptop = $_POST['id_laptop'];
      $merk_laptop = $_POST['merk_laptop'];
      $kategori_laptop = $_POST['kategori_laptop'];
      $no_serial = $_POST['no_serial'];
      $model_laptop = $_POST['model_laptop'];
      $harga_laptop = $_POST['harga_laptop'];
      $prosesor_laptop = $_POST['prosesor_laptop'];
      $ram_laptop = $_POST['ram_laptop'];
      $storage_laptop = $_POST['storage_laptop'];
      $vga_laptop = $_POST['vga_laptop'];
      $screen_laptop = $_POST['screen_laptop'];
      $model_laptop = $_POST['model_laptop'];
      $gambar_lama = $_POST['gambar_lama'];

      $error = $_FILES['gambar_laptop']['error'];
      if ($error === 4) {
         $uniq_name = $gambar_lama;
      } else {
         $uniq_name = upload_gambar();
      }

      $harga = (float)preg_replace("/[^0-9]/", '', $harga_laptop);

      $data_query = "kategori_id = '$kategori_laptop', merk_laptop = '$merk_laptop', no_serial = '$no_serial', harga_laptop = '$harga', ram_laptop = '$ram_laptop', prosesor_laptop = '$prosesor_laptop', storage_laptop = '$storage_laptop', vga_laptop = '$vga_laptop', screen_laptop = '$screen_laptop', gambar_laptop = '$uniq_name', model_laptop = '$model_laptop' WHERE id_laptop = '$id_laptop'";

      $data_laptop = update('laptop', $data_query);

      if ($data_laptop > 0) {
         echo "<script>
      document.location.href ='view_laptop.php';
      </script>";
      }
   }
   else if ($jenis == 'kategori') {
      $id_kategori = $_POST['id'];
      $nama_kategori = $_POST['kategori_laptop'];

      $data_query = "nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'";
      // var_dump($data_query);
      $data_kategori = update('kategori_laptop', $data_query);

      if ($data_kategori > 0) {
         echo "<script>
         document.location.href ='view_kategori.php';
         </script>";
      }
   }
   else if ($jenis == 'fitur') {
      
      $id_fitur = $_POST['id'];
      $jenis_fitur = $_POST['jenis_fitur'];
      $nama_fitur = $_POST['nama_fitur'];

      $data_query = "jenis_fitur = '$jenis_fitur', nama_fitur = '$nama_fitur' WHERE id_fitur = $id_fitur";

      $data_fitur = update('fitur_laptop', $data_query);
      
      if ($data_fitur > 0) {
         echo "<script>
         document.location.href ='view_fitur.php?jenis_fitur=$jenis_fitur';
         </script>";
      }
   }

   else {
      
   }
}
