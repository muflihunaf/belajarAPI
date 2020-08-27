<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id_resep = $_POST['id_resep'];
        $query = mysqli_query($conn,"DELETE FROM tbl_resep WHERE id_resep = '$id_resep' ");

        echo ($query) ? json_encode(array('kode'=>1,'pesan' => 'berhasil Menghapus data')) : json_encode(array('kode'=> 2, 'pesan' => 'Gagal Menghapus Data'));
    }else{
        echo json_encode(array('pesan'=> 'Wrong Method'));
    }
?>