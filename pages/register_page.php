<?php element('header1')?>

<div class="register" style="width: 40%; padding: 20px; color: white; background-color:#B23CFD;">
<form  method="POST" enctype="multipart/form-data">
<input type="hidden" name="action" value="register">
    <div class="col-md-12">
	
    <div class="mb-3">
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="First Name"  name="fname" required>
	</div>
    <div class="mb-3">
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Middle Name"  name="mname" required>
	</div>
    <div class="mb-3">
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name"  name="lname" required>
	</div>

    <div class="mb-3">
		<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Contact Number"  name="cnum" required>
	</div>
	
	<div class="mb-3">
		<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email Address"  name="email" required>
	</div>
    <div class="mb-3">
		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"  name="pword" required>
	</div>
	<div class="mb-3">
		<input id="input-style" class="form-control" type="file" id="formFile" name="photo" required>
	</div>
		<button type="submit" name="submit" class="btn btn-primary">Register</button>
		<a href="<?php echo SITE_URL?>/?page=login1" style="margin-left:250px; color:white;">Go back to Login...</a>
    </div>
	
</div>
</div>

</form>
</div>






<?php element('footer1')?>