<?php
$conn=oci_connect("system","reena","localhost/XE");
$a = $_POST['comp_id'];
$check="SELECT COUNT(distinct CITI_ID) FROM CITIZENVOTE where comp_id='$a'";
$res1=oci_parse($conn,$check);
oci_execute($res1);
$row=oci_fetch_array($res1,OCI_ASSOC);

echo "NUMBER OF VOTES TO THIS COMPLAINT IS  ";
echo $row["COUNT(DISTINCTCITI_ID)"];
?>