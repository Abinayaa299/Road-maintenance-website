<?php
$conn=oci_connect("system","reena","localhost/XE");
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$a = $_POST['email'];
$b = $_POST['psw'];
session_start();
$check="SELECT * FROM citizen where citi_eid='$a' and citi_pass='$b'";
$res1=oci_parse($conn,$check);
oci_execute($res1);
If($row=oci_fetch_array($res1,OCI_ASSOC))
{
//  To redirect form on a particular page
$_SESSION['citizenid'] = $row["CITI_ID"];

header("Location:http://localhost/anuproject/citizenpage.php");
}
else{
?><span><?php echo "INVALID USER.....!!!!!!!!!!!!";?></span> <?php
}
}
?>