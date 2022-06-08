<?php

    if($_POST['submit']){
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $cnumber = $_POST['cnum'];
        $eadd = $_POST['email'];
        $pword = $_POST['pword'];

        $DB->query( "INSERT INTO users ( fname, mname, lname, cnumber, eadd, pword ) VALUES( '$fname','$mname','$lname','$cnumber','$eadd','$pword' )" );
        
        header( "Location: " . SITE_URL . "/?page=login" );
    }
?>