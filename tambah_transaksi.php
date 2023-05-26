<?php
require 'functions.php';
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
  // cek tombol submit
  if( isset($_POST["submit"]) ) {
      // cek insert
      if( tambah_transaksi($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href='kelola_transaksi.php';
            </script>
        ";
      } else {
      echo mysqli_error($conn);
      echo "<br>";
      echo var_dump(mysqli_affected_rows($conn));       
      }
  }

  ?>
   <!-- form -->
    <section class="tambahdatatransaksim mb-5 pb-5 mt-5 pt-5" style="min-height: 530px">
    <div class="container" style="font-family: 'Manrope', sans-serif;">
    <div class="row justify-content-between">
      <div class="col-md-6 mt-5" >
        <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group row justify-content-start">
            <label for="id" class="col-sm-3 col-form-label">ID</label> 
            <div class="col-sm-8">
                <input type="text" class="form-control" name="id" id="id" required autocomplete="off">
            </div>
        </div>

        <div class="form-group row justify-content-start">
            <label for="nominal" class="col-sm-3 col-form-label">Nominal</label> 
            <div class="col-sm-8">
                <input type="number" class="form-control" name="nominal" id="nominal" required autocomplete="off">
            </div>
        </div>

        <div class="form-group row justify-content-start">
            <label for="jenis" class="col-sm-3 col-form-label">Jenis</label>
            <div class="col-sm-8">
                <select class="form-control" name="jenis" id="jenis">
                  <option value="Debet">Debet</option>
                  <option value="Kredit">Kredit</option>
                </select>
            </div>
        </div>

        <!-- <div class="form-group row justify-content-start">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" name="tanggal" id="tanggal" required autocomplete="off">
            </div>
        </div> -->

        <div class="form-group row justify-content-start">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-8">
                <input type="datetime-local" class="form-control" name="tanggal" id="tanggal" required autocomplete="off">
            </div>
        </div>
           

        <div class="form-group row justify-content-start">
            <div class="col-sm-3"></div>
            <div class="col-sm-8">
                <button type="submit" name="submit" class="btn btn-primary" style="width: 25%;">Simpan</button>
                <a href="kelola_transaksi.php" class="btn btn-danger" style="width: 25%;">Batal</a>
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