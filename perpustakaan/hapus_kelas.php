<?php
if($_GET['id_kelas']){
include "koneksi.php";
$qry_hapus=mysqli_query($conn,"delete from siswa where id_siswa='".$_GET['id_kelas']."'");

if($qry_hapus) {echo "<script>alert('Sukses hapus kelas');location.href='tampil_kelas.php';</script>";

} else { echo "<script>alert('Gagal hapus kelas');location.href='tampil_siswa.php';</script>"; }
}
?>