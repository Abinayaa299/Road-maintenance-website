<?php
$conn=oci_connect("system","reena","localhost/XE");
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$a = $_POST['email'];
$b = $_POST['psw'];
session_start();
$check="SELECT * FROM authority where auth_eid='$a' and auth_pass='$b'";
$res1=oci_parse($conn,$check);
oci_execute($res1);
If($row=oci_fetch_array($res1,OCI_ASSOC))
{
//  To redirect form on a particular page
$_SESSION['authorityid'] = $row["AUTH_ID"];
header("Location:http://localhost/anuproject/authoritypage.php");
}
else{
?><span><?php echo "INVALID USER.....!!!!!!!!!!!!";?></span> <?php
}
}
?>