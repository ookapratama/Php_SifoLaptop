<?php

include 'C:\Apache24\htdocs\sifo-laptop\config.php';


function select($query)
{

   global $db;
   $exec_query = mysqli_query($db, $query);
   return $exec_query;
}

function store($table, $data)
{

   global $db;

   // var_dump($data);


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
   $exec_query = mysqli_query($db, "INSERT INTO $table VALUES $data");

   return mysqli_affected_rows($db);
}


function update($table, $query) {
   
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
