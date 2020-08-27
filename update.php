<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_resep = $_POST['id_resep'];
        $nama_resep = $_POST['nama_resep'];
        $detail = $_POST['detail'];
        $gambar = $_POST['gambar'];
        $query = mysqli_query($conn,"UPDATE tbl_resep SET nama_resep = '$nama_resep', detail = '$detail', gambar = '$gambar' WHERE id_resep = '$id_resep' ");

        echo ($query) ? json_encode(array('kode' => 1, 'pesan' => 'Data Berhasil Diupdate' )) : json_encode(array('kode' => 2, 'pesan' => 'Gagal Update Data'));
    }else{
        echo json_encode(array('kode' => '402', 'pesan' => 'Method Salah'));
    }