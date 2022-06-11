<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<?php

if( isset( $_POST ) ) {

	$fname = $_POST[ 'cust_fname' ];
    $mname = $_POST[ 'cust_mname' ];
    $lname = $_POST[ 'cust_lname' ];
    $cnum = $_POST[ 'cust_cnum' ];
    $address = $_POST[ 'cust_address' ];

	if( $DB->query( "INSERT INTO customer_tb (cust_fname,cust_mname,cust_lname,cust_cnum,cust_address) values( '$fname','$mname','$lname','$cnum','$address' )" ) ) {
        set_message( "Customer added successfully!", 'success' );
	} else {
		$MESSAGE = "Failed to add new Product. " . $DB->error;
		$MESSAGE_TYPE = "danger";
	}

}	