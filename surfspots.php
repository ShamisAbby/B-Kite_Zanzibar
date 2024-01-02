<?php
require_once('./backend/header-link.php');
?>

<div class="header-container">
	<img class="windowimg" src="assets/images/tcc_header_surfspots.jpg">
	<img class="mobileimg" src="assets/images/tcc_header_surfspots.jpg">
	<div class="menu">
		<h4>Surf Spots</h4>
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
			<li class="fw-nav-btn fw-nav-selected" id="navbutt_46816_56535"><a class="fw-nav-selected" href="index1d2d.php?page=137016&amp;cfid=149103729&amp;cftoken=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68" id="navlink_46816_56535">Spots & Activities</a>
				<ul class="fw-nav-level3">
					<li class="fw-nav-btn fw-nav-selected fw-nav-first" id="navbutt_46830_56535"><a class="fw-nav-selected fw-nav-first" href="surfspots.php" id="navlink_46830_56535">The
							Surfspots</a></li>
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
					<h2 class="whiteTitle">The Surf Spots</h2>
					<div class="row">
						<div class="col-md-12 surfspotvideo">
							<p>Within 5 to 45 Minutes we find great surf spots around the camp. From beginners to
								advanced surfers...here we give a little look into where we go but we can’t tell you
								everything yet! There are some secret spots that you’ll absolutely love.</p>
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WkZt324kGEI" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img class="infoimg" src="assets/images/tcc_surfspots_sanDiego.jpg">
						</div>
						<div class="col-md-6">
							<h5 class="infotitleOnecol">San Diego</h5>
							<p>San Diego is actually a very broad area with over 60 miles of coastline and is well
								exposed to
								swell from each and every direction. We know the way to find you waves specific to
								the days conditions
								and your ability while discovering SD. San Diego truly has everything on offer. Reef
								breaks, point
								breaks, and sand bottom beach breaks inhabit the area.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img class="infoimg" src="assets/images/tcc_surfspots_oceanside.jpg">
						</div>
						<div class="col-md-6">
							<h5 class="infotitleOnecol">Oceanside</h5>
							<p>Sitting at the northern most point of San Diego is Oceanside. This is a beach famous
								for its pier,
								its military base, its boardwalk and its world class beach break lining the city
								from tip to tip.
								Here it all comes down to finding a nice empty sand-bar and enjoy the waves with
								just you and friends
								which we make readily available to you with the help of our guides.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img class="infoimg" src="assets/images/tcc_surfspots_oc.jpg">
						</div>
						<div class="col-md-6">
							<h5 class="infotitleOnecol">Trestles and Orange County</h5>
							<p>Now what shall we say about Trestles?…. World renowned one of the single most high
								performance
								waves on the planet and, not to mention, 10 minutes from the camp. Loved by every
								professional
								in the sport of surfing it is a spot worthy of a place on the ASP World Championship
								tour.
								If you’re up for the challenge we would love to assist should you demonstrate the
								ability to
								surf such the more prominent ‘peaks’. For the more intermediate surfer DON’T LET THE
								PRO’S SCARE
								YOU AWAY!!! Trestles is not just “A Spot” but an area with many nooks, crannies and
								empty areas.
								At the end of the day world famous perfection is at your finger tips. There are also
								a wide
								variety of “secret spots” that are a little harder to get to but offer miles of
								coast with peaks
								offering some of the longest rides of your life. </p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img class="infoimg" src="assets/images/tcc_surfspots_newport.jpg">
						</div>
						<div class="col-md-6">
							<h5 class="infotitleOnecol">Huntington / Newport Beach</h5>
							<p>Huntington Beach or “Surf City USA” which hosts the US Open of surfing each year is
								the host for 1 reason.
								Great waves and an unbeatable surf presence in and out of the water. Along with its
								neighbor, Newport Beach,
								both provide miles and miles of sand bottom beach break and peaks every step of the
								way. To surf alone in California
								is not necessarily that hard when you know where to go. It’s one of our many
								specialties</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img class="infoimg" src="assets/images/tcc_surfspots_la.jpg">
						</div>
						<div class="col-md-6">
							<h5 class="infotitleOnecol">LA County</h5>
							<p>When you think of beaches in LA you may think Venice, Santa Monica or maybe even
								‘Baywatch’. To a certain extent you are
								thinking correctly. However, on the right days the Los Angeles area offers world
								class surf across a vast area.
								Perfect points and reefs combined with a wide variety of open beach break, LA
								provides it all. Imagine surfing Malibu.
								The birthplace of modern progressive surfing. And before you know it you’re headed
								off to Hollywood for lunch on “The Sunset
								Strip.” Or how about a stroll along the walk of fame? The true California
								experience.</p>
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