<?php
require_once('./backend/header-link.php');
?>

<div class="header-container" style="height: 70vh;">
    <video autoplay loop class="windowimg" poster="assets/images/b-kite-banner.jpeg" id="TheCaliCampVideo" controls muted></video>
    <img class="mobileimg" src="assets/images/b-kite-school.webp">
    <div class="headline">
        <h1>B-Kite Zanzibar</h1>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {

            var breakpoint = 775;

            loadVideo();
            $(window).blur(function() {
                $('#TheCaliCampVideo')[0].pause();
            });
            $(window).focus(function() {
                if ($(document).width() > breakpoint) {
                    $('#TheCaliCampVideo')[0].play();
                }
            });
            $(window).resize(function() {
                loadVideo();
            });
            window.onpopstate = function() {
                if ($(document).width() > breakpoint) {
                    $('#TheCaliCampVideo')[0].play();
                }
            };

            function loadVideo() {
                var video = document.getElementById('TheCaliCampVideo');
                if ($(document).width() < breakpoint + 1) {
                    while (video.firstChild) {
                        video.removeChild(video.firstChild);
                    }
                }
                if ($(document).width() > breakpoint) {
                    if (document.querySelectorAll("#TheCaliCampVideo > source").length < 1) {
                        var source1 = document.createElement('source');
                        var source2 = document.createElement('source');
                        var source3 = document.createElement('source');

                        source1.setAttribute('src', 'https://www.youtube.com/watch?v=UE1pfVQgxYU');
                        source1.setAttribute('type', 'video/mp4');

                        source2.setAttribute('src', 'https://www.youtube.com/watch?v=UE1pfVQgxYU');
                        source2.setAttribute('type', 'video/webm');

                        source3.setAttribute('src', 'https://www.youtube.com/watch?v=UE1pfVQgxYU');
                        source3.setAttribute('type', 'video/ogg');

                        video.appendChild(source1);
                        video.appendChild(source2);
                        video.appendChild(source3);
                    }

                    // Play the video
                    $('#TheCaliCampVideo')[0].play();
                }
            }
        });
    </script>


</div>
</header>




<div class="logoTcc">
	<a href="index.php" style="margin-left: 2rem;"><img src="assets/demandit/Image/b-kite-white-logo.png" alt></a>
	<!-- <p>Surfing with friends</p> -->
</div>
<div class="wrapper">
    
<?php
require_once('./backend/desktop-navigation.php');
 ?>


	<div class="sidenavigation">
		<span class="clickNav">
			<img class="openClick" src="assets/demandit/Image/134216-32.png">
			<img class="closeClick" src="assets/demandit/Image/211651-32.png">
		</span>
		<p class="trennline"></p>
		<!-- <span class="language">
