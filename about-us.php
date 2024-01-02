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
                    <h2 class="whiteTitle">About B-Kite</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="infotitle">Learn about school</h5>
                            <p>
                                Forgot how to control the kite? Never tried it before?No problem! We are just around the corner. <br>

                                Established in 2021, Bkite Zanzibar developing with the speed of the wind, went
                                through huge progress. From being a pionner in exploring the island in old school
                                van to becoming the newest kitesurfing school in Paje beach – world known top kite spot. <br> <br>

                                Bkite is located right next to Hakuna Majiwe Beach Lodge, just on the seashore of
                                the Indian Ocean. Bkite program became a natural extension of the love for
                                exploring, chasing the wind and teaching. Learning to kite or experiencing a
                                session here is a must.
                            </p>
                            <!-- <h5 class="infotitle">Who is visiting a surf camp?</h5>
								<p>People from all over the world typically visit a surf camp. Our guests are mainly
									between 20 and 30. But as you can
									see on this TripAdvisor review, they are sometimes way <a class="links"
										href="https://www.tripadvisor.ch/ShowUserReviews-g32279-d4164567-r411953076-TheCaliCamp-Dana_Point_California.php"
										target="_new">above their 50is</a>. You can join the camp as a solo traveler,
									as couples, or as friends just having a good time.
								</p> -->
                            <!-- <p>Some of our guests are flying to California just to be picked up at the airport, surf
									two weeks with us and then fly
									back home again. Others are extending their business trips for a few days or book
									our Surf Camp as a part of their
									California road trip. Some are coming once, and others are <a class="links"
										href="https://www.tripadvisor.ch/ShowUserReviews-g32279-d4164567-r649867933-TheCaliCamp-Dana_Point_California.php"
										target="_new">here for the third time</a>. We had guests from all over the
									world, as close as Texas and as far as Japan and most are
									coming from Europe.
								</p>
								<p>If we have learned one thing in the past, surf camp visitors are easygoing people who
									like to have a good time.
								</p>
								<h5 class="infotitle">Location</h5>
								<p>We are right in the middle between San Diego and Los Angeles. The Camp is in
									Oceanside with comfortable rooms and
									easy walking distance to the harbor, beaches, restaurants, supermarkets, shops and
									plenty more.
								</p>
								<h5 class="infotitle">Surf Guiding and Day Trips</h5>
								<p>Every day should feel like you're cruising the coast, finding the best surf for you,
									and hanging with friends.
								</p>
								<p>Each morning between 6 and 9 am, depending on conditions, you'll join your surf guide
									and up to 4 other guests (at
									similar surf level) for day trips. We aim for two surf sessions daily Monday-Friday.
								</p>
								<p>Locations are always decided based on whatever area is going to have the best surf
									for you. We do host up to 20
									guests in the camp. However, surf groups are small and divided based on surf level.
									This way, we make sure that
									everyone is surfing at the right spot at the right time every single session.
								</p>
								<p>The thing our guests love is because we follow so closely the daily change in
									conditions, as a guest you will get to
									see a ton of the coastline and surf plenty of different spots. Our goal is to find
									the best quality waves for your
									level and the lowest possible crowd every session. Wherever that is, that's where
									we're going.
								</p>
								<p>Surf guides are all professional, experienced, fun, and have all of the helpful
									advice you need to improve your
									surfing daily.
								</p> -->


                            <h5 class="infotitle">Take a look on what we serve:</h5>
                            <ul class="contentlist">
                                <li>Top class North Kiteboarding equipment newest edition</li>
                                <li>Experienced IKO (international kiteboarding organisation) instructor</li>
                                <li>Flat, turquoise, warm water lagoon = zero stress during the lesson</li>
                                <li>Private ( you ) and semi private ( you + your loved one ) lesson type</li>
                                <li>Equipment rentals (North, Mystic, Cabrinha, Flysurfer and many more) + storage for your own gears</li>
                                <li>Cosy chilling spot after your session</li>
                                <li>Surf shop stuffed with sun and water protection goodies</li>
                                <li>Old shool van kite trips around the island</li>
                                <li>The best kitesurfing experience you will ever have</li>
                                <li>The school is running December – March and June – October, 8:30 – 18:30 everyday.</li>
                            </ul>
                            <p>
                                You are welcome to -> visit -> feel the ocean’s Pulse -> experience the
                                difference -> give us a high five -> and spread the love for wind! <br><br>
                                See you soon water friends!
                            </p>
                            <a class="links" href="booking.php"><button class="buttonformular">Book
                                    now!</button></a>
                            <!-- <a class="links" href="contact.php">Have a question?</a> -->
                        </div>
                        <!-- <div class="col-md-6">
								<img class="infoimg"
									src="assets/images/c_fill/v1551695588/tccPictures/surfguiding_content.jpg">
							</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
require_once('./backend/footer-link.php');
?>