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
<br>
Please fill the Seat(or seats):<h2> <?php echo $userarr[10] ?></h2> with the PNR value: <h2> <?php echo $userarr[12] ?> </h2>
<br>

<br>
<form action=updateseats method=POST>
<table>
<tr><td>BusDate: </td><td><input type=text name=busdate value=<?php echo $busarr[0];?>></td></tr>
<tr><td>Bus ID: </td><td><input type=text name=busid value=<?php echo $busarr[1];?> ></td></tr>
<tr><td>Seat1: </td><td><input type=text name=s1 value=<?php echo $busarr[2];?> ></td></tr>
<tr><td>Seat2: </td><td><input type=text name=s2 value=<?php echo $busarr[3];?> ></td></tr>
<tr><td>Seat3: </td><td><input type=text name=s3 value=<?php echo $busarr[4];?> ></td></tr>
<tr><td>Seat4: </td><td><input type=text name=s4 value=<?php echo $busarr[5];?> ></td></tr>
<tr><td>Seat5: </td><td><input type=text name=s5 value=<?php echo $busarr[6];?> ></td></tr>
<tr><td>Seat6: </td><td><input type=text name=s6 value=<?php echo $busarr[7];?> ></td></tr>
<tr><td>Seat7: </td><td><input type=text name=s7 value=<?php echo $busarr[8];?> ></td></tr>
<tr><td>Seat8: </td><td><input type=text name=s8 value=<?php echo $busarr[9];?> ></td></tr>
<tr><td>Seat9: </td><td><input type=text name=s9 value=<?php echo $busarr[10];?> ></td></tr>
<tr><td>Seat10: </td><td><input type=text name=s10 value=<?php echo $busarr[11];?> ></td></tr>
<tr><td>Seat11: </td><td><input type=text name=s11 value=<?php echo $busarr[12];?> ></td></tr>
<tr><td>Seat12: </td><td><input type=text name=s12 value=<?php echo $busarr[13];?> ></td></tr>
<tr><td>Seat13: </td><td><input type=text name=s13 value=<?php echo $busarr[14];?> ></td></tr>
<tr><td>Seat14: </td><td><input type=text name=s14 value=<?php echo $busarr[15];?> ></td></tr>
<tr><td>Seat15: </td><td><input type=text name=s15 value=<?php echo $busarr[16];?> ></td></tr>
<tr><td>Seat16: </td><td><input type=text name=s16 value=<?php echo $busarr[17];?> ></td></tr>
<tr><td>Seat17: </td><td><input type=text name=s17 value=<?php echo $busarr[18];?> ></td></tr>
<tr><td>Seat18: </td><td><input type=text name=s18 value=<?php echo $busarr[19];?> ></td></tr>
<tr><td>Seat19: </td><td><input type=text name=s19 value=<?php echo $busarr[20];?> ></td></tr>
<tr><td>Seat20: </td><td><input type=text name=s20 value=<?php echo $busarr[21];?> ></td></tr>
<tr><td>Seat21: </td><td><input type=text name=s21 value=<?php echo $busarr[22];?> ></td></tr>
<tr><td>Seat22: </td><td><input type=text name=s22 value=<?php echo $busarr[23];?> ></td></tr>
<tr><td>Seat23: </td><td><input type=text name=s23 value=<?php echo $busarr[24];?> ></td></tr>
<tr><td>Seat24: </td><td><input type=text name=s24 value=<?php echo $busarr[25];?> ></td></tr>
<tr><td>Seat25: </td><td><input type=text name=s25 value=<?php echo $busarr[26];?> ></td></tr>
<tr><td>Seat26: </td><td><input type=text name=s26 value=<?php echo $busarr[27];?> ></td></tr>
<tr><td>Seat27: </td><td><input type=text name=s27 value=<?php echo $busarr[28];?> ></td></tr>
<tr><td>Seat28: </td><td><input type=text name=s28 value=<?php echo $busarr[29];?> ></td></tr>

<tr><td>Seat29: </td><td><input type=text name=s29 value=<?php echo $busarr[30];?> ></td></tr>
<tr><td>Seat30: </td><td><input type=text name=s30 value=<?php echo $busarr[31];?> ></td></tr>
<tr><td>Seat31: </td><td><input type=text name=s31 value=<?php echo $busarr[32];?> ></td></tr>
<tr><td>Seat32: </td><td><input type=text name=s32 value=<?php echo $busarr[33];?> ></td></tr>
<tr><td>Seat33: </td><td><input type=text name=s33 value=<?php echo $busarr[34];?> ></td></tr>
<tr><td>Seat34: </td><td><input type=text name=s34 value=<?php echo $busarr[35];?> ></td></tr>
<tr><td>Seat35: </td><td><input type=text name=s35 value=<?php echo $busarr[36];?> ></td></tr>

<tr><td><input type=submit value=Submit></td></tr>
</table>
</form>

</body>
</html>