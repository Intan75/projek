<?php
include '../koneksi/koneksi.php';

if (isset ($_POST['submit'])){
    $id=md5(uniqid());
    $first=$_POST['first'];
    $last=$_POST['last'];
    $country=$_POST['country'];
    $address=$_POST['address'];
    $postcode=$_POST['postcode'];
    $town=$_POST['town'];
    $province=$_POST['province'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];


    $input_query=mysqli_query($koneksi,"insert into alamat values ('$id','$first','$last','$country','$address','$postcode','$town','$province','$phone','$email')") or die 
    (mysqli_error($input_query));

    if($input_query){
        echo "
        <script>alert('Thanks for order dear!')
            window.location.href='../index.php'
        </script>";
    }else{
        echo 'tidak bisa order';
    }
}
?>