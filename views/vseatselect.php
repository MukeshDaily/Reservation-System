<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Online Bus Reservation</title>
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/01bussystem/viewmap.css" media="all">
<script type="text/javascript" src="http://127.0.0.1/01bussystem/view.js"></script>
</head>
<body id="main_body" >
	<div id="form_container">
	
		<h1><a>Online Bus Reservation</a></h1>

		


<h4>Bus Details</h4>

<table width=900 height=50>
<tr bgcolor=#abc>
<td>Bus ID</td><td>Bus Name</td> <td>From</td> <td>To</td> <td>departure</td> <td>Arrival</td> <td>Type</td> <td>Seats</td> <td>Fare</td> <td>Facilities</td><td>Stars</td><td>SeatPlan</td>
</tr>
<?php foreach ($busdeatal as $row):
$cnt=0;
?>
   <tr bgcolor=#def>
   
   <?php foreach ($row as $item):?>
<td><?php echo $item; 
$busarr[$cnt]=$item;
$cnt++;
?></td>
   <?php endforeach;?>
</tr>
<?php endforeach;?>
</table


<h4>Please Select The Seats to Reserve(Rs. <?php  echo $busarr[8]; ?> Per seat)</h4>


<?php 
foreach ($query as $row):
  $cnt=0;
  foreach ($row as $item):
	$allseats[$cnt]=$item;
	$cnt++;
  endforeach;
endforeach;
?>

<?php
$rowcount=0;
$plan1x=array( array(2,3,7,10,14,18,19,23,26,31),
			   array(1,4,8,9,13,17,20,24,25,30),
			   array(29),
			   array(5,6,11,12,15,16,21,22,27,28)
);
$plan2x=array( array(2,3,10,11,18,19,26,27,35),
			   array(1,4,9,12,17,20,25,28,34),
			   array(33),
			   array(5,8,13,16,21,24,29,32),
			   array(6,7,14,15,22,23,30,31)
);
//if($busarr[11]="2x1"){$plan=$plan1x;}else{$plan=$plan2x;}
if($busarr[11]=="2x1"){
echo "<table width=600 height=200>";
foreach($plan1x as $y):
echo "<tr>";
$rowcount++;
if($rowcount==3){
echo "<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
}
foreach($y as $x):
echo "<td>";
if($allseats[$x+1]==1){
echo '<img src="http://127.0.0.1/01bussystem/busimage/2.jpg" id=s'.$x.' onclick="c(this.id,'.$x.')" title="Seat number: S'.$x.'  |  Fare: Rs.'.$busarr[8].'">';
}
else{
echo '<img src="http://127.0.0.1/01bussystem/busimage/3.jpg" title="Booked Seat">';
}
echo "</td>";
endforeach;
echo '</tr>';
endforeach;
echo "</table>";

}
else{
echo "<table width=600 height=200>";
foreach($plan2x as $y):
echo "<tr>";
$rowcount++;
if($rowcount==3){
echo "<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>";
}
else if($rowcount>3){
echo "<td></td>";
}
foreach($y as $x):
echo "<td>";
if($allseats[$x+1]==1){
echo '<img src="http://127.0.0.1/01bussystem/busimage/2.jpg" id=s'.$x.' onclick="c(this.id,'.$x.')" title="Seat number: S'.$x.'  |  Fare: Rs.'.$busarr[8].'">';
}
else{
echo '<img src="http://127.0.0.1/01bussystem/busimage/3.jpg" title="Booked Seat">';
}
echo "</td>";
endforeach;
echo '</tr>';
endforeach;
echo "</table>";
}
?>

<script type="text/javascript">
imgs=Array("http://127.0.0.1/01bussystem/busimage/1.jpg","http://127.0.0.1/01bussystem/busimage/2.jpg");
var s=new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
se=Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
//s=Array($allseats[2],0,0,0);
var oneitemprice=<?php  echo $busarr[8]; ?>;

function c(id,no){
document.getElementById(id).src=imgs[s[no]++];
se[no]=id;

if (s[no]==2) {
s[no]=0;
se[no]=0;
document.getElementById("prc").value= eval(document.getElementById("prc").value-oneitemprice);
document.getElementById("qnt").value= eval(document.getElementById("qnt").value-1);
}
else if(s[no]==1) {
document.getElementById("prc").value= eval(document.getElementById("prc").value-(-oneitemprice));
document.getElementById("qnt").value= eval(document.getElementById("qnt").value-(-1));
}
var comma=0;
document.getElementById("seatno").value='';
for(var item in se){
if(se[item]!=0){
if(comma==0)
  {
	document.getElementById("seatno").value+=se[item];
  }
else
 {
	document.getElementById("seatno").value+=","+se[item];
 }
comma++; 
}
}
}

</script>

		
		
<form class="mapintro" name="signup" method="POST" action="http://127.0.0.1/01bussystem/index.php/cfirst/signup" >	
			<div class="form_description">
			<h4>Your Seat Detail</h4>
		</div>
<!--selected seat plan starts-->											
<table>
<tr bgcolor=#abc>
<td>Today</td>
<td>Date of Journey</td>
<td>Bus Id</td>
<td>Price</td>
<td>No. Of Seats</td>
<td>Seat Numbers</td>
</tr>
<tr>
<td>
<div class="rowContainer"> 					
<input type="text" name="dat" value="<?php echo mdate("%Y-%m-%d", time());?>" disabled>
</div>
</td>
<td>
<div class="rowContainer"> 					
<input type="text" name="daty" value="<?php echo $allseats[0];?>" onfocus="blur();">
</div>
</td>
<td>
<div class="rowContainer"> 
<input type="text" name="busid" value="<?php echo $allseats[1];?>" onfocus="blur();">
</div>
</td>
<td>
<div class="rowContainer"> 
</label><input type="text" name="price" id="prc" value=0 onfocus="blur();">
</div>
</td>
<td>
<div class="rowContainer"> 
</label> <input type="text" name="quantity" id="qnt" value=0 onfocus="blur();">
</div>
</td>
<td>
<div class="rowContainer"> 
<input type="text" name="seatno" id="seatno" value='' onfocus="blur();">
</div>
</td>
</tr>
<tr>
<td></td><td></td><td></td>
<td>
<input type=submit name=seatform value="SignUp" title="Signup Here" >
</td>
</tr>
</table>
	
<!--selected seat plan ends-->	
		
		</form>	

		<div id="footer">

		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>