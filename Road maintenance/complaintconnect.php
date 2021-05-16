<?php
$conn=oci_connect("system","reena","localhost/XE");
IF($conn)
{
session_start();
$a=$_POST['compid'];
$b=$_POST['Street_Name'];
$c=$_POST['Area_Name'];
$d=$_POST['District_Name'];
$e=$_POST['stateslist'];
$f=$_POST['zip_code'];
$g=$_POST['Complaint_description'];
$h=$_POST['comp_type'];
if( isset( $_SESSION['citizenid'] ) ) {
      $citizen_id = $_SESSION['citizenid'];
   }else {
      echo "not set";
   }
//$citizen_id = $_SESSION["citizen_id"];
$authidfind="SELECT * FROM authlocation WHERE auth_loc='$c'";
$res=oci_parse($conn,$authidfind);
oci_execute($res);
$row=oci_fetch_array($res,OCI_ASSOC);
//echo $c;

$budfind="SELECT * FROM budget WHERE comp_type='$h'";
$res2=oci_parse($conn,$budfind);
oci_execute($res2);
$row2=oci_fetch_array($res2,OCI_ASSOC);

$adminfind="SELECT * FROM authority WHERE auth_id='".$row["AUTH_ID"]."'";
$res3=oci_parse($conn,$adminfind);
oci_execute($res3);
$row3=oci_fetch_array($res3,OCI_ASSOC);
//echo $citizen_id;

$dbinsert="INSERT INTO complaint(comp_id,street,area,district,state,zip_code,com_descri,comp_status,auth_id,budget_id,admin_id,citi_id) VALUES('$a','$b','$c','$d','$e','$f','$g','not started','".$row["AUTH_ID"]."','".$row2["BUDGET_ID"]."','".$row3["ADMIN_ID"]."','$citizen_id')";
$res1=oci_parse($conn,$dbinsert);
oci_execute($res1);
?>
<h2><center>COMPLAINT SUBMITTED</center></h2>
<?php
}
else
	echo "not connected";
oci_close($conn);
?>
</body>
</html>