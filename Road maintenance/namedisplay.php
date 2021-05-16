<?php
$conn=oci_connect("system","reena","localhost/XE");
$a = $_POST['citi_fname'];
$check="SELECT COMP_ID FROM CITIZEN NATURAL JOIN CITIZENVOTE WHERE CITI_FNAME='$a'";
$res1=oci_parse($conn,$check);
oci_execute($res1);
while($row=oci_fetch_array($res1,OCI_ASSOC))
{
	echo $row["COMP_ID"];
}
?>