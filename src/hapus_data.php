<?php

    include 'koneksi.php';

    //cek status login
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
    }

    session_start();

    $id = $_GET['id'];

    $sql = "DELETE FROM `tb_pembayaran_zakat` WHERE `id_pembayaran` = $id";

    if (mysqli_query($koneksi, $sql)) { 
        header("location:list_data.php?pesan=berhasil_hapus_data");
    }else{ 
        header("location:list_data.php?pesan=gagal_hapus_data");
    }

?>