<?php
$conn=oci_connect("system","reena","localhost/XE");
$a = $_POST['new_loc'];
	session_start();
	if( isset( $_SESSION['authorityid'] ) ) {
      $authority_id = $_SESSION['authorityid'];
   }else {
      echo "not set";
   }
$check="INSERT INTO AUTHLOCATION VALUES('$authority_id','$a')";
$res1=oci_parse($conn,$check);
oci_execute($res1);
echo "LOCATION ADDED";
?>