<?php
    //koneksi Database
    include 'koneksi.php';

    //Menangkap data yang dikirim dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];

    //Menginput data ke database
    mysqli_query($koneksi, "INSERT into siswa values('', '$nama', '$nim', '$alamat')");

    //Mengalihkan halaman kembali ke index.php
    header("location:index.php");
?>