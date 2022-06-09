<?php

        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $cnumber = $_POST['cnum'];
        $eadd = $_POST['email'];
        $pword = $_POST['pword'];
        $status = "Pending";
        $utype = "Sewer";

        $DB->query( "INSERT INTO users ( fname, mname, lname, cnumber, eadd, pword,status,usertype ) VALUES( '$fname','$mname','$lname','$cnumber','$eadd','$pword','$status','$utype' )" );
        
        header( "Location: " . SITE_URL . "/?page=register_sucess_confirmation" );
?>