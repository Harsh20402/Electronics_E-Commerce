<!-- head -->
<?php include_once 'layouts/head.php'; ?>

	<!-- top-header -->
	<?php include_once 'layouts/top-header.php'; ?>

	<!-- header-bottom-->
	<?php include_once 'layouts/header-bottom.php'; ?>

	<!-- navigation -->
	<?php include_once 'layouts/navigation.php'; ?>

    	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

</div>
<!-- //banner-2 -->
<!-- page -->
<div class="services-breadcrumb">
    <div class="agile_inner_breadcrumb">
        <div class="container">
            <ul class="w3_short">
                <li>
                    <a href="index.php">Home</a>
                    <i>|</i>
                </li>
                <li>Payment</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

<!-- about -->
<div class="welcome py-sm-5 py-4">
    <div class="container py-xl-4 py-lg-2">
        <!-- tittle heading -->
        <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
            <span>P</span>ay
            <span>M</span>ent</h3>
        <!-- //tittle heading -->
        <div class="row">
            <table class="table">
                <thead>
                    <th>SL No.</th>
                    <th>User Name</th>
                    <th>Mobile No.</th>
                    <th>Landmak</th>
                    <th>Town</th>
                    <th>Address</th>
                    <th>Products</th>
                    <th>Total Price</th>
                    <th></th>
                </thead>
                <tbody>
                    <?php 
                        include 'Database/db.php';
                        $a = $_SESSION['user_id'];
                        $b = 0;
                        $sel = "SELECT * FROM ORDERS WHERE uid = '$a'";
                        $rs = $db -> query($sel);
                        while($data = $rs -> fetch_assoc()){
                            $b++;
                    ?>

                        <tr>
                            <td><?php echo $b; ?></td>
                            <td><?php echo $data['u_name']; ?></td>
                            <td><?php echo $data['mobile']; ?></td>
                            <td><?php echo $data['landmark']; ?></td>
                            <td><?php echo $data['town']; ?></td>
                            <td><?php echo $data['address']; ?></td>
                            <td><?php echo $data['t_product']; ?></td>
                            <td><?php echo $data['t_price']; ?></td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?php echo $a; ?>">
                                    <input type="submit" value="Cancel Order" name="order_cancel" class="btn btn-outline-danger" onclick="return confirm('Want To Cancel Order?');">
                                </form></form>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
            <div class="checkout-right-basket">
						<a href="payment.html">Make a Payment
							<span class="far fa-hand-point-right"></span>
						</a>
					</div>
        </div>
    </div>
</div>
<!-- //about -->

    <!-- footer -->
	<?php include_once 'layouts/footer.php'; ?>