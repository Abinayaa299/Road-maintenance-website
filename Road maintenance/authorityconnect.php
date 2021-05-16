<html>
<body>
<?php
$conn=oci_connect("system","reena","localhost/XE");
$a=$_POST['authorityid'];
$b=$_POST['psw'];
$c=$_POST['First_Name'];
$d=$_POST['Last_Name'];
$e=$_POST['emailid'];
$f=$_POST['gender'];
$g=$_POST['designation'];
$h=$_POST['adminid'];
$i=$_POST['phoneno1'];
$j=$_POST['phoneno2'];
$k=$_POST['authority_location1'];
$l=$_POST['authority_location2'];
$m=$_POST['authority_location3'];
/*$query="select * from persons";
$stid=oci_parse($conn,$query);
$r=oci_execute($stid);
if(!$r)
	echo "not selected";
else
	echo "selected";*/
$dbinsert="INSERT INTO authority(auth_id,auth_pass,auth_fname,auth_lname,auth_eid,auth_sex,auth_des,admin_id) VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";
$dbinsert2="INSERT INTO authphone(auth_id,auth_phno) VALUES('$a','$i')";
$dbinsert3="INSERT INTO authphone(auth_id,auth_phno) VALUES('$a','$j')";
$dbinsert4="INSERT INTO authlocation(auth_id,auth_loc) VALUES('$a','$k')";
$dbinsert5="INSERT INTO authlocation(auth_id,auth_loc) VALUES('$a','$l')";
$dbinsert6="INSERT INTO authlocation(auth_id,auth_loc) VALUES('$a','$m')";
$res1=oci_parse($conn,$dbinsert);

oci_execute($res1);
$res2=oci_parse($conn,$dbinsert2);

oci_execute($res2);
$res3=oci_parse($conn,$dbinsert3);

oci_execute($res3);
$res4=oci_parse($conn,$dbinsert4);

oci_execute($res4);
$res5=oci_parse($conn,$dbinsert5);

oci_execute($res5);
$res6=oci_parse($conn,$dbinsert6);

oci_execute($res6);

if(isset($_POST['submit'])){
header("Location:http://localhost/anuproject/second.php");
}
oci_close($conn);
?>
</body>
</html>