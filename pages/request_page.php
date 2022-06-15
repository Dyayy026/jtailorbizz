<?php element('header1')?>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL ?>/assets/css/card.css">
<style>
    .btn-side-button{
        width: 250px;
    }
    .my-custom-scrollbar {
	position: relative;
	height: 310px;
	overflow: auto;
	}
	.table-wrapper-scroll-y {
	display: block;
	}
</style>
<div class="col-md-3">
    <div class="register">
    <button class="btn btn-primary mb-3 btn-side-button">Requests</button>
    <button class="btn btn-success mb-3 btn-side-button">Approved</button>
    <button class="btn btn-danger mb-3 btn-side-button">Denied</button>
    </div>
</div>

	<!-- this is for view customer -->
<div class="col-md-9 request-container" style="overflow:scroll; height:400px;">
<h3 style="margin-top: 10px;"><strong>Requests</strong></h3>

<?php
		$sql = "SELECT * FROM users WHERE status = 'Pending' ORDER BY id DESC";
		$result = mysqli_query($DB, $sql);

		

		while($row = mysqli_fetch_assoc($result)){
			$str = "./assets/pics/" . $row['photo'];
			$new_str = str_replace(' ', '', $str);
		?>
		<!-- THIS IS CARD -->

		<div class="card-container">
		<div class="container mt-5 d-flex justify-content-center">
			<div class="card p-3">
				<div class="d-flex align-items-center">
						<div class="image">
						<img src="<?php echo $new_str?>" class="rounded" width="100"  >
						</div>
				<div class="ml-3 w-100">
				<h4 class="mb-0 mt-0"><?php echo $row['fname']?></h4>
				<span><i><?php echo $row['eadd']?></i></span>
				<div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
					<div class="d-flex flex-column">
						<span class="articles">Request Date</span>
						<span class="number1"><?php echo $row['date_created']?></span>
					</div>
					<div class="d-flex flex-column">
						<span class="followers">Status</span>
						<span class="number2"><?php echo $row['status']?></span>
					</div>
					<div class="d-flex flex-column">
						<span class="rating">User ID</span>
						<span class="number3"><?php echo $row['user_id']?></span>
					</div>
				</div>
				<div class="button mt-2 d-flex flex-row align-items-center">
					<a href="update_product.php?id=<?php echo $row['id']?>" ><button class="btn btn-sm btn-outline-primary" style="background-color: teal;">Approve</button></a>
					<a href="reject_product.php?id=<?php echo $row['id']?>"><button class="btn btn-sm btn-outline-primary">Reject</button></a>
				</div>
				</div>
				</div>
			</div>
			</div>
			</div>
		<?php
		}
		?>
</div>
<?php element('footer1')?>


