<?php

        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $cnumber = $_POST['cnum'];
        $eadd = $_POST['email'];
        $pword = $_POST['pword'];
        $status = "Pending";

        $DB->query( "INSERT INTO users ( fname, mname, lname, cnumber, eadd, pword,status ) VALUES( '$fname','$mname','$lname','$cnumber','$eadd','$pword','$status' )" );
        
        header( "Location: " . SITE_URL . "/?page=register_sucess_confirmation" );
?>