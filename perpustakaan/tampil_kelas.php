<?php include 'navbar.php'; ?>
    

     <body>
        <h3>Data Kelas</h3>
        <a href="tambah_kelas.php"><input type ="submit" name="" value="tambah kelas" class="btn" style="background-color:Bisque;"></a>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                <th>N0</th> 
                <th>NAMA KELAS</th> 
                <th>KELOMPOK</th>
                <th>ANGKATAN</th> 
                <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
            <?php 

include "koneksi.php";

$qry_siswa=mysqli_query($conn,"select * from kelas ");

$no=0;

while($data_kelas=mysqli_fetch_array($qry_siswa)){

$no++;?>
<tr>             
    <td><?=$no?></td>
    <td><?=$data_kelas['nama_kelas']?></td>
     <td><?=$data_kelas['kelompok']?></td> 
     <td><?=$data_kelas['angkatan']?></td>
    
   <td>  <a href="hapus.php?id_kelas=<?=$data_kelas['id_kelas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
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

    