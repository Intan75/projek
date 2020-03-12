<?php
    $server="localhost";
    $username="root";
    $pass="";
    $db="tugas";
    $koneksi=mysqli_connect ($server,$username,$pass,$db) or die (mysqli_error($koneksi));


    if($koneksi){
        // echo"database berhasil terkoneksi";
    }else if(!$koneksi){
        die('koneksi gagal '.mysqli_connect_error());
    }

?>