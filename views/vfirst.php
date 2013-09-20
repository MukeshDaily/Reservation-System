<html>
<head>
</head>
<body>
<br>
<h2>Get A Bus Route</h2>
<form action="http://127.0.0.1/01bussystem/index.php/cfirst/searchfromto" method=POST>
<table>
<tr>
<td>From: </td><td><input type=text name=bfrom></td>
<td>To: </td><td><input type=text name=bto></td>
<td><input type=submit value=Submit></td>
</tr>
</table>
</form>
<br>


<table width=1100 height=50 border=1px>
<tr bgcolor=green>
<td>Bus Code</td><td>Bus Name</td> <td>From</td> <td>To</td> <td>departure</td> <td>Arrival</td> <td>Type</td> <td>Seats</td> <td>Fare</td> <td>Facilities</td><td>Stars</td><td>Select Date</td><td>Reserve</td>

</tr>
<?php foreach ($query as $row):?>
   <tr>
<form action="http://127.0.0.1/01bussystem/index.php/cfirst/booknow" method=POST>
   <!--process as  hidden id for post-->
   <?php foreach ($row as $item):?>
<input type=hidden name=bid value=<?php echo $item;?>>
   <?php break; endforeach;?>
  <!--End-->
  
   <?php foreach ($row as $item):?>
<td><?php echo $item;?></td>
   <?php endforeach;?>
<td><input type=text name=date></td>  
<td><input type=submit value="Book Now"></td>
</form>
</tr>
<?php endforeach;?>
</table>
<br>

</body>
</html>