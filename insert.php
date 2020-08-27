<?php
    include 'koneksi.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama_resep = $_POST['nama_resep'];
        $detail = $_POST['detail'];
        $gambar = $_POST['gambar'];

        $query = "INSERT INTO tbl_resep(nama_resep,detail,gambar) VALUES('$nama_resep','$detail','$gambar')";

        $execQuery = mysqli_query($conn,$query);

        echo ($execQuery) ? json_encode(array('kode' => 1,'pesan' => 'Berhasil Menambahkan Data' ))
        : json_encode(array('kode' => 2,'pesan' => 'gagal Menambah Data' ));
    }
    else{
        echo json_encode(array('kode' => 101,'pesan' => 'Request Tidak Valid' ));
    }