<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Online Bus Reservation PNR Status</title>
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/01bussystem/view.css" media="all">
<script type="text/javascript" src="http://127.0.0.1/01bussystem/view.js"></script>
<script type="text/javascript" src="http://127.0.0.1/01bussystem/calendar.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Get Mobile Ticket or eTicket</a></h1>
		<form id="form_386423" class="appnitro"  method="post" action="http://127.0.0.1/01bussystem/index.php/csupport/get_mticket" >
					<div class="form_description">
			<h2> &nbsp &nbsp PNR Status</h2>
			<p>Enter PNR to Download The eTicket and Get Mobile-Ticket</p>
			<br /><br />
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">PNR </label>
		<div>
		<input type=text class="element select medium" id="element_1" name="pnr"> 
		</div><p class="guidelines" id="guide_1"><small>Enter The PNR of Your Bus-Ticket</small></p> 
		</li>		
		
					<li class="buttons">
			    <input type="hidden" name="form_id" value="386423" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Check" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>