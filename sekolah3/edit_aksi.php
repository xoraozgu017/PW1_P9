<?php
    //Koneksi database
    include 'koneksi.php';

    //Menangkap data yang dikrim dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];

    //update data ke database
    mysqli_query($koneksi, "UPDATE siswa set nama='$nama', nim='$nim', alamat='$alamat' where id='$id'");

    //Mengalihkan halaman kembali ke index.php
    header("location:index.php");
?>