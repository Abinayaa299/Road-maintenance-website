<html>
<body>
<?php
$conn=oci_connect("system","reena","localhost/XE");
$a=$_POST['citizenid'];
$b=$_POST['psw'];
$c=$_POST['First_Name'];
$d=$_POST['Last_Name'];
$e=$_POST['emailid'];
$f=$_POST['phoneno'];
$g=$_POST['gender'];
$h=$_POST['address'];
echo "oracle is connected";

$dbinsert="INSERT INTO citizen(citi_id,citi_pass,citi_fname,citi_lname,citi_eid,citi_phno,citi_sex,citi_address) VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";

$res1=oci_parse($conn,$dbinsert);

oci_execute($res1);
if(isset($_POST['submit'])){
header("Location:http://localhost/anuproject/third.php");
}
oci_close($conn);
?>
</body>
</html>