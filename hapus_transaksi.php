<?php
require 'functions.php';
 
$id = $_GET["ID"];
$tanggal = $_GET["Tanggal"];

if ( hapus_transaksi($id, $tanggal) > 0 ) {
    echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href='kelola_transaksi.php';
            </script>
        ";
      } else {
        echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href='kelola_transaksi.php';
        </script>
        ";
}

?>