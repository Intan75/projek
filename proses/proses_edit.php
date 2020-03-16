<?php
include'../koneksi/koneksi.php';

if(isset($_GET['update'])){
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

    $update =mysqli_query($koneksi,"UPDATE alamat SET first='$first',last_name='$last',country='$country',address='$address',postcode='$postcode',town='$town',province='$province',phone_no='$phone',email='$email' WHERE id='$id'")
    or die(mysqli_error($update));
    
    if($update){
        echo'
            <script>alert("data berhasil diupdate");
            window.location.href="../index.php"
            </script>
        ';
    }else{
        echo'
        <script>alert("data gagal diupdate");
        window.location.href="../checkout.php"
        </script>
    ';
    }


}

?>