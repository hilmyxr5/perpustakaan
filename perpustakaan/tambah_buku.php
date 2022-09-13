<?php include 'navbar.php'; ?>
<h3>Tambah buku</h3>

<form action="proses_tambah_buku.php" method="post">

    foto :

    <input type="file" name="foto_buku" value="" class="form-control">

    nama buku :

    <input type="text" name="nama_buku" value="" class="form-control">

    Deskripsi :

    <input type="text" name="deskripsi" value="" class="form-control">

    <br>
    
    <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-primary">

</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>