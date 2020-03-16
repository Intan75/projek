<?php

include'../koneksi/koneksi.php';

            if(isset($_GET['id_user'])){
                $id=$_GET['id_user'];

                $hapus=mysqli_query($koneksi,"DELETE FROM login WHERE id_user='$id'")or die(mysqli_error($hapus));

                if($hapus){
                    echo"
                    <script>alert('Data berhasil dihapus')
                        window.location.href='../admin/table_biodata.php'
                    </script>";
                }else{
                    echo'data gagal dihapus';
                }
            
            }
?>