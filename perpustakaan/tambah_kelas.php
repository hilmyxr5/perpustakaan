<?php include 'navbar.php'; ?>
<h3>Tambah Kelas</h3>

<form action="proses_tambah_kelas.php" method="post">

    Nama :

    <input type="text" name="nama_kelas" value="" class="form-control">

    Kelompok :

    <input type="text" name="kelompok" value="" class="form-control">

    Angkatan :

    <input type="number" name="angkatan" value="" class="form-control">

    <br>
    
    <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-primary">

</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>