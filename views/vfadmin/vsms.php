<html>
<head>
</head>
<body>

<?php 
foreach ($query as $row):
  $cnt=0;
  foreach ($row as $item):
	$busarr[$cnt]=$item;
	$cnt++;
  endforeach;
endforeach;
foreach ($user as $row):
$cnt=0;
  foreach ($row as $item):
	$userarr[$cnt]=$item;
	$cnt++;
  endforeach;
endforeach;
?>
<br><h2 align=center>Mobile Ticket/SMS Ticket</h2>
<b>Please Enter Boarding Point and  your Address Then Copy and Send This SMS To Mobile Number:</b><h2> <?php echo $userarr[2]; ?></h2>
<br>

<br>
<form action=updateseats method=POST>
<textarea name="txtarea" rows=16 cols=50>
=====Mobile Ticket=======
<?php echo $busarr[2]; ?>  to <?php echo $busarr[3]; ?> 
<pnr> <?php echo $userarr[12]; ?> 
<busid> <?php echo $busarr[0]; ?> 
<busname> <?php echo $busarr[1]; ?> 
<seats> <?php echo $userarr[10]; ?> 
<Dep Time> <?php echo $busarr[4]; ?>,<?php echo $userarr[7]; ?> 
<boarding pt> <?php echo $busarr[2]; ?> 
<addressDetails>:  
<contact>: 9957809805 

Thanks for using our-service-name.com 
Please present this mobile ticket at the time of boarding.
our-service-name.com helpline number :9957809805
T&C Apply
</textarea>

<input type=submit value=SendSMS disabled>
</form>

</body>
</html>