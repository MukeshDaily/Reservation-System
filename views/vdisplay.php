<html>
<head>
</head>
<body>

<?php foreach ($query as $row):?>
   <?php foreach ($row as $item):?>
      <li><?php echo $item;?></li>
   <?php endforeach;?>
   <br>
<?php endforeach;?>

<br>
<h2>Get A Entry In Database</h2>
<form action=cdisplay/getdb method=POST>
<table>
<tr><td>BUSID: </td><td><input type=text name=busid></td></tr>
<tr><td></td><td><input type=submit value=Submit></td></tr>
</table>
</form>

<br>
<h2>Insert Into Database</h2>
<form action=cdisplay/insertdb method=POST>
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

<tr><td></td><td><input type=submit value=Submit></td></tr>
</table>
</form>
<br>
<h2>Update Database</h2>
<form action=cdisplay/updatedb method=POST>
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

<tr><td></td><td><input type=submit value=Submit></td></tr>
</table>
</form>

<br>
<h2>Delete Database</h2>
<form action=cdisplay/deletedb method=POST>
<table>
<tr><td>title: </td><td><input type=text name=title></td></tr>
<tr><td></td><td><input type=submit value=Submit></td></tr>
</table>
</form>
</body>
</html>