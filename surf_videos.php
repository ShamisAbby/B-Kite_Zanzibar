<?php
require_once('./backend/header-link.php');
?>

<div class="header-container">
	<img class="windowimg" src="assets/images/tcc_header_surfguiding.jpg">
	<img class="mobileimg" src="assets/images/tcc_header_surfvideos_mobile.jpg">
	<div class="menu">
		<h4>Surf Videos</h4>
	</div>
</div>
</header>
<div class="logoTcc">
	<a href="index.php"><img src="assets/demandit/Image/Logo1.png" alt></a>
	<p>Surfing with friends</p>
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
			<li class="fw-nav-btn fw-nav-selected" id="navbutt_46817_56535"><a class="fw-nav-selected" href="index34a5.php?page=137017&amp;cfid=149103729&amp;cftoken=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68" id="navlink_46817_56535">Gallery</a>
				<ul class="fw-nav-level3">
					<li class="fw-nav-btn fw-nav-first" id="navbutt_46833_56535"><a class="fw-nav-first" href="https://www.instagram.com/thecalicamp/" target="_blank" id="navlink_46833_56535">Instagram</a></li>
					<li class="fw-nav-btn" id="navbutt_46835_56535"><a href="camp_videos.php" id="navlink_46835_56535">Camp Videos</a></li>
					<li class="fw-nav-btn fw-nav-selected fw-nav-last" id="navbutt_46834_56535"><a class="fw-nav-selected fw-nav-last" href="surf_videos.php" id="navlink_46834_56535">Surf Videos</a></li>
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
					<h2 class="whiteTitle">Surf Videos</h2>
					<div class="row">
						<div class="col-md-6 surfingvid">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vQ1_V_Kn9gI" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-md-6">
							<h5 class="infotitleOnecol">Sunset Surf - Santa Cruz</h5>
							<p>Beside the awesome local Spots we offer a 4 Day Trip up to San Francisco where we
								stop at at places like Santa Cruz. Enjoy the beauty of a Sunset Surf.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 surfingvid">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WD6j9oGU86M" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-md-6">
							<h5 class="infotitleOnecol">Kelly Slater</h5>
							<p>Highspeed Waves in Trestles. 15 minutes south from the Camp there are some of the
								best highspeed Waves. With the right timing you may even see Kelly Slater...</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 surfingvid">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/58477304" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-md-6">
							<h5 class="infotitleOnecol">Why Knot....</h5>
							<p>Are you a Longboarder and like to surf a smooth wave? Then San Onofre is the Place to
								be. From the Camp we bring you in 10 Minutes to this wonderful place.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 surfingvid">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/izeDwYSWXvA" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-md-6">
							<h5 class="infotitleOnecol">GoPro California</h5>
							<p>This is a little video of everything we love about California... Video #1 of many to
								come. Surf wakeboard skateboard snowboard - California's got it all.</p>
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