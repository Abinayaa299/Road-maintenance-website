<!doctype html>
<body style="background-color:GREY;">
<pre>
<?php
$conn=oci_connect("system","reena","localhost/XE");
If($conn)
{
	session_start();
	if( isset( $_SESSION['adminid'] ) ) {
      $admin_id = $_SESSION['adminid'];
   }else {
      echo "not set";
   }
	$query="select *from authority where admin_id='$admin_id'";
	$stid=oci_parse($conn,$query);
    oci_execute($stid);
?>

<?php
while($row=oci_fetch_array($stid,OCI_ASSOC))
{
?>
    <label for="auth_id"><b>Authority id :</b></label><?php echo $row["AUTH_ID"];?><br>
	<label for="pass"><b>Password :</b></label><?php echo $row["AUTH_PASS"] ;?>
	<label for="fname"><b>Authority first name :</b></label><?php echo $row["AUTH_FNAME"];?><br>
	<label for="lname"><b>Authority last name :</b></label><?php echo $row["AUTH_LNAME"];?><br>
	<label for="eid"><b>Email id :</b></label><?php echo $row["AUTH_EID"];?><br>
	<label for="sex"><b>Gender :</b></label><?php echo $row["AUTH_SEX"];?><br>
	<label for="admin"><b>Admin in charge :</b></label><?php echo $row["ADMIN_ID"];?><br>
	<label for="admin"><b>Phone numbers :</b></label><br>
	<?php 
	$query1="select * from authphone where auth_id='".$row["AUTH_ID"]."'";
	$stid1=oci_parse($conn,$query1);
    oci_execute($stid1);
	while($row1=oci_fetch_array($stid1,OCI_ASSOC))
    {
		echo $row1["AUTH_PHNO"];
		?>
		<br>
		<?php
	}
	?>
	<label for="admin"><b>Areas of control :</b></label><br>
	<?php
	$query2="select * from authlocation where auth_id='".$row["AUTH_ID"]."'";
	$stid2=oci_parse($conn,$query2);
    oci_execute($stid2);
	while($row2=oci_fetch_array($stid2,OCI_ASSOC))
    {
		echo $row2["AUTH_LOC"];
		?>
		<br>
		<?php
	}
	
}
}
else
echo "not connected";
oci_close($conn);
?>
</pre>
</body>
</html>