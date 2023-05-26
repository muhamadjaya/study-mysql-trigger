<?php
require 'functions.php';
$datatransaksi = query("SELECT * FROM transaksi");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">


    <title>KAS</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm " 
    style="background-color: #ffffff" >
    <div class="container" style="font-family: 'Manrope', sans-serif;">
      <a class="navbar-brand" href="#">
        KAS
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-2 mb-2 h5" id="navbarNavDropdown">
        <ul class="navbar-nav ">
        <li class="nav-item">
            <a class="nav-link " href="kelola_saldo.php">Kelola Saldo</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link " href="kelola_transaksi.php">Kelola Transaksi</a>
        </li>

      </ul>
      </div>
      </div>
    </nav>
    <!-- akhir navbar -->


   <!-- kelola transaksi -->
   <br> <br> <br>
    <section class="kelolatransaksi mb-5" style="min-height: 510px">
    <div class="container" style="font-family: 'Manrope', sans-serif;">

    <div class="row">
      <div class="col-md-12">
        <br> <br>
        <a href="tambah_transaksi.php" class="btn btn-primary ml-auto">Tambah Data Transaksi</a>
        <br><br>

        <table class="table table-bordered table-hover table-responsive-md" id="example">
          <thead class="thead-dark text-center">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">ID</th>
                <th scope="col">Nominal</th>
                <th scope="col">Jenis</th>
                <th scope="col">Tanggal</th>
                <th scope="col" style="width: 166px;">Aksi</th>
            </tr>
          </thead>
            <tbody>
            <?php $i = 1; ?>
            <?php foreach( $datatransaksi as $row ) : ?>
            <tr>
                <th class="text-center" scope="row">
                    <?= $i; ?>
                </th>
               
                <td>
                    <?= $row["ID"]; ?>
                </td>

                <td>
                    <?= $row["Nominal"]; ?>
                </td>
                
                <td>
                    <?= $row["Jenis"]; ?>
                </td>

                <td>
                    <?= $row["Tanggal"]; ?>
                </td>
               
                <td>
                    <a href="ubah_transaksi.php?id=<?= $row["ID"]; ?>" class="btn btn-warning">Ubah</a>
                    <a href="hapus_transaksi.php?id=<?= $row["ID"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data ini?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    </div>
    </div>
    </section>
   <!-- akhir kelola transaksi -->


   <!-- footer -->
    <footer class="text-white bg-secondary" style="font-family: 'Manrope', sans-serif;">
      <div class="container">
        <div class="row pt-3">
          <di class="col text-center">
            <p>copyright 2023.</p>
          </di>
        </div>
      </div>
    </footer>
   <!-- akhir footer -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>

  </body>
</html>
