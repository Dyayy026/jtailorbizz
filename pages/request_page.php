<?php element('header1')?>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL ?>/assets/css/card.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
			$id = $row['id'];
			$user_id = $row['user_id'];
			$fname = $row['fname'];
			$lname = $row['lname'];
			$utype = $row['usertype'];
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
				<input type="hidden" <?php echo $row['id']?>>
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
					<button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-right: 20px;">Approve</button>
					<a href="reject_product.php?id=<?php echo $row['id']?>"><button class="btn btn-sm btn-outline-danger"  style="width: 70px;">Reject</button></a>
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

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Approve <?php echo $fname . ' ' .$lname?> ?</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
		<img src="<?php echo $new_str?>" alt="" class="rounded" width="30%"> <br>
	   <label for="">Name:</label>
	   <input type="text" class="form-control" value="<?php echo $fname .' '. $lname?> " readonly>
	   <label for="">ID:</label>
	   <input type="text" class="form-control" value="<?php echo $user_id?> " readonly>
	   <label for="">Position:</label>
	   <input type="text" class="form-control" value="<?php echo $utype?> " readonly>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
		<a href="approve_user.php?id=<?php echo $id?>"><button class="btn btn-outline-primary"  style="width: 100px;">Approve</button></a>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- END OF MODAL -->

