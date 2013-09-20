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

<form action=updatedb method=POST>
<table>
<tr><td>BUSID: </td><td><input type=text name=busid value=<?php echo $busarr[0];?>></td></tr>
<tr><td>Bus Name: </td><td><input type=text name=bname value=<?php echo $busarr[1];?>></td></tr>
<tr><td>From: </td><td><input type=text name=bfrom value=<?php echo $busarr[2];?> ></td></tr>
<tr><td>To: </td><td><input type=text name=bto value=<?php echo $busarr[3];?> ></td></tr>

<tr><td>Departure: </td><td><input type=text name=bdep value=<?php echo $busarr[4];?> ></td></tr>
<tr><td>Arrival: </td><td><input type=text name=barr value=<?php echo $busarr[5];?> ></td></tr>
<tr><td>Bus Type: </td><td><input type=text name=btype value=<?php echo $busarr[6];?> ></td></tr>

<tr><td>Seats: </td><td><input type=text name=bseats value=<?php echo $busarr[7];?> ></td></tr>
<tr><td>Fare: </td><td><input type=text name=bfare value=<?php echo $busarr[8];?> ></td></tr>
<tr><td>Facilities: </td><td><input type=text name=bfacilites value=<?php echo $busarr[9];?> ></td></tr>
<tr><td>Rating: </td><td><input type=text name=brating value=<?php echo $busarr[10];?> ></td></tr>
<tr><td>SeatPlan: </td><td><input type=text name=seatby value=<?php echo $busarr[11];?> ></td></tr>

<tr><td><input type=submit value=Submit></td></tr>
</table>
</form>

</body>
</html>