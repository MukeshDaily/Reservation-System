<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Online Bus Reservation</title>
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/01bussystem/viewmap.css" media="all">
<!--Jquery pop up-->

<link type="text/css" href="http://127.0.0.1/01bussystem/css/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="http://127.0.0.1/01bussystem/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="http://127.0.0.1/01bussystem/js/jquery-ui-1.8.16.custom.min.js"></script>
		
		<script type="text/javascript">
			$(function(){

				// Accordion
				$("#accordion").accordion({ header: "h3" });
	
				// Tabs
				$('#tabs').tabs();
	

				// Dialog			
				$('#dialog').dialog({
					autoOpen: false,
					width: 600,
					buttons: {
						"Ok": function() { 
							$(this).dialog("close"); 
						}, 
						"Cancel": function() { 
							$(this).dialog("close"); 
						} 
					}
				});
				
				// Dialog Link
				$('#dialog_link').click(function(){
					$('#dialog').dialog('open');
					return false;
				});

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});
				
				// Slider
				$('#slider').slider({
					range: true,
					values: [17, 67]
				});
				
				// Progressbar
				$("#progressbar").progressbar({
					value: 20 
				});
				
				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); }, 
					function() { $(this).removeClass('ui-state-hover'); }
				);
				
			});
		</script>
		<style type="text/css">
			/*demo page css*/
			body{ font: 62.5% "Trebuchet MS", sans-serif; margin: 50px;}
			.demoHeaders { margin-top: 0em;}
			#dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
			#dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
		</style>	
<!--ends here-->
</head>
<body id="main_body" >
	
	<img id="top" src="http://127.0.0.1/01bussystem/top.png" alt="">
	<div id="form_container">
	
	
	<h1><a>Online Bus Reservation</a></h1>
	<br>
	
	
	
	<table width=1100 height=50 border=0px>
<tr bgcolor=#abc>
<td>Bus Code</td><td>Bus Name</td> <td>From</td> <td>To</td> <td>departure</td> <td>Arrival</td> <td>Type</td> <td>Seats</td> <td>Fare</td> <td>Facilities</td><td>Rating(/5)</td><td>SeatPlan</td><td>Review</td><td>Reserve</td>

</tr>
<?php foreach ($query as $row): 
$c=0;
?>
   <tr bgcolor=#def>

 <form id="form_386423" class="appnitro"  method="post" action="http://127.0.0.1/01bussystem/index.php/cfirst/booknow" >

<input type=hidden name=busdate value=<?php echo $busdate;?>>

   <!--process as  hidden id for post-->
   <?php foreach ($row as $item):?>
<input type=hidden name=bid value=<?php echo $item;?>>
   <?php break; endforeach;?>
  <!--End-->
  
   <?php foreach ($row as $item):?>
<td><?php if($c==10){
for($j=0;$j<$item;$j++){echo '<img src="http://127.0.0.1/01bussystem/busimage/star.png">';}
}
else{
echo $item;
}
$barr[$c]=$item; $c++; 
?>
</td>
   <?php endforeach;?>
<td>


<!-- download link-->
		<h2 class="demoHeaders"></h2>
		<p><a href="#" id="dialog_link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Bus Details</a></p>
		
<!-- ui-dialog -->
	<div id="dialog" title="About Bus">
			<p>
			<!-- Tabs -->
		<h2 class="demoHeaders"></h2>
		<div id="tabs">
			<ul>
				
				<li><a href="#tabs-1">Photo</a></li>
				<li><a href="#tabs-2">Refund Policy</a></li>
				<li><a href="#tabs-3">Contact</a></li>
			</ul>
			<div id="tabs-1">
			<br><img src="http://127.0.0.1/01bussystem/busimage/phone2.png" title="Call 9957809805"> <br>
			<img src="http://127.0.0.1/01bussystem/busimage/<?php echo $barr[0];?>.png" width=400 height=200><br>
			</div>
			<div id="tabs-2">
			<br>
			<br><img src="http://127.0.0.1/01bussystem/busimage/refund.png"><br>
			If our bus Cancels due to any reason we offer : <font color=red>100% Refund</font>	<br><br>
In Case You Want to Cancel Bus Ticket for any reason we offer:  <font color=red>80% Refund </font> <br><br> 
Ticket cancellation Stops on 24Hrs before of the journey date.<br>
			</div>
			<div id="tabs-3">
			Contact us: 
<br><img src="http://127.0.0.1/01bussystem/busimage/care.png">		
		<br><img src="http://127.0.0.1/01bussystem/busimage/phone.jpg">  9957809805
		<br><img src="http://127.0.0.1/01bussystem/busimage/phone.jpg">  9957809805
		<br><img src="http://127.0.0.1/01bussystem/busimage/phone.jpg">  9957809805
		
		<br><img src="http://127.0.0.1/01bussystem/busimage/mail.gif"> info@0fes.com
		<br><img src="http://127.0.0.1/01bussystem/busimage/mail.gif"> training@0fes.com
		
		</div>
			</p>
	</div>


		

</td>
<td><input type=submit value="Book Now"></td>
</form>
</tr>
<?php endforeach;?>
</table>

	
<br><br><br><br>
	<div id="footer">
			
		</div>
	</div>
	
	</body>
</html>