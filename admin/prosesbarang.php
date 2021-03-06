<?php
    include '../koneksi/koneksi.php';
    include 'header.php';
?>
    

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Table Basic</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Table Basic</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down"> Upgrade to Pro</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                

                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Table</h4>
                                <h6 class="card-subtitle">Add class <code>.table</code></h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Merek</th>
                                                <th>Warna</th>
                                                <th>Ukuran</th>
                                                <th>Stok</th>
                                                <th>Jenis</th>
                                                <th>Gambar</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $nampildata=mysqli_query($koneksi, "SELECT * FROM stok")or die(mysqli_error($nampildata));

                                        if(mysqli_num_rows($nampildata)==0){
                                        echo'<tr>data kosong</tr>';
                                        }else{
                                        $no=1;
                                        while ($data=mysqli_fetch_assoc($nampildata)) {

                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $merek;?></td>
                                                <td><?php echo $warna['nama']?></td>
                                                <td><?php echo $ukuran['alamat']?></td>
                                                <td><?php echo $stok['no_hp']?></td>
                                                <td><?php echo $jenis['email']?></td>
                                                <td><?php echo $gambar['hobby']?></td>
                                                <td><?php echo"<img width='50px' src='../upload/".$data['foto']."'>";?></td> 
                                                <td><a href="../proses/proseshapusbiodata.php?id_biodata=<?php echo $data['id_biodata']?>" type="submit" class="btn btn-danger">Hapus </a></td>
                                            </tr>
                                        </tbody>
                                        <?php 
                                        $no++;
                                        }
                
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Adminwrap by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- jQuery peity -->
    <script src="assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="assets/node_modules/peity/jquery.peity.init.js"></script>
</body>

</html>