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
                <li>Update Profile</li>
            </ul>
        </div>
    </div>
</div>
<!-- //page -->

<?php 

    include 'Database/db.php';

    $req = $_GET['id'];

    $sel = "SELECT * FROM user_register WHERE user_id = '$req'";
    $res = $db -> query($sel);
    $dt = $res -> fetch_assoc();

?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <!-- tittle heading -->
                    <h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
                        <span>U</span>pdate
                        <span>P</span>rofile
                    </h3>
                <!-- //tittle heading -->
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="user_controller.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $dt['user_id']; ?>">
                    <table cellpadding="10">
                        <tr>
                            <td><b>User Name</b></td>
                            <td>
                                <input type="text" name="unm" value="<?php echo $dt['full_name'];?>" id="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Email</b></td>
                            <td>
                                <input type="email" name="em" value="<?php echo $dt['email'];?>" id="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Mobile</b></td>
                            <td>
                                <input type="text" name="mb" value="<?php echo $dt['mobile'];?>" id="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Images</b></td>
                            <td>
                                <input type="file" name="img" id="">
                            </td>
                            <td>
                                <img src="UPLOAD IMAGES/<?php echo $dt['image'];?>" style="width: 80px;" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td><b>Confirm</b></td>
                            <td>
                                <input type="reset" value="Refresh" name="" class="btn btn-info">&nbsp;&nbsp;
                                <input type="submit" value="Update Now" name="upd_profile" class="btn btn-success">
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