<?php
    $koneksi = mysqli_connect("localhost", "root", "", "sekolah3");
    //"server", "user", "password", "nama database"
    // check connection

    if(mysqli_connect_error()){
        echo "Koneksi Database GAGAL : ". mysqli_connect_error();
    }
?>