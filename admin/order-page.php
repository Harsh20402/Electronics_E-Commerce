<!-- Heade -->
<?php include_once 'layouts/head.php'; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include_once 'layouts/side_bar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include_once 'layouts/top_menu.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Orders Table</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Mobile</th>
                                            <th>Landmark</th>
                                            <th>Town</th>
                                            <th>Address</th>
                                            <th>Total Product</th>
                                            <th>Total Price</th>
                                            <th>Created At</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include '../Database/db.php';
                                            $sel = "SELECT * FROM orders";
                                            $res = $db -> query($sel);
                                            while($dt = $res -> fetch_assoc()){
                                        ?>

                                            <tr>
                                                <td><?php echo $dt['u_name']; ?></td>
                                                <td><?php echo $dt['mobile']; ?></td>
                                                <td><?php echo $dt['landmark']; ?></td>
                                                <td><?php echo $dt['town']; ?></td>
                                                <td><?php echo $dt['address']; ?></td>
                                                <td><?php echo $dt['t_product']; ?></td>
                                                <td><?php echo $dt['t_price']; ?></td>
                                                <td><?php echo $dt['created_at']; ?></td>
                                                <td>
                                                    <form action="product_controller.php" method="post">
                                                        <select name="" id="">
                                                            <option value="Pending" selected>--Pending--</option>
                                                            <option value="Processing" >--Processing--</option>
                                                            <option value="Deliver" >--Deliver--</option>
                                                        </select>
                                                    </form>
                                                </td>
                                            </tr>

                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>User Name</th>
                                            <th>Mobile</th>
                                            <th>Landmark</th>
                                            <th>Town</th>
                                            <th>Address</th>
                                            <th>Total Product</th>
                                            <th>Total Price</th>
                                            <th>Created At</th>
                                            <th>Status</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once 'layouts/footer.php'; ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>