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
	$query="select *from admin where admin_id='$admin_id'";
	$stid=oci_parse($conn,$query);
    oci_execute($stid);
?>

<?php
while($row=oci_fetch_array($stid,OCI_ASSOC))
{
?>
    <label for="auth_id"><b>Admin id :</b></label><?php echo $row["ADMIN_ID"];?><br>
	<label for="pass"><b>Password :</b></label><?php echo $row["ADMIN_PASS"] ;?>
	<label for="fname"><b>Admin first name :</b></label><?php echo $row["ADMIN_FNAME"];?><br>
	<label for="lname"><b>Admin last name :</b></label><?php echo $row["ADMIN_LNAME"];?><br>
	<label for="eid"><b>Email id :</b></label><?php echo $row["ADMIN_EID"];?><br>
	<label for="sex"><b>Gender :</b></label><?php echo $row["ADMIN_SEX"];?><br>
	<label for="admin"><b>Phone numbers :</b></label><br>
	<?php 
	$query1="select * from adminphone where admin_id='$admin_id'";
	$stid1=oci_parse($conn,$query1);
    oci_execute($stid1);
	while($row1=oci_fetch_array($stid1,OCI_ASSOC))
    {
		echo $row1["ADMIN_PHNO"];
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