<a href="de.php"><p class="de">DE</p></a>
</span> -->
		<p class="trennline"></p>
		<span class="iconContact">
			<a href="contact.php"><img src="assets/demandit/File/mail-white.svg"></a>
		</span>
		<p class="trennline"></p>
	</div>
	<div class="flexcontainer infosite">
		<div class="item item1 infoitem1">
			<img class="wave" src="assets/demandit/Image/waves.png">
			<div class="maxcontainer">
				<div class="contentinformation">

				
					<!-- <div class="mb-5" id="checkAvailabilityForm" style="display: none; max-width:100%;">
						<span hidden id="identificator">en</span>
						<h4 style="color:white;" class="mb-4">Please check availability to proceed with the booking.
						</h4>
						<div class="mb-2">
							<label style="color: white; margin-right: 10px; width:100%;" for="from">From</label>
							<input style="background-color: transparent; color: white; border: 1px solid #ced4da; border-radius: .25rem; width:100%;" type="text" class="form-control" name="from" id="from" value maxlength="300" />
						</div>
						<div class="mb-3">
							<label style="color: white; margin-right: 10px; width:100%;" for="to">To</label>
							<input style="background-color: transparent; color: white; border: 1px solid #ced4da; border-radius: .25rem; width:100%;" type="text" class="form-control" name="to" id="to" value maxlength="300" />
						</div>
						<a onclick="sendValues()" style="text-decoration:none;">
							<button type="button" class="buttonformular mr-3 mb-4">Check</button>
						</a>
						<div class="mt-4" style="max-width:468px;">
							<p style="display: none; color: white;" class="wrongDates">To enjoy the spirit of our
								Kite camp, please select a minimum of 4 valid days in the future.</p>
							<p style="display: none; color: white;" class="noVacancy">Unfortunately, we are full
								during your requested dates. We would love to have you, so please select an
								alternative date range.</p>
							<p style="display: none; color: white;" class="yesVacancy">Your Kite trip dates are
								available! Please fill out the booking form below.</p>
							<p style="display: none; color: white;" class="longPeriod">You would like to come to us
								for more than 30 days. Please contact us by <a href="assets/demos/email-protection.php#b3d7d2c5d6f3c7dbd6d0d2dfdad0d2dec39dd0dcde" class="links" style="text-decoration: underline; cursor:pointer;">mail</a>.</p>
							<p style="display: none; color: white;" class="weekendPeriod">You would like to come to
								us for 4 days, then please do not choose a whole weekend, because we do not offer
								guided lessons on weekends.</p>
						</div>
					</div> -->
					<!-- <script data-cfasync="false" src="assets/js/email-decode.min.js"></script> -->
					<!-- <script>
						var sendValues = function() {
							var from = $("#from").val();
							var to = $('#to').val();
							checkNumberOfDays(from, to);
						}
					</script> -->
					<!-- <script type="text/javascript">
						// session f�r fckeditor schreiben
						fckCFSessionCFID = "149103729";
						fckCFSessionCFTOKEN = "904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68";
						fckCFWebrootPath = "404.php";
						fckCFPage = "137036";
						fckCFLayout_inhalt_id = 0;
						fckCFEditorInstanceName = "none";
						fckCFWebrootSystem = "/System204F";
						fckCFBasePath = "JavaScripts/fckeditor/2_5_1";
					</script> -->
					<div id="alertMsg_8752" class="alertMsg" style="display: none;"></div>

					<form action="" enctype="multipart/form-data" method="post" style="margin:0px; padding:0px;">
						<div id="">
							<h2 class="whiteTitle">Booking</h2>
							<div class="information">
								<p>If you have any Questions before booking, just mail to 
									<a class="links" href="mailto:contact@bkitezanzibar.com">contact@bkitezanzibar.com</a>.
								</p>
							</div>
							<p class="dem_meldung"></p>
							<div class="booking">
								<p>All bookings with flexible arrival dates. Changes in dates are free.</p>
								<h5 class="infotitleOnecol">About you</h5>
								<div class="form-group">
									<label for="titel">Titel: *</label>
									<select name="" class="form-control" id="" size="0">
										<option value="3">Mr</option>
										<option value="4">Ms</option>
									</select><input type="hidden" name="" id="" value="3,4" />
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="firstname">First Name: *</label>
										<input type="text" name="" class="form-control" id="" value maxlength="300" />
									</div>
									<div class="form-group col-md-6">
										<label for="surname">Surname</label>
										<input type="text" name="" class="form-control" id="" value maxlength="300" />
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="street">Street *</label>
										<input type="text" name="fg_formfield_id_70577" class="form-control" id="fg_formfield_id_70577" value maxlength="300" />
									</div>
									<div class="form-group col-md-6">
										<label for="plz">ZIP / City *</label>
										<input type="text" name="fg_formfield_id_70578" class="form-control" id="fg_formfield_id_70578" value maxlength="300" />
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="country">Country *</label>
										<select name="fg_formfield_id_70579" class="form-control" id="fg_formfield_id_70579" size>
											<option value="1">Schweiz - Suisse</option>
											<option value="2">Deutschland</option>
											<option value="3">Österreich</option>
											<option value="4">France</option>
											<option value="5">Italia</option>
											<option value="6">Afghanistan</option>
											<option value="7">Aland Islands</option>
											<option value="8">Albania</option>
											<option value="9">Algeria</option>
											<option value="10">American Samoa</option>
											<option value="11">Andorra</option>
											<option value="12">Angola</option>
											<option value="13">Anguilla</option>
											<option value="14">Antarctica</option>
											<option value="15">Antigua And Barbuda</option>
											<option value="16">Argentina</option>
											<option value="17">Armenia</option>
											<option value="18">Aruba</option>
											<option value="19">Australia</option>
											<option value="21">Azerbaijan</option>
											<option value="22">Bahamas</option>
											<option value="23">Bahrain</option>
											<option value="24">Bangladesh</option>
											<option value="25">Barbados</option>
											<option value="26">Belarus</option>
											<option value="27">Belgium</option>
											<option value="28">Belize</option>
											<option value="29">Benin</option>
											<option value="30">Bermuda</option>
											<option value="31">Bhutan</option>
											<option value="32">Bolivia</option>
											<option value="33">Bosnia And Herzegovina</option>
											<option value="34">Botswana</option>
											<option value="35">Bouvet Island</option>
											<option value="36">Brazil</option>
											<option value="37">British Indian Ocean Territory</option>
											<option value="38">Brunei Darussalam</option>
											<option value="39">Bulgaria</option>
											<option value="40">Burkina Faso</option>
											<option value="41">Burundi</option>
											<option value="42">Cambodia</option>
											<option value="43">Cameroon</option>
											<option value="44">Canada</option>
											<option value="45">Cape Verde</option>
											<option value="46">Cayman Islands</option>
											<option value="47">Central African Republic</option>
											<option value="48">Chad</option>
											<option value="49">Chile</option>
											<option value="50">China</option>
											<option value="51">Christmas Island</option>
											<option value="52">Cocos (keeling) Islands</option>
											<option value="53">Colombia</option>
											<option value="54">Comoros</option>
											<option value="55">Congo</option>
											<option value="56">Congo, The Democratic Republic Of The</option>
											<option value="57">Cook Islands</option>
											<option value="58">Costa Rica</option>
											<option value="59">Câte D'ivoire</option>
											<option value="60">Croatia</option>
											<option value="61">Cuba</option>
											<option value="62">Cyprus</option>
											<option value="63">Czech Republic</option>
											<option value="64">Denmark</option>
											<option value="65">Djibouti</option>
											<option value="66">Dominica</option>
											<option value="67">Dominican Republic</option>
											<option value="68">Ecuador</option>
											<option value="69">Egypt</option>
											<option value="70">El Salvador</option>
											<option value="71">Equatorial Guinea</option>
											<option value="72">Eritrea</option>
											<option value="73">Estonia</option>
											<option value="74">Ethiopia</option>
											<option value="75">Falkland Islands (malvinas)</option>
											<option value="76">Faroe Islands</option>
											<option value="77">Fiji</option>
											<option value="78">Finland</option>
											<option value="80">French Guiana</option>
											<option value="81">French Polynesia</option>
											<option value="82">French Southern Territories</option>
											<option value="83">Gabon</option>
											<option value="84">Gambia</option>
											<option value="85">Georgia</option>
											<option value="87">Ghana</option>
											<option value="88">Gibraltar</option>
											<option value="89">Greece</option>
											<option value="90">Greenland</option>
											<option value="91">Grenada</option>
											<option value="92">Guam</option>
											<option value="93">Guatemala</option>
											<option value="94">Guernsey</option>
											<option value="95">Guinea</option>
											<option value="96">Guinea-bissau</option>
											<option value="97">Guyana</option>
											<option value="98">Haiti</option>
											<option value="99">Heard Island And Mcdonald Islands</option>
											<option value="100">Holy See (vatican City State)</option>
											<option value="101">Honduras</option>
											<option value="102">Hong Kong</option>
											<option value="103">Hungary</option>
											<option value="104">Iceland</option>
											<option value="105">India</option>
											<option value="106">Indonesia</option>
											<option value="107">Iran, Islamic Republic Of</option>
											<option value="108">Iraq</option>
											<option value="109">Ireland</option>
											<option value="110">Isle Of Man</option>
											<option value="111">Israel</option>
											<option value="113">Jamaica</option>
											<option value="114">Japan</option>
											<option value="115">Jersey</option>
											<option value="116">Jordan</option>
											<option value="117">Kazakhstan</option>
											<option value="118">Kenya</option>
											<option value="119">Kiribati</option>
											<option value="120">Korea, Democratic People's Republic Of</option>
											<option value="121">Korea, Republic Of</option>
											<option value="122">Kuwait</option>
											<option value="123">Kyrgyzstan</option>
											<option value="124">Lao People's Democratic Republic</option>
											<option value="125">Latvia</option>
											<option value="126">Lebanon</option>
											<option value="127">Lesotho</option>
											<option value="128">Liberia</option>
											<option value="129">Libyan Arab Jamahiriya</option>
											<option value="130">Liechtenstein</option>
											<option value="131">Lithuania</option>
											<option value="132">Luxembourg</option>
											<option value="133">Macao</option>
											<option value="134">Macedonia, The Former Yugoslav Republic Of</option>
											<option value="135">Madagascar</option>
											<option value="136">Malawi</option>
											<option value="137">Malaysia</option>
											<option value="138">Maldives</option>
											<option value="139">Mali</option>
											<option value="140">Malta</option>
											<option value="141">Marshall Islands</option>
											<option value="142">Martinique</option>
											<option value="143">Mauritania</option>
											<option value="144">Mauritius</option>
											<option value="145">Mayotte</option>
											<option value="146">Mexico</option>
											<option value="147">Micronesia, Federated States Of</option>
											<option value="148">Moldova</option>
											<option value="149">Monaco</option>
											<option value="150">Mongolia</option>
											<option value="151">Montserrat</option>
											<option value="152">Morocco</option>
											<option value="153">Mozambique</option>
											<option value="154">Myanmar</option>
											<option value="155">Namibia</option>
											<option value="156">Nauru</option>
											<option value="157">Nepal</option>
											<option value="158">Netherlands</option>
											<option value="159">Netherlands Antilles</option>
											<option value="160">New Caledonia</option>
											<option value="161">New Zealand</option>
											<option value="162">Nicaragua</option>
											<option value="163">Niger</option>
											<option value="164">Nigeria</option>
											<option value="165">Niue</option>
											<option value="166">Norfolk Island</option>
											<option value="167">Northern Mariana Islands</option>
											<option value="168">Norway</option>
											<option value="169">Oman</option>
											<option value="170">Pakistan</option>
											<option value="171">Palau</option>
											<option value="172">Palestinian Territory, Occupied</option>
											<option value="173">Panama</option>
											<option value="174">Papua New Guinea</option>
											<option value="175">Paraguay</option>
											<option value="176">Peru</option>
											<option value="177">Philippines</option>
											<option value="178">Pitcairn</option>
											<option value="179">Poland</option>
											<option value="180">Portugal</option>
											<option value="181">Puerto Rico</option>
											<option value="182">Qatar</option>
											<option value="183">R?union</option>
											<option value="184">Romania</option>
											<option value="185">Russian Federation</option>
											<option value="186">Rwanda</option>
											<option value="187">Saint Helena</option>
											<option value="188">Saint Kitts And Nevis</option>
											<option value="189">Saint Lucia</option>
											<option value="190">Saint Pierre And Miquelon</option>
											<option value="191">Saint Vincent And The Grenadines</option>
											<option value="192">Samoa</option>
											<option value="193">San Marino</option>
											<option value="194">Sao Tome And Principe</option>
											<option value="195">Saudi Arabia</option>
											<option value="196">Senegal</option>
											<option value="197">Seychelles</option>
											<option value="198">Sierra Leone</option>
											<option value="199">Singapore</option>
											<option value="200">Slovakia</option>
											<option value="201">Slovenia</option>
											<option value="202">Solomon Islands</option>
											<option value="203">Somalia</option>
											<option value="204">South Africa</option>
											<option value="205">South Georgia And The South Sandwich Islands
											</option>
											<option value="206">Spain</option>
											<option value="207">Sri Lanka</option>
											<option value="208">Sudan</option>
											<option value="209">Suriname</option>
											<option value="210">Svalbard And Jan Mayen</option>
											<option value="211">Swaziland</option>
											<option value="212">Sweden</option>
											<option value="214">Syrian Arab Republic</option>
											<option value="215">Taiwan, Province Of China</option>
											<option value="216">Tajikistan</option>
											<option value="217">Tanzania, United Republic Of</option>
											<option value="218">Thailand</option>
											<option value="219">Timor-leste</option>
											<option value="220">Togo</option>
											<option value="221">Tokelau</option>
											<option value="222">Tonga</option>
											<option value="223">Trinidad And Tobago</option>
											<option value="224">Tunisia</option>
											<option value="225">Turkey</option>
											<option value="226">Turkmenistan</option>
											<option value="227">Turks And Caicos Islands</option>
											<option value="228">Tuvalu</option>
											<option value="229">Uganda</option>
											<option value="230">Ukraine</option>
											<option value="231">United Arab Emirates</option>
											<option value="232">United Kingdom</option>
											<option value="233">United States</option>
											<option value="234">Uruguay</option>
											<option value="235">Uzbekistan</option>
											<option value="236">Vanuatu</option>
											<option value="237">Venezuela</option>
											<option value="238">Viet Nam</option>
											<option value="239">Virgin Islands, British</option>
											<option value="240">Virgin Islands, U.s.</option>
											<option value="241">Wallis And Futuna</option>
											<option value="242">Western Sahara</option>
											<option value="243">Yemen</option>
											<option value="244">Zambia</option>
											<option value="245">Zimbabwe</option>
											<option value="246">Fürstentum Lichtenstein</option>
										</select><input type="hidden" name="fg_formfield_id_70579_values" id="fg_formfield_id_70579_values" value="1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,80,81,82,83,84,85,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,214,215,216,217,218,219,220,221,222,223,224,225,226,227,228,229,230,231,232,233,234,235,236,237,238,239,240,241,242,243,244,245,246" />
									</div>
									<div class="form-group col-md-6">
										<label for="phone">Phone *</label>
										<input type="text" name="fg_formfield_id_70580" class="form-control" id="fg_formfield_id_70580" value maxlength="300" />
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="birth">Year of Birth *</label>
										<input type="text" name="fg_formfield_id_70581" class="form-control" id="fg_formfield_id_70581" value maxlength="300" />
									</div>
									<div class="form-group col-md-6">
										<label for="email">E-Mail *</label>
										<input type="text" name="fg_formfield_id_70582" class="form-control" id="fg_formfield_id_70582" value maxlength="300" />
									</div>
								</div>
								<br><br>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="surflevel">Kite level *</label>
										<select name="fg_formfield_id_70583" class="form-control" id="fg_formfield_id_70583" size>
											<option value="1">Beginner</option>
											<option value="2">Intermediate</option>
											<option value="3">Advanced</option>
										</select><input type="hidden" name="fg_formfield_id_70583_values" id="fg_formfield_id_70583_values" value="1,2,3" />
									</div>
									<div class="form-group col-md-6">
										<label for="accomodation">Accomodation *</label>
										<select name="fg_formfield_id_70584" class="form-control" id="fg_formfield_id_70584" size="0">
											<option value="1">Shared Room with a friend</option>
											<option value="11">Shared Solo Traveler</option>
											<option value="2">Single Room</option>
										</select><input type="hidden" name="fg_formfield_id_70584_values" id="fg_formfield_id_70584_values" value="1,11,2" />
									</div>
								</div>
								<div class="form-group">
									<label for="comment">Comment</label>
									<textarea name="fg_formfield_id_70591" class="form-control" id="fg_formfield_id_70591"></textarea>
								</div>
								<br><br>
								<h5 class="infotitleOnecol">When would you like to come</h5>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="from">From*</label>
										<input type="date" name="" class="form-control" id="fg_formfield_id_70600" value maxlength="300" />
									</div>
									<div class="form-group col-md-6">
										<label for="until">Until *</label>
										<input type="date" name="" class="form-control" id="fg_formfield_id_70601" value maxlength="300" />
									</div>
								</div>
								<div class="form-group">
									<label for="comment">Arrival information for Pickup</label>
									<textarea name="fg_formfield_id_70593" class="form-control" id="fg_formfield_id_70593"></textarea>
								</div>
	
								<div class="form-group">
									<label for="fg_formfield_id_72188">Airport pick-up / drop-off</label>
									<select name="fg_formfield_id_72188" class="form-control" id="fg_formfield_id_72188" size="0">
										<option value="11">none</option>
										<option value="2">Airport pick-up LAX - Zanzibar Airport, $99</option>
										<option value="3">Airport pick-up / drop-off LAX - Zanzibar Airport, $198
										</option>
										
									</select><input type="hidden" name="fg_formfield_id_72188_values" id="fg_formfield_id_72188_values" value="11,2,3,4,5" />
								</div>
								<div class="form-group">
									<label for="medical">Medical Information</label>
									<textarea name="fg_formfield_id_70596" class="form-control" id="fg_formfield_id_70596"></textarea>
								</div>
								<div class="form-group">
									<label for="medical">Emergency Contact</label>
									<textarea name="fg_formfield_id_70592" class="form-control" id="fg_formfield_id_70592"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" name="fg_formfield_id_70588" class="buttonformular" id="fg_formfield_id_70588" value="Submit" onClick="this.form.submited_button.value='fg_formfield_id_70588';" />
								</div>
								<input type="hidden" name="fg_formfield_id_70602" class="form_element" id="fg_formfield_id_70602" value maxlength="300" />
								<input type="hidden" name="fg_formfield_id_74884" class="form_element" id="fg_formfield_id_74884" value="1" maxlength="300" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
require_once('./backend/footer-link.php');
?>