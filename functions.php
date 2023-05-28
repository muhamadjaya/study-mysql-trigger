<?php
$conn = mysqli_connect("localhost","root","","db_kas");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah_saldo($data) {
    global $conn; 
    $id = strip_tags($data["id"]);
    $nama = strip_tags($data["nama"]);
    $saldo = strip_tags($data["saldo"]);

     $query = "INSERT INTO saldo
                VALUES
            ('$id', '$nama', '$saldo')
            ";
     
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}


function hapus_saldo($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM saldo WHERE id = '$id'");

    return mysqli_affected_rows($conn);
}


function ubah_saldo($data) {
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $saldo = htmlspecialchars($data["saldo"]);

     $query = "UPDATE saldo SET
                nama = '$nama', 
                saldo = '$saldo'
                WHERE id = '$id'
            ";
     
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}



function tambah_transaksi($data) {
    global $conn; 
    date_default_timezone_set("Indonesia/Jakarta");
    $id = strip_tags($data["id"]);
    $nominal = strip_tags($data["nominal"]);
    $jenis = strip_tags($data["jenis"]);
    $tanggal = strip_tags($data["tanggal"]);

    $tgl = date("Y-m-d H:i:s");

     $query = "INSERT INTO transaksi
                VALUES
            ('$id', '$nominal', '$jenis', '$tanggal')
            ";

        
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}


function ubah_transaksi($data) {
    global $conn;
    $id = $data["id"];
    $nominal = htmlspecialchars($data["nominal"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $tanggal = strip_tags($data["tanggal"]);



     $query = "UPDATE transaksi SET
                nominal = '$nominal', 
                jenis = '$jenis'
                WHERE id = '$id' AND tanggal = '$tanggal'
            ";
     
     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}


function hapus_transaksi($id, $tanggal) {
    global $conn;
    mysqli_query($conn, "DELETE FROM transaksi WHERE id = '$id' AND tanggal = '$tanggal'");

    return mysqli_affected_rows($conn);
}



?>