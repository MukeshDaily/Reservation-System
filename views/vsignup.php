<html>
<head>
 <link rel="stylesheet" type="text/css" href="http://127.0.0.1/01bussystem/css/style.css"/>
 <script type="text/javascript" src="http://127.0.0.1/01bussystem/js/jquery.js"></script>
 <script type="text/javascript" src="http://127.0.0.1/01bussystem/js/signupvalidation.js"> </script>
</head>
<body>


<div class="clear"></div>
                <div class="signup_container">

                    <div class="signup_right">

<form id="formContainersign" name="signup" method="POST" action="http://127.0.0.1/01bussystem/index.php/cfirst/registered" >									

<!--selected seat plan starts-->											
<table width=900 border=3px >
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
<input type="text" name="daty" value="<?php echo $_POST['daty'];?>" onfocus="blur();">
</div>
</td>
<td>
<div class="rowContainer"> 
<input type="text" name="busid" value="<?php echo $_POST['busid'];?>" onfocus="blur();">
</div>
</td>
<td>
<div class="rowContainer"> 
</label><input type="text" name="price" id="prc" value="<?php echo $_POST['price'];?>" onfocus="blur();">
</div>
</td>
<td>
<div class="rowContainer"> 
</label> <input type="text" name="quantity" id="qnt" value="<?php echo $_POST['quantity'];?>" onfocus="blur();">
</div>
</td>
<td>
<div class="rowContainer"> 
<input type="text" name="seatno" id="seatno" value="<?php echo $_POST['seatno'];?>" onfocus="blur();">
</div>
</td>
</tr>
</table>	
<!--selected seat plan ends-->	



						
									
									<div class="rowContainer"> <label>Your Name <span class="star">*</span></label> <input name="usernamey" id="uname" class="txt_rtbox" autocomplete="off" type="text"><span class="spanclass" id="nameInfo">Enter Valid Name</span></div>
                                        <div class="rowContainer">
                                            <label>Valid Email Address<span class="star">*</span></label>
                                            <input name="emaily" id="email" class="txt_rtbox" type="text">
                                                <span class="spanclass" id="emailInfo">Valid E-mail please, you will need it to log in!</span>
                                        </div>
                                        <div class="rowContainer">
                                            <label>Confirm Email <span class="star">*</span></label>
                                            <input name="email_confirmy" id="email_confirm" class="txt_rtbox" type="text">
                                                <span class="spanclass" id="email_confirmInfo">E-mail Should be same as Original Email Address.</span>
                                        </div>
                                        
										
										  <div class="rowContainer"> <label>Mobile No. <span class="star">*</span></label><input name="mobile" id="mobnoid" class="txt_rtbox" type="text"><span class="spanclass" id="mobileInfo">Enter Valid Mobile Number</span></div>
										  <div class="rowContainer"> <label>Address <span class="star">*</span></label><input name="address" id="adrid" class="txt_rtbox" type="text"></div>
                                        <div class="rowContainer"> <label> Country <span class="star">*</span></label><select name="country" id="country" class="txt_rtbox txt_rightcls">
                                                <option value="default" >Select</option>
                                                <option value="India" selected="selected">India</option>
												<option value="Afghanistan">Afghanistan</option>
                                            </select>
                                            <span class="spanclass" id="counInfo">Select Your Country.</span>
                                        </div>

                                        <div class="rowContainer"> <label> Gender  <span class="star">*</span></label>
                                            <input class="row_input" name="gender" id="gender_0" value="Male" checked="checked" type="radio">
						       Male
                                                <input name="gender" class="row_input" id="gender_0" value="Female" type="radio">
						Female
                                                    </div>
                                                 
					<div class="rowContainer">
					<label> Verification <span class="star">*</span></label>
					<input onfocus="javascript:checkdate(this);" name="verification" id="verification" class="txt_rtbox2" type="text">

					<span class="spanclass" id="imge_verification">Please enter The correct code - Case Sensitive.</span>
					</div>
					
					<div class="rowContainer" style="height:60px;">
					<label>  <span class="star">&nbsp;</span></label>
					<img src="http://127.0.0.1/01bussystem/images/visual-captcha.jpeg" class="captchaimg" name="captcha" id="captcha" border="1" width="210">

						<div class="catchahelp">
						<a class="catch_sub" onclick="javascript:reloadImage('visual-captcha.php');">
						<img src="http://127.0.0.1/01bussystem/images/refresh.gif" class="refreshimg" title="Refresh Image" border="1">
						</a>
						</div>
					</div>
				
					
					
					<div class="rowContainer">
					<label>  <span class="star">&nbsp;</span></label>
					<input name="agree" id="agree" value="yes" checked="checked" type="checkbox">
					<span class="terms">I Agree to the 	 <a href="javascript:void(0);" onclick="popup('http://www.01fes.com/termsnadconditions.html')">Terms of Use and Privacy Policy  </a></span>

					</div>
					<input type=hidden name=filled value=1>
					<input type=hidden name=userid value=<?php echo rand(10000,60000)?>>
					<div class="but_sub"><input class="buttonbg" name="signup" id="button" value="CheckOut" type="button"/></div>
                               
                </form>
                </div>

                </div>


 
<!--Signup inputs ends-->  

</body>
</html>

