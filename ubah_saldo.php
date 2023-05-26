<?php
require 'functions.php';

// ambil data di url
$id = $_GET["ID"];
$datasaldo = query("SELECT * FROM saldo WHERE ID = '$id'")[0];
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

    <title>KAS</title>
  </head>
  <body>
 
  <?php
  // cek tombol submit apakah berhasil diubah
  if( isset($_POST["submit"]) ) {
      // cek insert
      if( ubah_saldo($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href='kelola_saldo.php';
            </script>
        ";
      } else {
        echo mysqli_error($conn);
      }
  }
  ?>

       <!-- form -->
      <section class="datasaldo mb-5 pb-5 mt-5 pt-5">
    <div class="container" style="font-family: 'Manrope', sans-serif;">
    
    <div class="row ">
      <div class="col-md-6">
        <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $datasaldo["ID"]; ?>">  

        <div class="form-group row justify-content-center">
            <label for="nama" class="col-sm-3 col-form-label">Nama </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="nama" id="nama" required value="<?= $datasaldo["Nama"]; ?>">
            </div>
        </div>

        <div class="form-group row justify-content-center">
            <label for="saldo" class="col-sm-3 col-form-label">Saldo </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="saldo" id="saldo" required value="<?= $datasaldo["Saldo"]; ?>">
            </div>
        </div>


        <div class="form-group row justify-content-center">
            <div class="col-sm-3"></div>
            <div class="col-sm-8">
                <button type="submit" name="submit" class="btn btn-primary" style="width: 25%;">Ubah</button>
                <a href="kelola_saldo.php" class="btn btn-danger" style="width: 25%;">Batal</a>
            </div>
        </div>
        </form>
      </div>

    </div>
    </div>
    </section>
   <!-- akhir form -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>