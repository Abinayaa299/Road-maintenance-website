<html>
<body>
<?php
$conn=oci_connect("system","reena","localhost/XE");
$a=$_POST['adminid'];
$b=$_POST['psw'];
$c=$_POST['First_Name'];
$d=$_POST['Last_Name'];
$e=$_POST['emailid'];
$f=$_POST['gender'];
$g=$_POST['designation'];
$h=$_POST['phoneno1'];
$i=$_POST['phoneno2'];
echo "oracle is connected";
/*$query="select * from persons";
$stid=oci_parse($conn,$query);
$r=oci_execute($stid);
if(!$r)
	echo "not selected";
else
	echo "selected";*/
$dbinsert="INSERT INTO admin(admin_id,admin_pass,admin_fname,admin_lname,admin_eid,admin_sex,admin_des) VALUES('$a','$b','$c','$d','$e','$f','$g')";
$dbinsert2="INSERT INTO adminphone(admin_id,admin_phno) VALUES('$a','$h')";
$dbinsert3="INSERT INTO adminphone(admin_id,admin_phno) VALUES('$a','$i')";
$res1=oci_parse($conn,$dbinsert);
oci_execute($res1);
$res2=oci_parse($conn,$dbinsert2);
oci_execute($res2);
$res3=oci_parse($conn,$dbinsert3);
oci_execute($res3);
if(isset($_POST['submit'])){
header("Location:http://localhost/anuproject/first.php");
}


oci_close($conn);
?>
</body>
</html>