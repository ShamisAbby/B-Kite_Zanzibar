<?php
require_once('./backend/header-link.php');
?>

<div class="header-container">
    <video autoplay loop class="windowimg" poster="/assets/images/thecalicamp_surf_wave.jpg" id="TheCaliCampVideo" controls muted></video>
    <img class="mobileimg" src="assets/images/home_mobileheader.jpg">
    <div class="headline">
        <h1>Surf camp California</h1>
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

                        source1.setAttribute('src', 'https://res.cloudinary.com/dgainiau2/video/upload/q_auto/v1641834604/TheCaliCamp_Surfcamp_California_high_pgvmt2.mp4');
                        source1.setAttribute('type', 'video/mp4');

                        source2.setAttribute('src', 'https://res.cloudinary.com/dgainiau2/video/upload/q_auto/v1641834604/TheCaliCamp_Surfcamp_California_high_pgvmt2.webm');
                        source2.setAttribute('type', 'video/webm');

                        source3.setAttribute('src', 'https://res.cloudinary.com/dgainiau2/video/upload/q_auto/v1641834604/TheCaliCamp_Surfcamp_California_high_pgvmt2.ogv');
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
            <li class="fw-nav-btn fw-nav-selected fw-nav-first" id="navbutt_20844_56535"><a class="fw-nav-selected fw-nav-first" href="index.php" id="navlink_20844_56535">Home</a></li>
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
    <div class="flexcontainer">
        <div class="item item1 availability">
            <img class="wave" src="assets/demandit/Image/waves.png">
            <script>
                var sendValuesMo = function() {
                    var from = $("#from").val();
                    var to = $('#to').val();
                    checkNumberOfDays(from, to)
                }

                var openBookingMo = function() {
                    var from = $("#from").val();
                    var to = $('#to').val();
                    var queryString = 'index0442.php?page=137036&amp;from=' + encodeURIComponent(from) + '&to=' + encodeURIComponent(to);
                    var url = queryString;
                    window.location.href = url;
                }
            </script>
            <style>
                @media only screen and (min-width: 800px) {
                    .availability {
                        display: none;
                    }
                }
            </style>
            <div class="row" style="margin: 10px;">
                <h5 style="color: white;">Check Availability</h5>
                <div class="col-md-12">
                    <label class="form-label" style="color: white;" for="from">From</label>
                    <input class="form-control" style="background-color: transparent; color: white; border: 1px solid #ced4da; border-radius: .25rem;" type="text" name="from" id="from" value maxlength="300" />
                </div>
                <div class="col-md-12" style="margin-top: 10px;">
                    <label class="form-label" style="color: white;" for="to">To</label>
                    <input class="form-control" style="background-color: transparent; color: white; border: 1px solid #ced4da; border-radius: .25rem;" type="text" name="to" id="to" value maxlength="300" />
                </div>
                <div class="col-md-12" style="margin-top: 10px;">
                    <button style="border: 1px solid #fff; border-radius: .25rem; background-color: transparent; color: white; margin-top: 20px;" onclick="sendValuesMo()">Check</button>
                </div>
                <div class="col-md-12" style="margin-top: 10px;">
                    <div>
                        <p style="display: none; color: white;" class="wrongDates">To enjoy the spirit of our surf
                            camp, please select a minimum of 4 days.</p>
                        <p style="display: none; color: white;" class="noVacancy">Unfortunately, we are full during
                            your requested dates. We would love to have you, so please select an alternative date
                            range.</p>
                        <p style="display: none; color: white;" class="yesVacancy">Your surf trip dates are
                            available! Please <a class="links" style="text-decoration: underline;" onclick="openBookingMo()">click here</a> to proceed with your booking.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item item1">
            <img class="wave" src="assets/demandit/Image/waves.png">
            <div class="scrolling-wrapper item1scroller">
                <div class="card levelpicture"><a href="index5f06.php?CFID=149103729&amp;CFTOKEN=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68&amp;page=137072"><img src="assets/images/mobile_beginner.jpg"></a>
                    <p>BEGINNER<br>Catch your first Wave<br> and fall in love</p>
                </div>
                <div class="card levelpicture"><a href="indexa712.php?CFID=149103729&amp;CFTOKEN=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68&amp;page=137073"><img src="assets/images/mobile_Intermediate.jpg"></a>
                    <p>INTERMEDIATE<br>Improve your green<br>waves,learn your turns, <br>do your duck dive</p>
                </div>
                <div class="card levelpicture"> <a href="indexf728.php?CFID=149103729&amp;CFTOKEN=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68&amp;page=137074"><img src="assets/images/advanced.jpg"></a>
                    <p>ADVANCED<br>Lowers, The Wedge, <br>Blacks get it all</p>
                </div>
            </div>
            <div class="maxcontainer">
                <div class="swiper-container swiperItem1">
                    <script>
                        var sendValues = function() {
                            var from = $("#from-mo").val();
                            var to = $('#to-mo').val();
                            checkNumberOfDays(from, to)
                        }

                        var openBooking = function() {
                            var from = $("#from-mo").val();
                            var to = $('#to-mo').val();
                            var queryString = 'index0442.php?page=137036&amp;from=' + encodeURIComponent(from) + '&to=' + encodeURIComponent(to);
                            var url = queryString;
                            window.location.href = url;
                        }
                    </script>
                    <div>
                        <h5 style="color: white;">Check Availability</h5>
                        <span>
                            <label style="color: white; margin-right: 10px;" for="from">From</label>
                            <input style="background-color: transparent; color: white; border: 1px solid #ced4da; border-radius: .25rem;" type="text" name="from" id="from-mo" value maxlength="300" />
                        </span>
                        <span style="margin-left: 30px;">
                            <label style="color: white; margin-right: 10px; margin-left: 10px;" for="to">To</label>
                            <input style="background-color: transparent; color: white; border: 1px solid #ced4da; border-radius: .25rem;" type="text" name="to" id="to-mo" value maxlength="300" />
                        </span>
                        <button style="border: 1px solid #fff; border-radius: .25rem; background-color: transparent; color: white; margin-left: 20px;" onclick="sendValues()">Check</button>
                        <div>
                            <p style="display: none; color: white;" class="wrongDates">To enjoy the spirit of our
                                surf camp, please select a minimum of 4 valid days in the future.</p>
                            <p style="display: none; color: white;" class="noVacancy">Unfortunately, we are full
                                during your requested dates. We would love to have you, so please select an
                                alternative date range.</p>
                            <p style="display: none; color: white;" class="yesVacancy">Your surf trip dates are
                                available! Please <a class="links" style="text-decoration: underline; cursor:pointer;" onclick="openBooking()">click here</a> to proceed with your booking.</p>
                            <p style="display: none; color: white;" class="longPeriod">You would like to come to us
                                for more than 30 days. Please contact us by <a href="assets/demos/email-protection.php#a9cdc8dfcce9ddc1cccac8c5c0cac8c4d987cac6c4" class="links" style="text-decoration: underline; cursor:pointer;">mail</a>.</p>
                            <p style="display: none; color: white;" class="weekendPeriod">You would like to come to
                                us for 4 days, then please do not choose a whole weekend, because we do not offer
                                guided lessons on weekends.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-container swiperItem1">
                    <div class="information">
                        <p>Your unique California surf adventure. Clean rooms, perfect atmosphere, a great
                            neighborhood, and professional surf guiding all over southern California, we promise,
                            will deliver lasting memories.
                        </p>
                        <p> Enjoy intimate surf sessions with friends, up and down the coast. </p>
                        <p>
                            Week 1 of the 2023 Season will start March 5 and we have availability each week until
                            the end of November. </p>
                        <p>Arrival days are Sunday and Checkout is the following Saturday. Starting at $1199 /
                            person.
                        </p>
                    </div>
                    <div class="row swiper-wrapper desktoplevels">
                        <div class="col-md-4 levelpicture levelleft"><a href="beginner.php"><img class="zoom" src="assets/images/beginner.jpg"></a>
                            <p>Catch your first Wave and fall in love test</p>
                            <a href="index5f06.php?CFID=149103729&amp;CFTOKEN=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68&amp;page=137072">
                                <h2 class="whiteTitle">Beginner</h2>
                            </a>
                        </div>
                        <div class="col-md-4 levelpicture levelmiddle"><a href="intermediate.php"><img class="zoom" src="assets/images/intermediate.jpg"></a>
                            <p>Improve your green waves, learn your turns,<br> do your duck dive</p>
                            <a href="indexa712.php?CFID=149103729&amp;CFTOKEN=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68&amp;page=137073">
                                <h2 class="whiteTitle">Intermediate</h2>
                            </a>
                        </div>
                        <div class="col-md-4 levelpicture levelright"><a href="advanced.php"><img class="zoom" src="assets/images/advanced.jpg"></a>
                            <p>Lowers, The Wedge, Blacks get it all</p>
                            <a href="indexf728.php?CFID=149103729&amp;CFTOKEN=904b09e5e11cbad1-3E911D37-B04E-2DC0-DA1889DD4515BC68&amp;page=137074">
                                <h2 class="whiteTitle">Advanced</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="parallax0" class="item item2 parallax slide">
            <div class="whitebg">
                <h2 class="fontblue">How it works</h2>
                <div class="fullinfo">
                    <div class="infolist">
                        <p>TheCaliCamp is your overnight surf camp for adults where you stay from 4 days up to a
                            month. Discover with us public and secret surf spots from locals, have great food, and
                            exciting trips around Orange County Los Angeles, and San Diego.
                        </p>
                        <p>
                            What's included:</p>
                        <ul class="contentlist">
                            <li>Airport pick-up</li>
                            <li>Hotel and Breakfast</li>
                            <li>Surfboard & Wetsuit</li>
                            <li>Guided Surfing from Monday to Friday</li>
                            <li>2 Surf Sessions Daily</li>
                        </ul>
                        <p><strong>Starts at $1.194/Week</strong></p>
                    </div>
                    <a href="how_it_works.php">
                        <p class="mobileinfo"><strong>Your overnight surf camp, all included...starts at
                                $999/week.</strong></p>
                    </a>
                    <a href="booking.php"><button class="whitebutton">Book now!</button></a>
                    <a class="linksdark include-link" href="how_it_works.php">Learn more</a>
                </div>
            </div>
        </div>
        <div class="item item3">
            <div class="scrolling-wrapper">
                <div class="card"><a class="video1" href="https://www.youtube.com/embed/v3v-HBYjiEU"><img class="mb-3" src="assets/images/recommend1neew.png"></a>
                    <p><strong>West Coast - Best Coast</strong><br> Kate Westman, <br> New York</p>
                </div>
                <div class="card"><a class="video2" href="https://www.youtube.com/embed/-eZ2HciY2Ko"><img class="mb-3" src="assets/images/recommend2new.png"></a>
                    <p><strong>All About Double Barrels</strong><br>Brent, West Australia<br>Romain, France
                    </p>
                </div>
                <div class="card"><a class="video3" href="https://www.youtube.com/embed/ZnI9NGaEcG8"><img class="mb-3" src="assets/images/recommend3new.png"></a>
                    <p><strong>Chill with Great People</strong><br>Josiane Brun, <br> Switzerland</p>
                </div>
                <div class="card"><a class="video4" href="https://www.youtube.com/embed/Vfs2bHFYvhE"><img class="mb-3" src="assets/images/recommend4new.png"></a>
                    <p><strong>Review from Signe: <br>“You Cannot stop anymore”</strong><br>Signe, Austria<br>Jamie,
                        Netherlands</p>
                </div>
            </div>
            <div class="maxcontainer">
                <div class="swiper-container recommend">
                    <div class="row">
                        <div class="col-md-3"><a class="video1" href="https://www.youtube.com/embed/v3v-HBYjiEU"><img class="mb-3" src="assets/images/recommend1neew.png"></a>
                            <p><strong>West Coast - Best Coast </strong><br> Kate Westman, <br> New York</p>
                        </div>
                        <div class="col-md-3"><a class="video2" href="https://www.youtube.com/embed/-eZ2HciY2Ko"><img class="mb-3" src="assets/images/recommend2new.png"></a>
                            <p><strong>All About Double Barrels</strong><br>Brent, West Australia<br>Romain, France
                            </p>
                        </div>
                        <div class="col-md-3"><a class="video3" href="https://www.youtube.com/embed/ZnI9NGaEcG8"><img class="mb-3" src="assets/images/recommend3new.png"></a>
                            <p><strong>Chill with Great People</strong><br>Josiane Brun, <br> Switzerland</p>
                        </div>
                        <div class="col-md-3"><a class="video4" href="https://www.youtube.com/embed/Vfs2bHFYvhE"><img class="mb-3" src="assets/images/recommend4new.png"></a>
                            <p><strong>Not just a surf camp</strong><br>Signe, Austria<br>Jamie, Netherlands</p>
                        </div>
                    </div>
                    <a class="links" href="https://www.tripadvisor.ch/Attraction_Review-g32279-d4164567-Reviews-TheCaliCamp-Dana_Point_California.php" target="_new">
                        <p class="tripadvisortext">Also, check out our reviews on TripAdvisor!</p>
                    </a>
                </div>
            </div>
        </div>
        <div id="parallax1" class="item item4 parallax slide">
            <div class="bluebg">
                <a href="rooms.php">
                    <h2>where you stay</h2>
                    <p><strong>5 Minutes to the beach, restaurants, the harbor and surf shops close to the hotel is
                            what makes Dana Point Marina Inn the right place for a surf camp. </strong></p>
                </a>
                <p class="notmobile">Cliche California kindness is what you'll find here. The rooms are cleaned and
                    tended to daily. Dana Point is in Orange County between San Diego and Los Angeles and nestled
                    within a very safe neighborhood.
                </p>
                <div class="row rowbuttons pl-3">
                    <a href="rates.php"><button type="button" class="bluebutton mr-3">Rates</button></a>
                    <a href="rooms.php"><button type="button" class="bluebutton mr-3">Rooms</button></a>
                    <a href="surfspots.php"><button type="button" class="bluebutton mr-3">Surfspots</button></a>
                </div>
            </div>
        </div>
        <div id="parallax2" class="item item5 parallax slide">
            <div class="bluebg">
                <a href="team.php">
                    <h2>The Guides</h2>
                    <p><strong>Surfing is different. Surfing is a lifestyle. Our guides are inviting you to live and
                            love the real local lifestyle Southern California offers.
                        </strong></p>
                </a>
                <p class="notmobile">We know your California trip is unique and we want to make it as safe, fun,
                    memorable, and as authentic as possible.
                </p>
                <a href="team.php"><button type="button" class="bluebutton">Meet the guides</button></a>
            </div>
        </div>
        <div id="parallax3" class="item item6 parallax slide">
            <div class="bluebg">
                <a href="surfspots.php">
                    <h2>The Spots</h2>
                    <p><strong>Within 15 to 45 Minutes we find great surf spots in all directions. From beginners to
                            advanced surfers it’s all about finding the best waves for your level.
                        </strong></p>
                </a>
                <p class="notmobile">Discover the breathtaking landscape from Los Angeles to San Diego Point-,
                    Reefs, Beach Breaks, Point Breaks - California has it all.
                </p>
                <a href="surfspots.php"><button type="button" class="bluebutton">The Surfspots</button></a>
            </div>
        </div>
        <div id="parallax4" class="item item7 parallax slide">
            <div class="bluebg">
                <a href="activities.php">
                    <h2>Like A Movie</h2>
                    <p><strong>Yes, it’s like a movie: The freeway signs, yellow school buses, big cars, the
                            buildings,
                            the whole scenery. So don't be surprised when you have a familiar feeling. You’ve been
                            here
                            before..but now you’re not in the cinema. You’re here!
                        </strong></p>
                </a>
                <p class="notmobile">Hollywood, Venice Beach, San Diego's Gaslamp Quarter are just around the
                    corner.
                    And Las Vegas is only a 4-hour drive away from the hotel.</p>
                <a href="activities.php"><button type="button" class="bluebutton">Other things than
                        surfing</button></a>
            </div>
        </div>
        <div id="parallax5" class="item item8 parallax slide">
            <div class="bluebg">
                <a href="pointbreakday.php">
                    <h2>Point Break Day</h2>
                    <p><strong>As promised, life really feels like a movie in California: The thrills, the fun, and
                            the craziness. Live your dreams and experience the "Point Break Day"!
                        </strong></p>
                </a>
                <p class="notmobile">Surf in the morning, jump out of an airplane in the afternoon and enjoy a
                    sunset BBQ. Be your own celebrity.
                </p>
                <a href="pointbreakday.php"><button class="bluebutton">Let me know more</button></a>

            </div>
        </div>
    </div>

</div>



<?php
require_once('./backend/footer-link.php');
?>