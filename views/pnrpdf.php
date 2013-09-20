<html>
<head>
</head>
<body>


<table width=1100 height=50>
<tr bgcolor=Blue>
<td>Bus ID</td><td>Bus Name</td> <td>From</td> <td>To</td> <td>departure</td> <td>Arrival</td> <td>Type</td> <td>Seats</td> <td>Fare</td> <td>Facilities</td><td>Stars</td>
</tr>
<?php foreach ($busdetails as $row):
$cnt=0;
?>
<tr>   
   <?php foreach ($row as $item):?>
<td><?php echo $item; 
$busarr[$cnt]=$item;
$cnt++;
?></td>
   <?php endforeach;?>
</tr>
<?php endforeach;?>
</table

<br>
<table width=1100 height=50 border=1px>
<tr bgcolor=green>
<td>Your Name</td><td>Email</td> <td>Mobile</td> <td>Address</td> <td>Country</td> <td>Gender</td> <td>BusID</td> <td>Bus Date</td><td>Registration Date</td><td>Your Seats</td><td>Seats</td><td>Price</td><td>PNR</td><td>Email</td><td>Save</td>

</tr>



<?php foreach ($invoice as $row):?>
   <tr>
   <?php foreach ($row as $item):?>
<td><?php echo $item;?></td>
   <?php endforeach;?>
<td>
<a href="http://127.0.0.1/01bussystem/index.php/cfadmin/user_edit?email=<?php echo $busarr[1];?>">Email</a>
</td>
<td>
<a href="http://127.0.0.1/01bussystem/index.php/cfadmin/user_edit?email=<?php echo $busarr[1];?>">Save</a>
</td>
</tr>
<?php endforeach;?>

</table>
<br>

</body>
</html>