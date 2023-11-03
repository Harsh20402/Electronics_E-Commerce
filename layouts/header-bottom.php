	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.html" class="font-weight-bold font-italic">
							<img src="images/logo2.png" alt=" " class="img-fluid">Electro Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<?php 

									if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){ 

										$a = $_SESSION['user_id'];
										
										include 'Database/db.php';
										$sel = "SELECT * FROM user_cart WHERE uid = '$a'";
										$res = $db -> query($sel);
										$no = $res -> num_rows;
										
										echo "
											<i class=\"fas fa-cart-arrow-down btn w3view-cart\" style=\"font-size:20px;\"><span style=\"position: absolute;
											top: -10px;
											color:white;
											border-radius: 50%;
											background: red;
											padding: 7px; font-size:14px; font-weight:800;\">$no</span></i>
										";
									} else {
										echo "						
											<form action=\"#\" method=\"post\" class=\"last\">
												<input type=\"hidden\" name=\"cmd\" value=\"_cart\">
												<input type=\"hidden\" name=\"display\" value=\"1\">
												<button class=\"btn w3view-cart\" type=\"submit\" name=\"submit\" value=\"\">
													<i class=\"fas fa-cart-arrow-down\"></i>
												</button>
											</form>
										";
									}
							    ?>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->