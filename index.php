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
        <li class="nav-item">
            <a class="nav-link " href="kelola_saldo.php">Kelola Saldo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="kelola_transaksi.php">Kelola Transaksi</a>
        </li>

      </ul>
      </div>
      </div>
    </nav>
    <!-- akhir navbar -->


   <!-- Content -->
    <section class="content" style="height: 100vh">
    <div class="container" style="font-family: 'Manrope', sans-serif;">
    <div class="row justify-content-between">
      
      <div class="col-md-6" style="padding-top: 100px;" >
        <h1 class="pt-5">Selamat Datang di KAS App,</h1>
        <p>Catat pemasukan dan pengeluaran uangmu secara rinci disini.</p>
        <br>
        <br>
        <a href="kelola_saldo.php" class="btn btn-primary">Tambah Saldo Sekarang</a>
      </div>
    </div>
    </div>
    </section>
   <!-- akhir Content -->


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