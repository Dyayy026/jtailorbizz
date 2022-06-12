<?php element('header1')?>
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
    <div class="register" style="width: 100%; padding: 20px;margin-bottom: -30px; color: white; margin-top:20px; background-color:#B23CFD;">
    <button class="btn btn-primary mb-3 btn-side-button">Requests</button>
    <button class="btn btn-success mb-3 btn-side-button">Approved</button>
    <button class="btn btn-danger mb-3 btn-side-button">Denied</button>
    </div>
</div>
<div class="col-md-9">
<h3 style="margin-top: 10px;"><strong>Requests</strong></h3>
<div class="table-wrapper-scroll-y my-custom-scrollbar">
<table class="table table-bordered table-striped mb-0">
  <thead>
	<tr>
	  <th scope="col">User ID</th>
	  <th scope="col">Full Name</th>
	  <th scope="col">Contact Number</th>
	  <th scope="col">Email Address</th>
	  <th scope="col">Status</th>
	  <th scope="col">Action</th>
	</tr>
  </thead>
  <tbody>
	
	<!-- this is for view customer -->
	<?php
		$sql = "SELECT * FROM customer_tb ORDER BY cust_id DESC";
		$result = mysqli_query($DB, $sql);

		while($row = mysqli_fetch_assoc($result)){

		?>
		<tr>
		<td><?php echo $row['cust_id'];?></td>
		<td><?php echo $row['cust_fname'];?></td>
		<td><?php echo $row['cust_lname'];?></td>
		<td><?php echo $row['cust_cnum'];?></td>
		<td><?php echo $row['cust_address'];?></td>
		<td>
			<button class="btn btn-primary">
				View
			</button>
		</td>
		</tr>
		<?php
		}
		?>
	
  </tbody>
</table>

</div>
</div>
<?php element('footer1')?>