<?php
    // session_start();
    include '../koneksi/koneksi.php';
    


    if(isset($_POST['tambah'])){
        $username=$_POST['user'];
        $password=md5($_POST['pass']);

        // ini adalah query
        $login=mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");

        // ini adalah pengecekan
        $cek=mysqli_num_rows($login);
        // menampilkan definisi data
        $data=mysqli_fetch_assoc($login);

        if($cek>0){
            if($data['level']=="penjual"){
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['status']='login';

                echo"<script>
                alert('Selamat Datang Penjual');
                window.location ='../admin/index.php';
                </script>";
            }else if($data['level']=="pembeli"){
                $_SESSION['username']=$data['username'];
                $_SESSION['level']=$data['level'];
                $_SESSION['status']='login';

                echo"<script>
                alert('Selamat Datang Pembeli')
                window.location.href='../index.php';
                </script>";
            }
        }else{
            echo'<script>alert("username dan password salah!")
                window.location.href="../login.php";
            </script>';
        }
    }





?>