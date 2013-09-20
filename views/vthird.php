<html>
<head>
</head>
<body>


<table width=1100 height=50>
<tr bgcolor=Blue>
<td>Bus ID</td><td>Bus Name</td> <td>From</td> <td>To</td> <td>departure</td> <td>Arrival</td> <td>Type</td> <td>Seats</td> <td>Fare</td> <td>Facilities</td><td>Stars</td><td>SeatPlan</td>
</tr>
<?php foreach ($busdeatal as $row):
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
<td>Your Name</td><td>Email</td> <td>Mobile</td> <td>Address</td> <td>Country</td> <td>Gender</td> <td>BusID</td> <td>Bus Date</td><td>Reg Date</td><td>Your Seats</td><td>Seats</td><td>Price</td><td>Status</td><td>ID</td><td>Payment Method</td><td>Pay Now</td>
</tr>
<?php foreach ($invoice as $row):?>
   <tr>
<form action="http://127.0.0.1/01bussystem/index.php/cfirst/pay" method=POST>
   <?php foreach ($row as $item):?>
<td><?php echo $item;?></td>
   <?php endforeach;?>
<td>
 <select name="paymethod" id="paymethod" >
    <option value="default" selected="selected">Select</option>
    <option value="Cash">Cash On Delivery</option>
	<option value="Cash">Online Payment</option>
	<option value="Cash">PAYPAL</option>
	</select> 
</td>
<td><input type=submit value="Pay Now"></td>
</form>
</tr>
<?php endforeach;?>

</table>
<br>

</body>
</html>