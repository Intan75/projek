<?php
include '../koneksi/koneksi.php';

if (isset ($_POST['regis'])){
    $id=md5(uniqid());
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $level="user";
    $email=$_POST['email'];


    $input_query=mysqli_query($koneksi,"insert into login values ('$id','$username','$password','$level','$email')") or die 
    (mysqli_error($input_query));

    if($input_query){
        echo "
        <script>alert('Data berhasil diinput dan silahkan login')
            window.location.href='../login.php'
        </script>";
    }else{
        echo 'tidak bisa login';
    }
}
?>