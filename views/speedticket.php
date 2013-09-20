<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Online Bus Reservation</title>
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/01bussystem/view.css" media="all">
<script type="text/javascript" src="http://127.0.0.1/01bussystem/view.js"></script>
<script type="text/javascript" src="http://127.0.0.1/01bussystem/calendar.js"></script>

</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Online Bus Reservation</a></h1>
		<form id="form_386423" class="appnitro"  method="post" action="http://127.0.0.1/01bussystem/index.php/cfirst/searchfromto" >
					<div class="form_description">
			<h2> &nbsp &nbsp Online Bus Reservation</h2>
			<p>,Secure, Fast and Cool Online Bus Reservation System</p>
			<br /><br />
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">From </label>
		<div>
		<select class="element select medium" id="element_1" name="bfrom"> 
			<option value="" selected="selected"></option>
<option value="guwahati" >Guwahati</option>
<option value="silchar" >Silchar</option>
<option value="shillong" >Shillong</option>

		</select>
		</div><p class="guidelines" id="guide_1"><small>Select from where you want a Bus</small></p> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">To </label>
		<div>
		<select class="element select medium" id="element_2" name="bto"> 
			<option value="" selected="selected"></option>
<option value="silchar" >Silchar</option>
<option value="guwahati" >Guwahati</option>
<option value="shillong" >Shillong</option>

		</select>
		</div><p class="guidelines" id="guide_2"><small>Select Where you want to go by bus</small></p> 
		</li>
		
		
			<li id="li_1" >
		<label class="description" for="element_1">Date </label>
		<span>
			<input id="element_1_1" name="element_1_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_1_1">MM</label>
		</span>
		<span>
			<input id="element_1_2" name="element_1_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_1_2">DD</label>
		</span>
		<span>
	 		<input id="element_1_3" name="element_1_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_1_3">YYYY</label>
		</span>
	
		<span id="calendar_1">
			<img id="cal_img_1" class="datepicker" src="http://127.0.0.1/01bussystem/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_1_3",
			baseField    : "element_1",
			displayArea  : "calendar_1",
			button		 : "cal_img_1",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>
					<li class="buttons">
			    <input type="hidden" name="form_id" value="386423" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Search" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>