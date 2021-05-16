<?php
$conn=oci_connect("system","reena","localhost/XE");
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$a = $_POST['budid'];
$b = $_POST['amt'];
$check="call incrementbud('$a','$b')";
$res1=oci_parse($conn,$check);
oci_execute($res1);
}
?>