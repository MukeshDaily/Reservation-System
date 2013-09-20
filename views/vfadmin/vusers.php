<html>
<head>
</head>
<body>


<table width=1100 height=50 border=1px>
<tr bgcolor=green>
<td>Name</td><td>Email</td> <td>Mobile</td> <td>Address</td> <td>Country</td> <td>Gender</td> <td>BusID</td> <td>BusDate</td> <td>Reg.Date</td> <td>Seats</td><td>SeatIds</td><td>Total Price</td><td>Status</td><td>ID</td><td>Confirm Ticket/SMS Ticket</td><td>Edit</td><td>Delete</td>
</tr>
<?php foreach ($query as $row):
$cnt=0;
?>
<tr>
   <?php foreach ($row as $item):?>
      <td><?php echo $item;
	$busarr[$cnt]=$item;
	$cnt++;
	  ?></td>
   <?php endforeach;?>
   <br>
<td>
   <?php if($busarr[12]==0){?>

<a href="http://127.0.0.1/01bussystem/index.php/cfadmin/confirm?email=<?php echo $busarr[1];?>&userid=<?php echo $busarr[13];?>">Confirm Ticket</a>

<?php }else{ ?>
<a href="http://127.0.0.1/01bussystem/index.php/cfadmin/sms_ticket?email=<?php echo $busarr[1];?>&busid=<?php echo $busarr[6]?>&userid=<?php echo $busarr[13];?>">SMS Ticket</a>
<?php } ?>
</td>
   <td><a href="http://127.0.0.1/01bussystem/index.php/cfadmin/user_edit?email=<?php echo $busarr[1];?>&userid=<?php echo $busarr[13];?>">Edit</a></td>
<td><a href="http://127.0.0.1/01bussystem/index.php/cfadmin/user_delete?email=<?php echo $busarr[1];?>&userid=<?php echo $busarr[13];?>">Delete</a></td>
   </tr>
<?php endforeach;?>
</table>
<br>

<h2>Get A User Dateails From Database</h2>
<form action=user_oneget method=POST>
<table>
<tr><td>User Email: </td><td><input type=text name=email></td></tr>
<tr><td></td><td><input type=submit value=Submit></td></tr>
</table>
</form>

<br>
<h2>Insert A User  Into Database</h2>
<form action=user_insert method=POST>
<table>
<tr><td>Name: </td><td><input type=text name=name value="" ></td></tr>
<tr><td>Email: </td><td><input type=text name=email value="" ></td></tr>
<tr><td>Mobile: </td><td><input type=text name=mobile value="" ></td></tr>
<tr><td>Address: </td><td><input type=text name=address value="" ></td></tr>

<tr><td>Country: </td><td><input type=text name=country value="" ></td></tr>
<tr><td>Gender: </td><td><input type=text name=gender value="" ></td></tr>
<tr><td>Bus ID: </td><td><input type=text name=busid value="" ></td></tr>

<tr><td>Bus Date: </td><td><input type=text name=busdate value="" ></td></tr>
<tr><td>Registration date: </td><td><input type=text name=regdate value="" ></td></tr>
<tr><td>Seats: </td><td><input type=text name=seats value="" ></td></tr>
<tr><td>Seat Numbers: </td><td><input type=text name=seatids value="" ></td></tr>
<tr><td>Total Price: </td><td><input type=text name=price value="" ></td></tr>
<tr><td>Status: </td><td><input type=text name=status value="" ></td></tr>
<tr><td>userid: </td><td><input type=text name=userid value="" ></td></tr>
<tr><td><input type=submit value=Submit></td></tr>
</table>
</form>
<br>



</body>
</html>