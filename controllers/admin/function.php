<?php

include __DIR__ . '/../../config.php';


function select($query)
{

   global $db;
   $exec_query = mysqli_query($db, $query);
   return $exec_query;
}

function store($table, $data)
{

   global $db;


   // $merk_laptop = $data['merk_laptop'];
   // $kategori_id = $data['kategori_laptop'];
   // $no_serial = $data['no_serial'];
   // $harga_laptop = $data['harga_laptop'];
   // $ram_laptop = $data['ram_laptop'];
   // $prosesor_laptop = $data['prosesor_laptop'];
   // $vga_laptop = $data['vga_laptop'];
   // $model_laptop = $data['model_laptop'];
   // $storage_laptop = $data['storage_laptop'];

   // echo $data;
   // var_dump($data);
   try {
      //code...
      $exec_query = mysqli_query($db, "INSERT INTO $table VALUES $data");
   } catch (\Throwable $th) {
      echo $th;
      var_dump($th);
   }
   // var_dump($exec_query);

   return mysqli_affected_rows($db);
}


function update($table, $query)
{

   global $db;
   // var_dump($query);
   $exec_query = mysqli_query($db, "UPDATE $table SET $query");

   return mysqli_affected_rows($db);
}

function delete($table, $id)
{

   global $db;

   $exec_query = mysqli_query($db, "DELETE FROM $table WHERE $id");
   return mysqli_affected_rows($db);
}

function upload_gambar()
{
   $nama_gambar = $_FILES['gambar_laptop']['name'];
   $error = $_FILES['gambar_laptop']['error'];
   $tmp_gambar = $_FILES['gambar_laptop']['tmp_name'];


   $eks = ['jpg', 'png', 'jpeg'];
   $eks_gambar = explode('.', $nama_gambar);
   $eks_gambar = strtolower(end($eks_gambar));

   if (!in_array($eks_gambar, $eks)) {
      echo "<script>
         alert('Berhasil simpan data');
         history.back();
         </script>";
   }

   $uniq_name = uniqid();
   $uniq_name .= '.';
   $uniq_name .= $eks_gambar;

   move_uploaded_file($tmp_gambar, 'img/' . $uniq_name);

   return $uniq_name;
}


function search($data)
{
   $merk = isset($data['merk_laptop']) ? $data['merk_laptop'] : '';
   $prosesor = isset($data['prosesor']) ? $data['prosesor'] : '';
   $ram = isset($data['ram']) ? $data['ram'] : '';
   $vga = isset($data['vga']) ? $data['vga'] : '';
   $storage = isset($data['storage']) ? $data['storage'] : '';
   $kategori_laptop = isset($data['kategori_laptop']) ? $data['kategori_laptop'] : '';
   $screen = isset($data['screen']) ? $data['screen'] : '';

   $harga_awal = isset($data['harga_awal']) ? (float)preg_replace("/[^0-9]/", '', $data['harga_awal']) : 0;
   $harga_maks = isset($data['harga_maks']) ? (float)preg_replace("/[^0-9]/", '', $data['harga_maks']) : 0;

   global $db;
   $query = "SELECT laptop.*, 
   ram_feature.nama_fitur AS ram,
   prosesor_feature.nama_fitur AS prosesor,
   storage_feature.nama_fitur AS storage,
   vga_feature.nama_fitur AS vga,
   screen_feature.nama_fitur AS screen,
   kategori_laptop.nama_kategori
   FROM laptop
   JOIN fitur_laptop AS ram_feature ON laptop.ram_laptop = ram_feature.id_fitur 
   JOIN fitur_laptop AS prosesor_feature ON laptop.prosesor_laptop = prosesor_feature.id_fitur 
   JOIN fitur_laptop AS storage_feature ON laptop.storage_laptop = storage_feature.id_fitur 
   JOIN fitur_laptop AS vga_feature ON laptop.vga_laptop = vga_feature.id_fitur
   JOIN fitur_laptop AS screen_feature ON laptop.screen_laptop = screen_feature.id_fitur 
   LEFT JOIN kategori_laptop ON laptop.kategori_id = kategori_laptop.id_kategori
   WHERE 1=1";

   if (!empty($kategori_laptop)) {
      $query .= " AND kategori_laptop.nama_kategori LIKE '%".mysqli_real_escape_string($db, $kategori_laptop)."%'";
   }
   if (!empty($merk)) {
      $query .= " AND (merk_laptop LIKE '%".mysqli_real_escape_string($db, $merk)."%' OR model_laptop LIKE '%".mysqli_real_escape_string($db, $merk)."%')";
   }
   if (!empty($prosesor)) {
      $query .= " AND prosesor_feature.nama_fitur LIKE '%".mysqli_real_escape_string($db, $prosesor)."%'";
   }
   if (!empty($ram)) {
      $query .= " AND ram_feature.nama_fitur LIKE '%".mysqli_real_escape_string($db, $ram)."%'";
   }
   if (!empty($vga)) {
      $query .= " AND vga_feature.nama_fitur LIKE '%".mysqli_real_escape_string($db, $vga)."%'";
   }
   if (!empty($storage)) {
      $query .= " AND storage_feature.nama_fitur LIKE '%".mysqli_real_escape_string($db, $storage)."%'";
   }
   if (!empty($screen)) {
      $query .= " AND screen_feature.nama_fitur LIKE '%".mysqli_real_escape_string($db, $screen)."%'";
   }
   if (!empty($harga_awal) && !empty($harga_maks)) {
      $query .= " AND harga_laptop BETWEEN $harga_awal AND $harga_maks";
   }

   $search = mysqli_query($db, $query);
   return $search;
}
