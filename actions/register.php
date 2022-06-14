<?php
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $cnumber = $_POST['cnum'];
        $eadd = $_POST['email'];
        $password = mysqli_real_escape_string($conn, $_POST['pword']);
        $pword = md5($password);
        $status = "Pending";
        $utype = "Sewer";
		$id1 = (rand(100,900)); //generates random id for user
		$id2 = (rand(100,900)); //generates second set of random id for user
		$id = $id1 .'-'. $id2;

        $fileName = $_FILES['photo']['name'];
		$fileTmpName = $_FILES['photo']['tmp_name'];
		$fileSize = $_FILES['photo']['size'];
		$fileError = $_FILES['photo']['error'];
		$fileType = $_FILES['photo']['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg', 'jpeg', 'png');

		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 100000000000) {
					$fileNameNew = uniqid('', true) . "." . $fileActualExt;
					$fileDestination = 'D:/XAMPP1/htdocs/practice lorem/assets/pics/' . $fileNameNew;
					move_uploaded_file($fileTmpName, $fileDestination);
				} else {
					echo "File is too big";
				}
			} else {
				echo "Error uploading the file";
			}
		} else {
			echo "File type not accepted";
		}

        $DB->query( "INSERT INTO users ( user_id,fname, mname, lname, cnumber, eadd, pword,status,usertype,photo ) VALUES( '$id','$fname','$mname','$lname','$cnumber','$eadd','$pword','$status','$utype','$fileNameNew' )" );
        
        header( "Location: " . SITE_URL . "/?page=register_sucess_confirmation" );
?>

