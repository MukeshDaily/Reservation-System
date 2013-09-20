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
?>

<br>

<form action=user_update method=POST>
<table>
<tr><td>Name: </td><td><input type=text name=name value=<?php echo $busarr[0];?>></td></tr>
<tr><td>Email: </td><td><input type=text name=email value=<?php echo $busarr[1];?>></td></tr>
<tr><td>Mobile: </td><td><input type=text name=mobile value=<?php echo $busarr[2];?> ></td></tr>
<tr><td>Address: </td><td><input type=text name=address value=<?php echo $busarr[3];?> ></td></tr>

<tr><td>Country: </td><td><input type=text name=country value=<?php echo $busarr[4];?> ></td></tr>
<tr><td>Gender: </td><td><input type=text name=gender value=<?php echo $busarr[5];?> ></td></tr>
<tr><td>Bus ID: </td><td><input type=text name=busid value=<?php echo $busarr[6];?> ></td></tr>

<tr><td>Bus Date: </td><td><input type=text name=busdate value=<?php echo $busarr[7];?> ></td></tr>
<tr><td>Registration date: </td><td><input type=text name=regdate value=<?php echo $busarr[8];?> ></td></tr>
<tr><td>Seats: </td><td><input type=text name=seats value=<?php echo $busarr[9];?> ></td></tr>
<tr><td>Seat Numbers: </td><td><input type=text name=seatids value=<?php echo $busarr[10];?> ></td></tr>
<tr><td>Total Price: </td><td><input type=text name=price value=<?php echo $busarr[11];?> ></td></tr>
<tr><td>Status: </td><td><input type=text name=status value=<?php echo $busarr[12];?> ></td></tr>
<tr><td>userid: </td><td><input type=text name=userid value=<?php echo $busarr[13];?> ></td></tr>
<tr><td><input type=submit value=Submit></td></tr>
</table>
</form>

</body>
</html>