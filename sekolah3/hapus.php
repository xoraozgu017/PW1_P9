<?php
    //koneksi database
    include 'koneksi.php';

    //menangkap data id yang dikirm dari url
    $id = $_GET['id'];

    //menghapus data dari database
    mysqli_query($koneksi, "DELETE from siswa where id='$id'");

    //mengalihkan halaman kembali ke index.php
    header("location:index.php");
?>