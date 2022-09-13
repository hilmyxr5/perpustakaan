<?php
if ($_POST){
    $foto=$_POST ['foto_buku'];
    $nama_buku=$_POST ['nama_buku'];
    $deskripsi=$_POST ['deskripsi'];

    if (empty($foto)){
        echo "<script>alert('foto buku tidak boleh kosong');   location.href='tambah_kelas_php';   </script>";
    } if (empty($nama_buku)){
        echo "<script>alert('nama buku tidak boleh kosong');   location.href='tambah_kelas_php';   </script>";
    } elseif(empty($deskripsi)){
            echo "<script>alert('deskripsi tidak boleh kosong');   location.href='tambah_kelas_php';   </script>";
    }else {

        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into buku (foto, nama_buku,deskripsi) value ('".$foto."','".$nama_buku."','".$deskripsi."')"); 
        }if ($insert){
        echo "<script>alert('Sukses menambahkan buku');   location.href='buku.php';   </script>" ;
    } else {
        echo "<script>alert('Gagal menambahkan buku');   location.href='buku.php';   </script>" ;
    }
  }

    
?>