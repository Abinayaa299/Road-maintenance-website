<!doctype html>
<body style="background-color:GREY;">
<pre>
<?php
$conn=oci_connect("system","reena","localhost/XE");
If($conn)
{
$query1="CREATE OR REPLACE VIEW BUDGETVIEW AS SELECT * FROM BUDGET";
$one=oci_parse($conn,$query1);
oci_execute($one);
$que="select * from budgetview1";
$two=oci_parse($conn,$que);
oci_execute($two);
?>
<table border="1">
<font style="JOKERMAN">
<tr>
<th>BUDGET ID</th>
<th>COMPLAINT TYPE</th>
<th>AMOUNT(Rs)</th>

</tr>
<?php
while($row=oci_fetch_array($two,OCI_ASSOC))
{
?>
<tr>
    <td><?php echo $row['BUDGET_ID'];?></td>
	<td><?php echo $row['COMP_TYPE'];?></td>
	<td><?php echo $row['AMOUNT'];?></td>
	
</tr>
<?php
}
}
else
echo "not connected";
oci_close($conn);
?>
</font>
</table>


</pre> 					
</body>
</html>