<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<?php

if( isset( $_POST ) ) {

	$id = $_POST[ 'id' ];
	$status = "Approved";

	if( $DB->query( "UPDATE products SET status='$status' WHERE id=$id" ) ) {
		$MESSAGE = "Product successfully updated!";
		$MESSAGE_TYPE = "info";
	} else {
		$MESSAGE = "Failed to update Product";
		$MESSAGE_TYPE = "danger";
	}

}