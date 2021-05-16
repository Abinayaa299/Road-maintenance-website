<?php
$conn=oci_connect("system","reena","localhost/XE");
session_start();
	if( isset( $_SESSION['citizenid'] ) ) {
      $citizen_id = $_SESSION['citizenid'];
   }else {
      echo "not set";
   }
$a = $_POST['comp_id'];
$check="INSERT INTO CITIZENVOTE VALUES('$citizen_id','$a')";
$res1=oci_parse($conn,$check);
oci_execute($res1);
echo "VOTE CASTED !";
?>