<?php
$conn=oci_connect("system","reena","localhost/XE");
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$a = $_POST['email'];
$b = $_POST['psw'];
session_start();
$check="SELECT * FROM admin where admin_eid='$a' and admin_pass='$b'";
$res1=oci_parse($conn,$check);
oci_execute($res1);
If($row=oci_fetch_array($res1,OCI_ASSOC))
{
$_SESSION['adminid'] = $row["ADMIN_ID"];
//  To redirect form on a particular page
header("Location:http://localhost/anuproject/adminpage.php");
}
else{
?><span><?php echo "INVALID USER.....!!!!!!!!!!!!";?></span> <?php
}
}
?>