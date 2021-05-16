<!doctype html>
<body style="background-color:GREY;">
<pre>
<?php
$conn=oci_connect("system","reena","localhost/XE");
If($conn)
{
	
	$query="select *from citizen";
	$stid=oci_parse($conn,$query);
    oci_execute($stid);
?>

<?php
while($row=oci_fetch_array($stid,OCI_ASSOC))
{
?>
    <label for="citi_id"><b>Citizen id :</b></label><?php echo $row["CITI_ID"];?><br>
	<label for="pass"><b>Password :</b></label><?php echo $row["CITI_PASS"] ;?>
	<label for="fname"><b>Citizen first name :</b></label><?php echo $row["CITI_FNAME"];?><br>
	<label for="lname"><b>Citizen last name :</b></label><?php echo $row["CITI_LNAME"];?><br>
	<label for="eid"><b>Email id :</b></label><?php echo $row["CITI_EID"];?><br>
	<label for="phno"><b>Phone number :</b></label><?php echo $row["CITI_PHNO"];?><br>
	<label for="sex"><b>Gender :</b></label><?php echo $row["CITI_SEX"];?><br>
	<label for="add"><b>Address :</b></label><?php echo $row["CITI_ADDRESS"];?><br><hr>
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