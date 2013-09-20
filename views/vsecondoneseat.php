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
<div class="rt_tophead">Select The Seats to Reserve(Rs. 450/- Per seat)</div>
                        <form id="formContainersign" name="signup" method="POST" action=registered>
<table width=1000 height=100 border=3px>
<?php foreach ($query as $row):?>
<tr >
  <?php $count=-2; ?>
   <?php foreach ($row as $item):?>
<td><?php $count++;
if($count==-1)
{
$dt=$item;
}
else if($count==0)
{
$id=$item;
}
else if($item==1){

echo '<input type="checkbox" name="chkb" id="s'.$count.'" value="s'.$count.'" onclick= "if(this.checked) {addprice(this.id) } else {subprice(this.id) } " > Seat'.$count;
}
else
{
echo "Not Availble";
}
if(($count)%4==0){
echo "</td></tr><tr><td>";
}
?></td>
   <?php endforeach;?>
   </tr>
<!--Signup inputs starts-->   
</table>
<br/>
<?php echo "Date Of Journey : ".$dt."<br/>";?>
<?php echo "BUS ID : ".$id."<br/>";?>
<input type="hidden" name="daty" value="<?php echo $dt;?>" >
<input type="hidden" name="busid" value="<?php echo $id;?>" >
Price: <input type="text" name="price" id="prc" value=0 >
Seats: <input type="text" name="quantity" id="qnt" value=0 >

<script type="text/javascript">

function addprice(q){
document.getElementById("prc").value= eval(document.getElementById("prc").value-(-450));
document.getElementById("qnt").value= eval(document.getElementById("qnt").value-(-1));
document.getElementById(q).style.visibility = "hidden";

var myCars=new Array(); // regular array (add an optional integer
myCars[0]="Saab";       // argument to control array's size)


}
function subprice(){
document.getElementById("prc").value= eval(document.getElementById("prc").value-450);
document.getElementById("qnt").value= eval(document.getElementById("qnt").value-1);
}

</script>

                            <div class="right_toppart">
                                <div class="rt_bt_top1">
                                    <div class="rt_tophead">
									    Signup
                                    </div>
                                    <div class="rt_topmark">
                                        <span class="rt_please">Please Note :</span>&nbsp;&nbsp; <span class="rt_field">Fields marked with <span class="star">*</span> are required.</span>
                                    </div>

                                    <div class="form_cont">
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
                                        
										
										  <div class="rowContainer"> <label>Mobile No. <span class="star">*</span></label>
                                            <input name="mobile" id="mobnoid" class="txt_rtbox" type="text">
                                      </div>
										  <div class="rowContainer"> <label>Address <span class="star">*</span></label>
                                            <input name="address" id="adrid" class="txt_rtbox" type="text">
                                      </div>                                      
                                       
                                     
                                        <div class="rowContainer"> <label> Country <span class="star">*</span></label>

                          <select name="country" id="country" class="txt_rtbox txt_rightcls">
                                                <option value="default" selected="selected">Select</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, The Democratic Republic of the">Congo, The Democratic Republic of the</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="France, Metropolitan">France, Metropolitan</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-bissau">Guinea-bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="St. Helena">St. Helena</option>
                                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Viet Nam">Viet Nam</option>
                                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Yugoslavia">Yugoslavia</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
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
					<span class="terms">I Agree to the 	 <a href="javascript:void(0);" onclick="popup('index.html?terms=termsandconditions')">Terms of Use and Privacy Policy  </a></span>

					</div>
					<input type=hidden name=filled value=1>
					<div class="but_sub"><input class="buttonbg" name="signup" id="button" value="CheckOut" type="button"/></div>
		<div class="but_sub"><input type=submit name="CHECKOUT" value="CheckOut"></div>
                </div>
                </div>


                </div>


                </form>
                </div>

                </div>

		


















 
<!--Signup inputs ends-->  
<?php endforeach;?>
</body>
</html>