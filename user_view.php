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
                <li>View Cart</li>
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
            <span>V</span>iew
            <span>C</span>art</h3>
        <!-- //tittle heading -->
        <div class="row">
            <div class="container">
                <div class="row">
                <?php 
                    include 'Database/db.php';
					$sid = $_SESSION['user_id'];
                    $sl = "SELECT * FROM user_cart WHERE uid = '$sid'";
                    $rs = $db -> query($sl);
                    $n = $rs -> num_rows;
                ?>
                <h4 class="mb-sm-4 mb-3">Your shopping cart contains:
					<span><?php echo $n; ?> Products</span>
				</h4>
                    <table class="table">
                        <thead>
                            <th>Sl No.</th>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Quantity</th>
                            <th>Product Price</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </thead>
                        <tbody>
                            <?php
                                include 'Database/db.php';
                                $a = $_SESSION['user_id'];
                                $b = 0;
                                $total = 0;
                                $g_total = 0;
                                $sel = "SELECT * FROM user_cart WHERE uid = '$a'";
                                $res = $db -> query($sel);
                                while($data = $res -> fetch_assoc()){
                                    $b++;
                                    $x = $data['pid'];
                                    $xyz = (int)$data['p_price'];
                                    $abc = (int)$data['p_qty'];
                            ?>

                                <tr>
                                    <td><?php echo $b; ?></td>
                                    <td><?php echo $data['p_name']; ?></td>
                                    <td>
                                        <img src="UPLOAD IMAGES/<?php echo $data['p_img']; ?>" style="width: 60px;" alt="">
                                    </td>
                                    <td>
                                        <form action="user_controller.php" method="post">
                                            <input type="hidden" name="uid" value="<?php echo $a; ?>">
                                            <input type="hidden" name="pid" value="<?php echo $x; ?>">
                                            <input type="number" name="qty" class="form-control" min="1" max="5" value="<?php echo $abc; ?>" id=""><br>
                                            <input type="submit" value="Update Quantity" name="upd_qty" class="btn btn-success">
                                        </form>
                                    </td>
                                    <td><?php echo $xyz; ?></td>
                                    <td><?php $total = number_format($xyz * $abc); echo $total; ?></td>
                                    <td>
                                        <form action="user_controller.php" method="post">
                                            <input type="hidden" name="uid" value="<?php echo $a; ?>">
                                            <input type="hidden" name="pid" value="<?php echo $x; ?>">
                                            <input type="submit" value="Remove" name="product_delete" class="btn btn-danger" onclick="return confirm('Want TO Remove From Cart?');">
                                        </form>
                                    </td>
                                </tr>

                            <?php 
                                $g_total += (int)$total;
                                }
                            ?>
                            <tr>
                                <td>
                                    <?php echo "<h4>Number Of Items In Car Is:-$n</h4>"; ?>
                                </td>
                                <td colspan="3">
                                    <?php echo "<h4 class='text-center'>Grand Total: - $g_total</h4>"; ?>
                                </td>
                                <td colspan="2">
                                    <form action="user_controller.php" method="post">
                                        <input type="hidden" name="uid" value="<?php echo $a; ?>">
                                        <input type="submit" value="Remove All Items" name="full_del" class="btn btn-outline-danger" onclick="return confirm('Want To Remove All Items From Cart?');">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br><br>
                    <a href="user_checkout.php" class="btn btn-outline-success">Good To Go For CheckOut</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //about -->


    <!-- footer -->
	<?php include_once 'layouts/footer.php'; ?>