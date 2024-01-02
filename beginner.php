<?php
require_once('./backend/header-link.php');
?>

<div class="header-container">
	<img class="windowimg" src="assets/images/beginner-lessons-banner.webp">
	<img class="mobileimg" src="assets/images/beginner-lessons-banner.webp">
	<div class="menu">
		<h4>Beginner</h4>
	</div>
</div>
</header>
<div class="logoTcc">
	<a href="index.php" style="margin-left: 2rem;">
		<img src="assets/demandit/Image/b-kite-white-logo.png" alt="B-Kite Logo" width="120px">
	</a>
	<!-- <p>B-Kite Zanzibar</p> -->
</div>
<div class="wrapper">
	<div id="mySidenav" class="sidenav">
		<script language="JavaScript">
			function changepic(iobj_id, bild) { //alert(document.getElementById(obj_id).src);
				document.getElementById(obj_id).src = '//assets/demandit/modul_12/' + bild;
			}

			function changeback(obj_id, bild) {
				//alert(document.getElementById(obj_id).src);
				document.getElementById(obj_id).style.background = 'url(//assets/demandit/modul_12/' + bild + ')';
			}
		</script>
		<ul class="fw-nav-level2">
			<li class="fw-nav-btn fw-nav-first" id="navbutt_20844_56535"><a class="fw-nav-first" href="index.php" id="navlink_20844_56535">Home</a></li>
			<li class="fw-nav-btn" id="navbutt_46814_56535"><a href="index190d.php?page=137015&amp;cfid=149103729&amp;cftoken=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68" id="navlink_46814_56535">Rates & Location</a>
				<ul class="fw-nav-level3">
					<li class="fw-nav-btn fw-nav-first" id="navbutt_46825_56535"><a class="fw-nav-first" href="rates.php" id="navlink_46825_56535">Rates</a></li>
					<li class="fw-nav-btn" id="navbutt_46828_56535"><a href="rooms.php" id="navlink_46828_56535">Rooms</a></li>
					<li class="fw-nav-btn" id="navbutt_46826_56535"><a href="surfguiding.php" id="navlink_46826_56535">Surf Guiding</a></li>
					<li class="fw-nav-btn" id="navbutt_46827_56535"><a href="surfequipment.php" id="navlink_46827_56535">Surf Equipment</a></li>
					<li class="fw-nav-btn" id="navbutt_46829_56535"><a href="pointbreakday.php" id="navlink_46829_56535">Point break day</a></li>
					<li class="fw-nav-btn fw-nav-last" id="navbutt_48404_56535"><a class="fw-nav-last" href="7-days-fun.php" id="navlink_48404_56535">7 Day Fun</a></li>
				</ul>
			</li>
			<li class="fw-nav-btn" id="navbutt_46816_56535"><a href="index1d2d.php?page=137016&amp;cfid=149103729&amp;cftoken=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68" id="navlink_46816_56535">Spots & Activities</a>
				<ul class="fw-nav-level3">
					<li class="fw-nav-btn fw-nav-first" id="navbutt_46830_56535"><a class="fw-nav-first" href="surfspots.php" id="navlink_46830_56535">The Surfspots</a></li>
					<li class="fw-nav-btn fw-nav-last" id="navbutt_46832_56535"><a class="fw-nav-last" href="activities.php" id="navlink_46832_56535">Activities</a></li>
				</ul>
			</li>
			<li class="fw-nav-btn" id="navbutt_46817_56535"><a href="index34a5.php?page=137017&amp;cfid=149103729&amp;cftoken=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68" id="navlink_46817_56535">Gallery</a>
				<ul class="fw-nav-level3">
					<li class="fw-nav-btn fw-nav-first" id="navbutt_46833_56535"><a class="fw-nav-first" href="https://www.instagram.com/thecalicamp/" target="_blank" id="navlink_46833_56535">Instagram</a></li>
					<li class="fw-nav-btn" id="navbutt_46835_56535"><a href="camp_videos.php" id="navlink_46835_56535">Camp Videos</a></li>
					<li class="fw-nav-btn fw-nav-last" id="navbutt_46834_56535"><a class="fw-nav-last" href="surf_videos.php" id="navlink_46834_56535">Surf Videos</a></li>
				</ul>
			</li>
			<li class="fw-nav-btn" id="navbutt_46818_56535"><a href="indexc3b2.php?page=137018&amp;cfid=149103729&amp;cftoken=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68" id="navlink_46818_56535"><br>About</a>
				<ul class="fw-nav-level3">
					<li class="fw-nav-btn fw-nav-first" id="navbutt_46836_56535"><a class="fw-nav-first" href="team.php" id="navlink_46836_56535">Team</a></li>
					<li class="fw-nav-btn fw-nav-last" id="navbutt_46837_56535"><a class="fw-nav-last" href="surfing.php" id="navlink_46837_56535">Surfing</a></li>
				</ul>
			</li>
			<li class="fw-nav-btn fw-nav-last" id="navbutt_46840_56535"><a class="fw-nav-last" href="index252b.php?page=137035&amp;cfid=149103729&amp;cftoken=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68" id="navlink_46840_56535">Contact & Booking</a>
				<ul class="fw-nav-level3">
					<li class="fw-nav-btn fw-nav-first" id="navbutt_46841_56535"><a class="fw-nav-first" href="contact.php" id="navlink_46841_56535">Contact</a></li>
					<li class="fw-nav-btn" id="navbutt_46819_56535"><a href="request.php" id="navlink_46819_56535">Request</a></li>
					<li class="fw-nav-btn fw-nav-last" id="navbutt_46842_56535"><a class="fw-nav-last" href="booking.php" id="navlink_46842_56535">Booking</a></li>
				</ul>
			</li>
		</ul>
	</div>
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
					<h2 class="whiteTitle">First time kiter</h2>
					<div class="row">
						<div class="col-md-6">
							<h5 class="infotitle">You're An Absolute Beginner:</h5>
							<p>
								We provide lessons and packages from beginners to advanced level.
								We make each and every of our lesson safe and quick progress to
								achieve the purpose of learning.
							</p>


							<h5 class="infotitle">Private Lessons</h5>

							<p class="lightblue-buttons">
								2hrs<span class="floatright">$150</span>
							</p>

							<p class="lightblue-buttons">
								4hrs<span class="floatright">$290</span>
							</p>

							<p class="lightblue-buttons">
								6hrs<span class="floatright">$420</span>
							</p>

							<p class="lightblue-buttons">
								8hrs<span class="floatright">$540</span>
							</p>

							<p class="lightblue-buttons">
								10hrs<span class="floatright">$650</span>
							</p>
							<br>

							<p>&nbsp;</p>
							<br>


							<h5 class="infotitle">Semi Private Lessons</h5>

							<p class="lightblue-buttons">
								3hrs<span class="floatright">$180</span>
							</p>

							<p class="lightblue-buttons">
								6hrs<span class="floatright">$270</span>
							</p>

							<p class="lightblue-buttons">
								9hrs<span class="floatright">$360</span>
							</p>

							<p class="lightblue-buttons">
								12hrs<span class="floatright">$420</span>
							</p>

							<br>

							<p>&nbsp;</p>
							<br>


							<h5 class="infotitle">Certification</h5>
							<p>
								Thanks to our IKO (international kiteboarding organization) certified and well experienced
								instructor. We can provide IKO Vcard after the course, the international certification will
								give you opportunity to rent equipment in most of the kite school around the world
							</p>


							<h5 class="infotitle">Radio</h5>
							<p>
								Always stay in touch with your instructor. No more shouting to the students,
								even if you are far away crushing the wave! We use waterproof walkie-talkie
								and bb talkin to make everything easy and to increase the quality of each
								lesson and makes your progress even faster
							</p>


							<h5 class="infotitle">Equipment</h5>
							<p>
								We provide large range of equipment to ensure all is adopted to your level and weight.
								We use brand new kite from North kiteboarding one of the well know brand around the world,
								lively and playful, still nimble and easy to ride
							</p><br>


							<h5 class="infotitle">Info:</h5>
							<ul class="contentlist">
								<li>You must be able to swim</li>
								<li>All price per person</li>
								<li>The price includes: instructor guidance and full kitesurfing equipment for the lesson</li>
								<li>Payment can be done both by cash or credit card</li>
								<li>Please note that 5% processing fee applies to credit card payment</li>
							</ul>


							<h5 class="infotitle">What you need:</h5>
							<ul class="contentlist">
								<li>Sunglasses</li>
								<li>Sunscreen</li>
								<li>Sunhat</li>
								<li>UV50 T-shirt</li>
								<li>Water shoes</li>
							</ul>


							<a class="links" href="booking.php">
								<button class="buttonformular">Book now!</button>
							</a>
							<a class="links" href="contact.php">Have a question?</a>
						</div>
						<div class="col-md-6">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php
require_once('./backend/footer-link.php');
?>