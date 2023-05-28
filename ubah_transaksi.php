<?php
require 'functions.php';

$Tanggal = $_GET["Tanggal"];
$datatransaksi = query("SELECT * FROM transaksi WHERE Tanggal = '$Tanggal'")[0];
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

    <title>KAS App</title>
  </head>
  <body>
 
  <?php
  if( isset($_POST["submit"]) ) {
      if( ubah_transaksi($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href='kelola_transaksi.php';
            </script>
        ";
      } else {
        echo mysqli_error($conn);
      }
  }
  ?>


 <!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm " 
    style="background-color: #ffffff" >
    <div class="container" style="font-family: 'Manrope', sans-serif; font-weight: bold;">
      <a class="navbar-brand" href="index.php">
        KAS App
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-2 mb-2 h5" id="navbarNavDropdown">
        <ul class="navbar-nav ">
        <li class="nav-item ">
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

       <!-- form -->
      <section class="ubahdatatransaksi mb-5 pb-5 mt-5 pt-5" style="height: 100vh">>
    <div class="container" style="font-family: 'Manrope', sans-serif;">
    
    <div class="row ">
      <div class="col-md-6">
        <form action="" method="post" enctype="multipart/form-data">
        

        <div class="form-group row justify-content-center">
            <label for="id" class="col-sm-3 col-form-label">ID </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="id" id="id" required readonly value="<?= $datatransaksi["ID"]; ?>">
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="nominal" class="col-sm-3 col-form-label">Nominal </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="nominal" id="nominal" required value="<?= $datatransaksi["Nominal"]; ?>">
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="enis" class="col-sm-3 col-form-label">Jenis</label>
            <div class="col-sm-8">
              <select class="form-control" name="jenis" id="jenis">
                <?php
                    if ($datatransaksi["Jenis"]=="Debet") {
                      $select="selected";
                    $debet="Debet";
                    $kkredit="Kredit";
                     echo "<option $select value=".$debet.">Debet</option><option value=".$kkredit.">Kredit</option>";
                    }else {
                      $select="selected";
                    $debet="Debet";
                    $kkredit="Kredit";
                      echo "<option value=".$debet.">Debet</option><option $select value=".$kkredit.">Kredit</option>";
                    }                 
                ?>
              </select>
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-8">
                <input type="datetime-local" class="form-control" name="tanggal" id="tanggal" required readonly autocomplete="off" value="<?= $datatransaksi["Tanggal"]; ?>">
            </div>
        </div>
           


        <div class="form-group row justify-content-center">
            <div class="col-sm-3"></div>
            <div class="col-sm-8">
                <button type="submit" name="submit" class="btn btn-primary" style="width: 25%;">Ubah</button>
                <a href="kelola_transaksi.php" class="btn btn-danger" style="width: 25%;">Batal</a>
            </div>
        </div>
        </form>
      </div>

    </div>
    </div>
    </section>
   <!-- akhir form -->

       <!-- footer -->
       <footer class="text-white bg-secondary" style="font-family: 'Manrope', sans-serif;">
      <div class="container">
        <div class="row pt-3">
          <di class="col text-center">
          <p>Created by Muhamad Jaya</p>
          </di>
        </div>
      </div>
    </footer>
   <!-- akhir footer -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>