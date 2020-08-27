<?php
    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['id_resep'])) {
        $id = $_GET['id_resep'];
    }
        $sql = mysqli_query($conn,"SELECT * FROM tbl_resep ORDER BY id_resep ASC");

        $respone = array();
        $cek = mysqli_num_rows($sql);
        if ($cek) {
            $respone["resep"] = array();
            while ($row = mysqli_fetch_assoc($sql)) {
                $data = array();
                $data['id_resep'] = $row['id_resep'];
                $data['nama_resep'] = $row['nama_resep'];
                $data['detail'] = $row['detail'];
                $data['gambar'] = $row['gambar'];
                $respone['pesan'] = "berhasil Mengambil Data";
                $respone['sukses'] = "true";
                array_push($respone['resep'],$data);
            }
            echo json_encode($respone);
        }else{
            $respone['pesan'] = "Gagal Mengambil Resep";
            $respone['sukses'] = "False";
        }
    }else{
        echo json_encode(array('pesan' => "MEthod salah"));
    }

?>