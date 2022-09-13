<?php include 'navbar.php'; ?>
    

     <body>
        <h3>Data Siswa</h3>
        <a href="tambah_siswa.php"><input type ="submit" name="" value="tambah siswa" class="btn" style="background-color:Bisque;"></a>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th> <th>NAMA</th> <th>TANGGAL LAHIR</th>
                    <th>ALAMAT</th> <th>GENDER</th> 
                    <th>USERNAME</th> <th>KELAS</th> <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
<?php 
include "koneksi.php";
$qry_siswa=mysqli_query($conn,"select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
$no=0;
while($data_siswa=mysqli_fetch_array($qry_siswa)){
$no++;?>
<tr>             
    <td><?=$no?></td>
    <td><?=$data_siswa['nama_siswa']?></td>
     <td><?=$data_siswa['tanggal_lahir']?></td> 
     <td><?=$data_siswa['alamat']?></td>
     <td><?=$data_siswa['gender']?></td>
     <td><?=$data_siswa['username']?></td> 
     <td><?=$data_siswa['nama_kelas']?></td>
     <td>
        <a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" class="btn btn-success">Ubah</a> | 
        <a href="hapus_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
    </td>

</tr>
<?php 
}
?>
</tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
crossorigin="anonymous">
</script>     
</body>
</html>