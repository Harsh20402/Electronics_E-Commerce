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
					<li>View CheckOut</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->



    <!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>C</span>heckout
			</h3>
			<!-- //tittle heading -->
			<div class="checkout-right">
				<h4 class="mb-sm-4 mb-3">Your shopping cart contains:
                <?php 
                    include 'Database/db.php';
					$sid = $_SESSION['user_id'];
                    $sl = "SELECT * FROM user_cart WHERE uid = '$sid'";
                    $rs = $db -> query($sl);
                    $n = $rs -> num_rows;
                ?>
					<span><?php echo $n ?> Products</span>
				</h4>
				<div class="table-responsive">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Product Name</th>
								<!-- <th>Product</th> -->
								<th>Quality</th>
								<th>Product Price</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
                            <?php 
                                include 'Database/db.php';
                                $slno = 0;
                                $t = 0;
								$gt = 0;
                                $sel = "SELECT * FROM user_cart WHERE uid = '$a'";
                                $res = $db -> query($sel);
                                while($data = $res -> fetch_assoc()){
                                    $slno++;
                                    $aa = (int)$data['p_qty'];
                                    $bb = (int)$data['p_price'];
                            ?>
                                
                                <tr>
                                    <td><?php echo $slno; ?></td>
                                    <td><?php echo $data['p_name']; ?></td>
                                    <td><?php echo $aa; ?></td>
                                    <td><?php echo $bb; ?></td>
                                    <td>
                                        <?php 
                                            $aaa = (int)$t = number_format($bb * $aa);
                                            echo $aaa;
                                        ?>
                                    </td>
                                </tr>

                            <?php
								$gt += $aaa;
									} 
							?>
							<tr>
								<td colspan="4"></td>
								<td>
									<?php echo "<h5>GRAND TOTAL IS: $gt</h5>"; ?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
            <div class="checkout-left">
				<div class="address_form_agile mt-sm-5 mt-4">
					<h4 class="mb-sm-4 mb-3">Add a new Details</h4>
					<?php 
						$select = "SELECT * FROM user_register WHERE user_id = '$a'";
						$result = $db -> query($select);
						$r = $result -> fetch_assoc();
                	?>
					<form action="user_controller.php" method="post" class="creditly-card-form agileinfo_form">
                    	<input type="hidden" name="id" value="<?php echo $sid; ?>">
						<div class="creditly-wrapper wthree, w3_agileits_wrapper">
							<div class="information-wrapper">
								<div class="first-row">
									<div class="controls form-group">
										<input class="billing-address-name form-control" type="text" name="name" value="<?php echo $r['full_name']; ?>" required="">
									</div>
									<div class="w3_agileits_card_number_grids">
										<div class="w3_agileits_card_number_grid_left form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Mobile Number" name="number" value="<?php echo $r['mobile']; ?>" required="">
											</div>
										</div>
										<div class="w3_agileits_card_number_grid_right form-group">
											<div class="controls">
												<input type="text" class="form-control" placeholder="Landmark" name="landmark" required="">
											</div>
										</div>
									</div>
									<div class="controls form-group">
										<input type="text" class="form-control" placeholder="Town/City" name="city" required="">
									</div>
									<div class="controls form-group">
										<select class="option-w3ls" name="address">
											<option>Select Address type</option>
											<option>Office</option>
											<option>Home</option>
											<option>Commercial</option>

										</select>
									</div>
								</div>
								<button class="submit check_out btn" name="order">Delivery to this Address</button>
							</div>
						</div>
					</form>
					
				</div>
			</div>
        </div>
    </div>

        <!-- footer -->
	<?php include_once 'layouts/footer.php'; ?>