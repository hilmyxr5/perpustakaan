<?php 

session_start();

    if($_SESSION['status_login']!=true){

        header('location: login.php');

    }

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perpustakaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    </a>
  </div>
</nav>
<nav class="navbar navbar-expand-lg"style=background-color:black;">
  <div class="container-fluid">
  

    <a class="navbar-brand text-warning" href="#">Perpustakaan</a>
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> -->
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Example split danger button -->
<div class="btn-group">
  
  <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
    <span class="visually-hidden">Menu</span>
  </button>
  <ul class="dropdown-menu">
    
    <li><a class="dropdown-item" href="tampil_kelas.php">Data kelas</a></li>
    <li><a class="dropdown-item" href="tampil_siswa.php">Data siswa</a></li>
    <li><a class="dropdown-item" href="header.php">Back</a></li>
    <li><hr class="dropdown-divider"></li>
    
  </ul>
</div>

      <li class="divider"></li>
      
      
    </div>
  </div>
</nav>
</html>