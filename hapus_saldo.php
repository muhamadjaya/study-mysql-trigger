<?php
require 'functions.php';
 
$id = $_GET["ID"];

if ( hapus_saldo($id) > 0 ) {
    echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href='kelola_saldo.php';
            </script>
        ";
      } else {
        echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href='kelola_saldo.php';
        </script>
        ";
}

?>