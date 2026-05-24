<?php
session_start();
if (empty($_SESSION['login'])) {
   header("Location: ../auth/login.php");
   exit();
}
include '../controllers/admin/function.php';

$proses = $_GET['proses'];
$jenis = $_GET['jenis'];

if ($_SESSION['role'] !== 'admin' && $jenis !== 'admin') {
   echo "<script>
   alert('Akses ditolak! Akun Anda tidak memiliki izin untuk melakukan aksi ini.');
   history.back();
   </script>";
   exit();
}

if ($proses == 'store') {
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
       
       $berat_laptop = !empty($_POST['berat_laptop']) ? (float)$_POST['berat_laptop'] : null;
       $baterai_laptop = !empty($_POST['baterai_laptop']) ? (int)$_POST['baterai_laptop'] : null;
       $is_touchscreen = isset($_POST['is_touchscreen']) ? (int)$_POST['is_touchscreen'] : 0;
       $is_convertible = isset($_POST['is_convertible']) ? (int)$_POST['is_convertible'] : 0;
       $has_backlit_kb = isset($_POST['has_backlit_kb']) ? (int)$_POST['has_backlit_kb'] : 0;
       $has_biometric = isset($_POST['has_biometric']) ? (int)$_POST['has_biometric'] : 0;
       
       $harga = (float)preg_replace("/[^0-9]/", '', $harga_laptop);
       $uniq_name = upload_gambar();

       $stmt = $db->prepare("INSERT INTO laptop (kategori_id, merk_laptop, no_serial, harga_laptop, ram_laptop, prosesor_laptop, storage_laptop, vga_laptop, screen_laptop, gambar_laptop, model_laptop, berat_laptop, baterai_laptop, is_touchscreen, is_convertible, has_backlit_kb, has_biometric) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
       $stmt->bind_param("issiiiiisssdiiiii", $kategori_id, $merk_laptop, $no_serial, $harga, $ram_laptop, $prosesor_laptop, $storage_laptop, $vga_laptop, $screen_laptop, $uniq_name, $model_laptop, $berat_laptop, $baterai_laptop, $is_touchscreen, $is_convertible, $has_backlit_kb, $has_biometric);
       $stmt->execute();
       $data_laptop = $stmt->affected_rows;
       $stmt->close();

      if ($data_laptop > 0) {
         echo "<script>
         document.location.href ='view_laptop.php';
         </script>";
      }

   } else if ($jenis == 'kategori') {
      $nama_kategori = $_POST['kategori_laptop'];

      $stmt = $db->prepare("INSERT INTO kategori_laptop (nama_kategori) VALUES (?)");
      $stmt->bind_param("s", $nama_kategori);
      $stmt->execute();
      $data_laptop = $stmt->affected_rows;
      $stmt->close();

      if ($data_laptop > 0) {
         echo "<script>
         document.location.href ='view_kategori.php';
         </script>";
      }
   }
   else {
      $jenis_fitur = $_POST['jenis_fitur'];
      $nama_fitur = $_POST['nama_fitur'];
      $bobot = isset($_POST['bobot']) ? (int)$_POST['bobot'] : 0;

      $stmt = $db->prepare("INSERT INTO fitur_laptop (jenis_fitur, nama_fitur, bobot) VALUES (?, ?, ?)");
      $stmt->bind_param("ssi", $jenis_fitur, $nama_fitur, $bobot);
      $stmt->execute();
      $data_fitur = $stmt->affected_rows;
      $stmt->close();

      if ($data_fitur > 0) {
         echo "<script>
         document.location.href ='view_fitur.php?jenis_fitur=$jenis_fitur';
         </script>";
      }
   }
} else {
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
       $gambar_lama = $_POST['gambar_lama'];

       $berat_laptop = !empty($_POST['berat_laptop']) ? (float)$_POST['berat_laptop'] : null;
       $baterai_laptop = !empty($_POST['baterai_laptop']) ? (int)$_POST['baterai_laptop'] : null;
       $is_touchscreen = isset($_POST['is_touchscreen']) ? (int)$_POST['is_touchscreen'] : 0;
       $is_convertible = isset($_POST['is_convertible']) ? (int)$_POST['is_convertible'] : 0;
       $has_backlit_kb = isset($_POST['has_backlit_kb']) ? (int)$_POST['has_backlit_kb'] : 0;
       $has_biometric = isset($_POST['has_biometric']) ? (int)$_POST['has_biometric'] : 0;

       $error = $_FILES['gambar_laptop']['error'];
       if ($error === 4) {
          $uniq_name = $gambar_lama;
       } else {
          $uniq_name = upload_gambar();
       }

       $harga = (float)preg_replace("/[^0-9]/", '', $harga_laptop);

       $stmt = $db->prepare("UPDATE laptop SET kategori_id = ?, merk_laptop = ?, no_serial = ?, harga_laptop = ?, ram_laptop = ?, prosesor_laptop = ?, storage_laptop = ?, vga_laptop = ?, screen_laptop = ?, gambar_laptop = ?, model_laptop = ?, berat_laptop = ?, baterai_laptop = ?, is_touchscreen = ?, is_convertible = ?, has_backlit_kb = ?, has_biometric = ? WHERE id_laptop = ?");
       $stmt->bind_param("issiiiiisssdiiiiii", $kategori_laptop, $merk_laptop, $no_serial, $harga, $ram_laptop, $prosesor_laptop, $storage_laptop, $vga_laptop, $screen_laptop, $uniq_name, $model_laptop, $berat_laptop, $baterai_laptop, $is_touchscreen, $is_convertible, $has_backlit_kb, $has_biometric, $id_laptop);
       $stmt->execute();
       $data_laptop = $stmt->affected_rows;
       $stmt->close();

      if ($data_laptop >= 0) {
         echo "<script>
         document.location.href ='view_laptop.php';
         </script>";
      }
   }
   else if ($jenis == 'kategori') {
      $id_kategori = $_POST['id'];
      $nama_kategori = $_POST['kategori_laptop'];

      $stmt = $db->prepare("UPDATE kategori_laptop SET nama_kategori = ? WHERE id_kategori = ?");
      $stmt->bind_param("si", $nama_kategori, $id_kategori);
      $stmt->execute();
      $data_kategori = $stmt->affected_rows;
      $stmt->close();

      if ($data_kategori >= 0) {
         echo "<script>
         document.location.href ='view_kategori.php';
         </script>";
      }
   }
   else if ($jenis == 'fitur') {
      $id_fitur = $_POST['id'];
      $jenis_fitur = $_POST['jenis_fitur'];
      $nama_fitur = $_POST['nama_fitur'];
      $bobot = isset($_POST['bobot']) ? (int)$_POST['bobot'] : 0;

      $stmt = $db->prepare("UPDATE fitur_laptop SET jenis_fitur = ?, nama_fitur = ?, bobot = ? WHERE id_fitur = ?");
      $stmt->bind_param("ssii", $jenis_fitur, $nama_fitur, $bobot, $id_fitur);
      $stmt->execute();
      $data_fitur = $stmt->affected_rows;
      $stmt->close();
      
      if ($data_fitur >= 0) {
         echo "<script>
         document.location.href ='view_fitur.php?jenis_fitur=$jenis_fitur';
         </script>";
      }
   }
   else if ($jenis == 'admin') {
      $id_admin = $_SESSION['id_admin'];
      $nama = $_POST['nama'];
      $username = $_POST['username'];
      $pass_lama = $_POST['pass_lama'];
      $pass_baru = $_POST['pass_baru'];

      $stmt = $db->prepare("SELECT * FROM admin WHERE id = ?");
      $stmt->bind_param("i", $id_admin);
      $stmt->execute();
      $result = $stmt->get_result();
      $admin = $result->fetch_assoc();
      $stmt->close();

      if ($admin && password_verify($pass_lama, $admin['password'])) {
         if (!empty($pass_baru)) {
            $hashed_pass = password_hash($pass_baru, PASSWORD_DEFAULT);
            $stmt = $db->prepare("UPDATE admin SET nama = ?, username = ?, password = ? WHERE id = ?");
            $stmt->bind_param("sssi", $nama, $username, $hashed_pass, $id_admin);
         } else {
            $stmt = $db->prepare("UPDATE admin SET nama = ?, username = ? WHERE id = ?");
            $stmt->bind_param("ssi", $nama, $username, $id_admin);
         }

         $stmt->execute();
         $data_update = $stmt->affected_rows;
         $stmt->close();
         
         if ($data_update >= 0) {
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $nama;
            echo "<script>
            alert('Profil admin berhasil diubah!');
            document.location.href ='update_admin.php';
            </script>";
         } else {
            echo "<script>
            alert('Gagal mengubah profil admin!');
            history.back();
            </script>";
         }
      } else {
         echo "<script>
         alert('Password Lama salah!');
         history.back();
         </script>";
      }
   }
}
