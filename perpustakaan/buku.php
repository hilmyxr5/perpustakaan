<?php 

    include "header.php";

?>

<h2>Daftar Buku</h2>
<a href="tambah_buku.php"><input type ="submit" name="" value="tambah buku" class="btn" style="background-color:Bisque;"></a> <br><br>
<div class="row">

    <?php 

    include "koneksi.php";

    $qry_buku=mysqli_query($conn,"select * from buku");

    while($dt_buku=mysqli_fetch_array($qry_buku)){

        ?>

        <div class="col-md-3">

        <div class="card" >

        <img src="fotobuku/<?=$dt_buku['foto']?>" style="width:200px;height:200px; class="card-img-top">

              <div class="card-body">

                <h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>

                <p class="card-text"><?=substr($dt_buku['deskripsi'], 0,20)?></p>

                <a href="pinjam_buku.php?id_buku=<?=$dt_buku['id_buku']?>"  class="btn btn-primary">Pinjam</a>

              </div>

            </div>

        </div>

        <?php

    }

    ?>

</div>

<?php 

    include "footer.php";

?>