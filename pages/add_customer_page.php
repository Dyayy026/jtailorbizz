<?php element('header1')?>

<div class="register" style="width: 30%; padding: 20px; color: white; margin-top:20px; background-color:#B23CFD;">
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
</div>


<?php element('footer1')?>