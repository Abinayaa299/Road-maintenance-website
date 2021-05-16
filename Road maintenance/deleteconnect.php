<?php
$conn=oci_connect("system","reena","localhost/XE");
$a = $_POST['comp_id'];
$check="DELETE FROM COMPLAINT where comp_id='$a'";
$res1=oci_parse($conn,$check);
oci_execute($res1);
echo "COMPLAINT DELETED !";
?>