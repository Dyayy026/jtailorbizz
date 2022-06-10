<?php 

	$email = $_POST[ 'username' ];
	$password = $_POST[ 'password' ];
	$q = "SELECT * FROM users WHERE eadd = '$email' AND pword = '$password' LIMIT 1";
	$check = $DB->query( $q );

	if( $check->num_rows ) {
		$user = $check->fetch_assoc();
		$approved = $user[ 'usertype' ];
		if( $approved ) {
			$_SESSION[ AUTH_ID ] = $user[ 'id' ];
			$_SESSION[ AUTH_NAME ] = $user[ 'fname' ];
			$_SESSION[ AUTH_TYPE ] = $user[ 'usertype' ];
			set_message( "Welcome back {$user[ 'usertype' ]}!", 'success' );
			redirect( $restricted_pages[ $_SESSION[ AUTH_TYPE ] ][ 'default_page' ] );
		} else {
			set_message( "Your account hasn't been approved yet.", 'warning' );
		}
	} else {		
		set_message( "Invalid login, please try again." . $DB->error, "danger" );
	}