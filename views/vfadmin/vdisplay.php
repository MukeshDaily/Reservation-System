<html>
<head>
</head>
<body>

<a href="http://127.0.0.1/01bussystem/index.php/cfadmin/user_list">See All Registered Users</a>

<table width=900 >
<tbody>
<tr bgcolor=green>
<td>Bus ID</td><td>Bus Name</td> <td>From</td> <td>To</td> <td>departure</td> <td>Arrival</td> <td>Type</td> <td>Seats</td> <td>Fare</td> <td>Facilities</td><td>Stars</td><td>SeatPlan</td><td>Seats and Dates</td><td>Edit</td><td>Delete</td>
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
<td><a href="http://127.0.0.1/01bussystem/index.php/cfadmin/seeseatsdates?busid=<?php echo $busarr[0];?>">Seats and Dates</a></td>
<td><a href="http://127.0.0.1/01bussystem/index.php/cfadmin/editbus?busid=<?php echo $busarr[0];?>">Edit</a></td>
<td><a href="http://127.0.0.1/01bussystem/index.php/cfadmin/dropbus?busid=<?php echo $busarr[0];?>">Delete</a></td>
   </tr>
<?php endforeach;?>
</tbody>
</table>

<br>

<h2>Get A Bus Dateails From Database</h2>
<form action="http://127.0.0.1/01bussystem/index.php/cfadmin/getdb" method=POST>
<table>
<tr><td>BUSID: </td><td><input type=text name=busid></td></tr>
<tr><td></td><td><input type=submit value=Submit></td></tr>
</table>
</form>

<br>
<h2>Insert A Bus Detail Into Database</h2>
<form action="http://127.0.0.1/01bussystem/index.php/cfadmin/insertdb" method=POST>
<table>
<tr><td>BUSID: </td><td><input type=text name=busid></td></tr>
<tr><td>Bus Name: </td><td><input type=text name=bname></td></tr>
<tr><td>From: </td><td><input type=text name=bfrom></td></tr>
<tr><td>To: </td><td><input type=text name=bto></td></tr>

<tr><td>Departure: </td><td><input type=text name=bdep></td></tr>
<tr><td>Arrival: </td><td><input type=text name=barr></td></tr>
<tr><td>Bus Type: </td><td><input type=text name=btype></td></tr>

<tr><td>Seats: </td><td><input type=text name=bseats></td></tr>
<tr><td>Fare: </td><td><input type=text name=bfare></td></tr>
<tr><td>Facilities: </td><td><input type=text name=bfacilites></td></tr>
<tr><td>Rating: </td><td><input type=text name=brating></td></tr>
<tr><td>SeatPlan: </td><td><input type=text name=seatby></td></tr>
<tr><td></td><td><input type=submit value=Submit></td></tr>
</table>
</form>
<br>



<br>
<h2>Insert a Bus Date and Seats Into Database</h2>
<br>

<form action="http://127.0.0.1/01bussystem/index.php/cfadmin/insertdateandseats" method=POST>
<table>
<tr><td>BusDate: </td><td><input type=text name=busdate value=""></td></tr>
<tr><td>Bus ID: </td><td><input type=text name=busid value="" ></td></tr>
<tr><td>Seat1: </td><td><input type=text name=s1 value=1 ></td></tr>
<tr><td>Seat2: </td><td><input type=text name=s2 value=1 ></td></tr>
<tr><td>Seat3: </td><td><input type=text name=s3 value=1 ></td></tr>
<tr><td>Seat4: </td><td><input type=text name=s4 value=1 ></td></tr>
<tr><td>Seat5: </td><td><input type=text name=s5 value=1 ></td></tr>
<tr><td>Seat6: </td><td><input type=text name=s6 value=1 ></td></tr>
<tr><td>Seat7: </td><td><input type=text name=s7 value=1 ></td></tr>
<tr><td>Seat8: </td><td><input type=text name=s8 value=1 ></td></tr>
<tr><td>Seat9: </td><td><input type=text name=s9 value=1 ></td></tr>
<tr><td>Seat10: </td><td><input type=text name=s10 value=1 ></td></tr>
<tr><td>Seat11: </td><td><input type=text name=s11 value=1 ></td></tr>
<tr><td>Seat12: </td><td><input type=text name=s12 value=1 ></td></tr>
<tr><td>Seat13: </td><td><input type=text name=s13 value=1 ></td></tr>
<tr><td>Seat14: </td><td><input type=text name=s14 value=1 ></td></tr>
<tr><td>Seat15: </td><td><input type=text name=s15 value=1 ></td></tr>
<tr><td>Seat16: </td><td><input type=text name=s16 value=1 ></td></tr>
<tr><td>Seat17: </td><td><input type=text name=s17 value=1 ></td></tr>
<tr><td>Seat18: </td><td><input type=text name=s18 value=1 ></td></tr>
<tr><td>Seat19: </td><td><input type=text name=s19 value=1 ></td></tr>
<tr><td>Seat20: </td><td><input type=text name=s20 value=1 ></td></tr>
<tr><td>Seat21: </td><td><input type=text name=s21 value=1 ></td></tr>
<tr><td>Seat22: </td><td><input type=text name=s22 value=1 ></td></tr>
<tr><td>Seat23: </td><td><input type=text name=s23 value=1 ></td></tr>
<tr><td>Seat24: </td><td><input type=text name=s24 value=1 ></td></tr>
<tr><td>Seat25: </td><td><input type=text name=s25 value=1 ></td></tr>
<tr><td>Seat26: </td><td><input type=text name=s26 value=1 ></td></tr>
<tr><td>Seat27: </td><td><input type=text name=s27 value=1 ></td></tr>
<tr><td>Seat28: </td><td><input type=text name=s28 value=1 ></td></tr>
<tr><td>Seat:29 </td><td><input type=text name=s29 value=1 ></td></tr>
<tr><td>Seat:30 </td><td><input type=text name=s30 value=1 ></td></tr>
<tr><td>Seat:31 </td><td><input type=text name=s31 value=1 ></td></tr>
<tr><td>Seat:32 </td><td><input type=text name=s32 value=1 ></td></tr>
<tr><td>Seat:33 </td><td><input type=text name=s33 value=1 ></td></tr>
<tr><td>Seat:34 </td><td><input type=text name=s34 value=1 ></td></tr>
<tr><td>Seat:35 </td><td><input type=text name=s35 value=1 ></td></tr>

<tr><td><input type=submit value=Submit></td></tr>
</table>
</form>




<br>
<h2>Delete A Bus From Database</h2>
<table>
<form action="http://127.0.0.1/01bussystem/index.php/cfadmin/deletedb" method=POST>
<tr><td>BUS ID </td><td><input type=text name=busid></td></tr>
<tr><td></td><td><input type=submit value=Submit></td></tr>
</form>
</table>
</body>
</html>