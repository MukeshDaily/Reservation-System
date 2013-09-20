<html>
<head>
</head>
<body>


<table width=1100 height=50 border=1px>
<tr bgcolor=green>
<td>Date Of Journey</td><td>BusId</td> <td>seat1</td> <td>seat2</td> <td>seat3</td> <td>seat4</td> <td>seat5</td> <td>seat6</td> <td>seat7</td> <td>seat8</td><td>seat9</td><td>seat10</td> <td>seat11</td><td>seat12</td><td>seat13</td><td>seat14</td><td>seat15</td><td>seat16</td><td>seat17</td><td>seat18</td><td>seat19</td><td>seat20</td><td>seat21</td><td>seat22</td><td>seat23</td><td>seat24</td><td>seat25</td><td>seat26</td><td>seat27</td><td>seat28</td><td>seat29</td><td>seat30</td><td>seat31</td><td>seat32</td><td>seat33</td><td>seat34</td><td>seat35</td><td>Edit</td><td>Delete</td>
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
<a href="http://127.0.0.1/01bussystem/index.php/cfadmin/editseats?busid=<?php echo $busarr[1]; ?>&busdate=<?php echo $busarr[0]; ?>">Edit</a></td>
<td><a href="http://127.0.0.1/01bussystem/index.php/cfadmin/dropdate?busid=<?php echo $busarr[1]; ?>&busdate=<?php echo $busarr[0]; ?>">Delete</a></td>
   </tr>
<?php endforeach;?>
</table>
<br>

<h2>Get A Bus Detail From Database</h2>
<form action=getdb method=POST>
<table>
<tr><td>BUSID: </td><td><input type=text name=busid></td></tr>
<tr><td></td><td><input type=submit value=Submit></td></tr>
</table>
</form>

<br>
<h2>Insert a Bus Date and Seats Into Database</h2>
<br>

<form action=insertdateandseats method=POST>
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


</body>
</html>