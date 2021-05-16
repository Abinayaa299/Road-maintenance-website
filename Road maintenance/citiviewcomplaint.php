<!doctype html>
<body style="background-color:GREY;">
<pre>
<?php
$conn=oci_connect("system","reena","localhost/XE");
If($conn)
{
	session_start();
	if( isset( $_SESSION['citizenid'] ) ) {
      $citizen_id = $_SESSION['citizenid'];
   }else {
      echo "not set";
   }
	$query="select *from complaint where citi_id='$citizen_id'";
	$stid=oci_parse($conn,$query);
    oci_execute($stid);
?>

<?php
while($row=oci_fetch_array($stid,OCI_ASSOC))
{
?>
    <label for="compid"><b>Complaint id :</b></label><?php echo $row["COMP_ID"];?><br>
	<label for="loc"><b>Location :</b></label><?php echo $row["STREET"].",".$row["AREA"].",".$row["DISTRICT"].",".$row["STATE"]."(PIN:".$row["ZIP_CODE"].")" ;?>
	<label for="compdes"><b>Complaint description :</b></label><?php echo $row["COM_DESCRI"];?><br>
	<label for="status"><b>Complaint status :</b></label><?php echo $row["COMP_STATUS"];?><br>
	<label for="authid"><b>Authority in charge :</b></label><?php echo $row["AUTH_ID"];?><br>
	<label for="adminid"><b>Admin in charge :</b></label><?php echo $row["ADMIN_ID"];?><br>
	<label for="citi_id"><b>Complaint given by :</b></label><?php echo $row["CITI_ID"];?><br><hr>
<?php
}
}
else
echo "not connected";
oci_close($conn);
?>
</pre>
</body>
</html>