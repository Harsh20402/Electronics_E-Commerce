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
                <li>Change Password</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!-- tittle heading -->
                    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                        <span>C</span>hange
                        <span>P</span>assword
                    </h3>
                <!-- //tittle heading -->
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="user_controller.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $_SESSION['user_id']; ?>">
                    <table cellpadding="10">
                        <tr>
                            <td><b>Current Password</b></td>
                            <td>
                                <input type="password" name="cp" id="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>New Password</b></td>
                            <td>
                                <input type="password" name="np" id="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Confirm Password</b></td>
                            <td>
                                <input type="password" name="cfp" id="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Confirm</b></td>
                            <td>
                                <input type="reset" value="Refresh" name="" class="btn btn-info">&nbsp;&nbsp;
                                <input type="submit" value="Update Now" name="upd_password" class="btn btn-success">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>

    <!-- footer -->
	<?php include_once 'layouts/footer.php'; ?>