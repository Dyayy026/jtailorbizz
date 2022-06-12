<?php element('header1')?>

<!-- css para maging scrollable ang table -->
<style>
	.my-custom-scrollbar {
	position: relative;
	height: 310px;
	overflow: auto;
	}
	.table-wrapper-scroll-y {
	display: block;
	}
</style>

<div class="col-md-4">
<div class="register" style="width: 100%; padding: 20px;margin-bottom: -30px; color: white; margin-top:20px; background-color:#B23CFD;">
	<form  method="POST">
	<input type="hidden" name="action" value="add_customer">
		<div class="col-md-12">
		
		<div class="mb-3">
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="First Name"  name="cust_fname" required>
		</div>
		<div class="mb-3">
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Middle Name"  name="cust_mname" required>
		</div>
		<div class="mb-3">
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name"  name="cust_lname" required>
		</div>

		<div class="mb-3">
			<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Contact Number"  name="cust_cnum" required>
		</div>
		<div class="mb-3">
			<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address"  name="cust_address" required>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Add Customer</button>
		</div>
	</div>
	</div>
	</form>


<div class="col-md-8">
<h3 style="margin-top: 10px;"><strong>Customer</strong></h3>
<div class="table-wrapper-scroll-y my-custom-scrollbar">
<table class="table table-bordered table-striped mb-0">
  <thead>
	<tr>
	  <th scope="col">Customer ID</th>
	  <th scope="col">First Name</th>
	  <th scope="col">Last Name</th>
	  <th scope="col">Contact Number</th>
	  <th scope="col">Address</th>
	  <th scope="col">Action</th>
	</tr>
  </thead>
  <tbody>
	<tr>
	<td> 1</td>
	  <td>Harris</td>
	  <td>Mark</td>
	  <td>012346</td>
	  <td>Laguna</td>
	  <td>
		<button>Edit</button>
		<button>Delete</button>
	</td>
	</tr>
	
  </tbody>
</table>

</div>
</div>


<?php element('footer1')?>