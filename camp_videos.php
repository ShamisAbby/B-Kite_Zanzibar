<?php
require_once('./backend/header-link.php');
?>

<div class="header-container">
	<img class="windowimg" src="assets/images/tcc_header_campvideos.jpg">
	<img class="mobileimg" src="assets/images/tcc_header_surfing_mobile.jpg">
	<div class="menu">
		<h4>Camp Videos</h4>
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
					<li class="fw-nav-btn fw-nav-selected" id="navbutt_46835_56535"><a class="fw-nav-selected" href="camp_videos.php" id="navlink_46835_56535">Camp Videos</a></li>
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
					<h2 class="whiteTitle">Camp Videos</h2>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/9V32YZ7W9o8" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">TheCaliCamp - Welcome to California</h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/_zgugNiqmCE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">TheCaliCamp Giveaway 2020</h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/RqltngagJnY" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">Summer 2017</h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/hIIHDrxtDWI" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">Easy booking, easy pickups and drop offs @TheCaliCamp</h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/_j9M5yqYdXI" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">From our guest Elsie Cole</h5>
							<p>
							<p>Great video Elsie! Thanks!<br><a href="https://www.instagram.com/salt_hunter/" target="_new">instagram.com/salt_hunter</a>
							</p>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/pvDAX7Q4wcQ" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">TheCaliCamp Spring 2017</h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/RLxY03f_zoU" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">What's your favorite part of your job </h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/thimik8X5XE" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">What our guests are saying</h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe src="https://player.vimeo.com/video/146355612" width="560" height="315" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								<p><a href="https://vimeo.com/146355612">My Movie 4</a> from <a href="https://vimeo.com/user44668297">Micah Green</a> on <a href="https://vimeo.com/">Vimeo</a>.</p>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">What Regan is doing...if he is not guiding</h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/R11v2wrnUnY" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">Regan about Surfing </h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/qL_avUzoYQo" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">The CaliCamp 2015</h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/LXr0pvtueqQ" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">Your California experience</h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="http://www.youtube.com/embed/hDpOChUk5os" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">1 Fun Day with Guides and Guests</h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/k_DuxdXbgDk" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">Riley & Friends</h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/77DQs7AEfMk?rel=0" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">Our first guests 2013!</h5>
							<p></p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 surfvideos campvideos">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/pVYxQ47zIeQ?wmode=transparent" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-lg-6 surfvideotext">
							<h5 class="infotitleOnecol">Welcome video from Dave Cinquini</h5>
							<p></p>
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