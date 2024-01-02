<?php
require_once('./backend/header-link.php');
?>


<div class="header-container">
    <video autoplay loop class="windowimg" poster="assets/images/b-kite-banner.jpeg" id="TheCaliCampVideo" controls muted>
    </video>
    <img class="mobileimg" src="assets/images/home-banner.webp">
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
    <a href="index.php" style="margin-left: 2rem;">
        <img src="assets/demandit/Image/b-kite-white-logo.png" alt="B-Kite Logo" width="120px">
    </a>
    <!-- <p>B-Kite Zanzibar</p> -->
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
            <a href="#"><img src="assets/demandit/File/mail-white.svg"></a>
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
            <div class="row" style="margin: 10px;" id="aboutus">
                <h4 style="color: white;">Welcome to the Bkite Zanzibar</h4>
                <p style=" margin-bottom: 20px;">
                    You will learn, improve and enjoy with us <br><br>
                    Forgot how to control the kite? Never tried it before?
                    No problem! We are just around the corner. <br>
                    Bkite Zanzibar, born 2021, grew fast.
                    Started exploring in an old van,
                    now top kitesurfing school at Paje beach.
                </p>
                <a style="color: #fff; text-decoration: none; font-weight: bolder;" href="about-us.php">
                    Learn more about us
                </a>

                <!--  <h5 style="color: white;">Check Availability</h5>
                    <div class="col-md-12">
                        <label class="form-label" style="color: white;" for="from">From</label>
                        <input class="form-control"
                            style="background-color: transparent; color: white; border: 1px solid #ced4da; border-radius: .25rem;"
                            type="text" name="from" id="from" value maxlength="300" />
                    </div>
                    <div class="col-md-12" style="margin-top: 10px;">
                        <label class="form-label" style="color: white;" for="to">To</label>
                        <input class="form-control"
                            style="background-color: transparent; color: white; border: 1px solid #ced4da; border-radius: .25rem;"
                            type="text" name="to" id="to" value maxlength="300" />
                    </div>
                    <div class="col-md-12" style="margin-top: 10px;">
                        <button
                            style="border: 1px solid #fff; border-radius: .25rem; background-color: transparent; color: white; margin-top: 20px; padding: 10px 20px;"
                            onclick="sendValuesMo()">Check</button>
                    </div> -->
                <!-- <div class="col-md-12" style="margin-top: 10px;">
                        <div>
                            <p style="display: none; color: white;" class="wrongDates">To enjoy the spirit of our surf
                                camp, please select a minimum of 4 days.</p>
                            <p style="display: none; color: white;" class="noVacancy">Unfortunately, we are full during
                                your requested dates. We would love to have you, so please select an alternative date
                                range.</p>
                            <p style="display: none; color: white;" class="yesVacancy">Your surf trip dates are
                                available! Please <a class="links" style="text-decoration: underline;"
                                    onclick="openBookingMo()">click here</a> to proceed with your booking.</p>
                        </div>
                    </div> -->
            </div>
        </div>

        <div class="item item1" style="margin-bottom: 3rem;">
            <img class="wave" src="assets/demandit/Image/waves.png">
            <div class="scrolling-wrapper item1scroller">
                <div class="card levelpicture">
                    <a href="beginner.php">
                        <img width="250px" height="500px" src="assets/images/beginner-lessons.webp">
                        <p>Beginner lessons<br>Learn kite basics with beginner lessons<br> Fun, safe, start flying!</p>
                    </a>

                </div>
                <div class="card levelpicture">
                    <a href="equipment-rental.php">
                        <img width="250px" height="500px" src="assets/images/equipment-rental.webp">
                    </a>
                    <p>Equipment rental<br> Rent kites and gear for windy adventures<br> Enjoy kite-flying fun!</p>
                </div>
                <div class="card levelpicture">
                    <a href="accommodation.php">
                        <img width="250px" height="500px" src="assets/images/kite-accommodation.webp">
                    </a>
                    <p>Accommodation<br>Stay comfortable at our kite school – affordable,<br> cozy accommodations
                        available.</p>
                </div>

                <div class="card levelpicture">
                    <a href="adventures.php">
                        <img width="250px" height="500px" src="assets/images/kite-adventures.webp">
                    </a>
                    <p>Adventures<br>Kite adventures soar high, dancing with winds,<br> pure joy unfolds.</p>
                </div>

                <div class="card levelpicture">
                    <a href="promotions.php">
                        <img width="250px" height="500px" src="assets/images/kite-promotions.webp">
                    </a>
                    <p>Promotions<br>Discounts, Free Lessons, and <br> Exclusive Offers Await You!</p>
                </div>

                <div class="card levelpicture">
                    <a href="no-wind-activities.php">
                        <img width="250px" height="500px" src="assets/images/no-wind-activities.webp">
                    </a>
                    <p>No.wind.activities<br> Kite flying, quiet day fun. Colorful,<br> light kite lifts spirits
                        high.</p>
                </div>
            </div>



            <div class="maxcontainer">

                <div class="swiper-container swiperItem1">
                    <div class="information">
                        <h4 style="color: white;">Welcome to the Bkite Zanzibar</h4>

                        <p>
                            You will learn, improve and enjoy with us <br><br>
                            Forgot how to control the kite? Never tried it before?
                            No problem! We are just around the corner. <br>
                            Bkite Zanzibar, born 2021, grew fast.
                            Started exploring in an old van,
                            now top kitesurfing school at Paje beach.
                        </p>
                    </div>
                    <div class="row swiper-wrapper desktoplevels">

                        <div class="col-md-4 levelpicture">
                            <a href="beginner.php">
                                <img class="zoom" src="assets/images/beginner-lessons.webp">
                            </a>
                            <p>Learn kite basics with beginner lessons<br> Fun, safe, start flying!</p>
                            <a href="beginner.php">
                                <h2 class="whiteTitle">Beginner lessons</h2>
                            </a>
                        </div>


                        <div class="col-md-4 levelpicture">
                            <a href="equipment-rental.php">
                                <img class="zoom" src="assets/images/equipment-rental.webp">
                            </a>
                            <p>Rent kites and gear for windy adventures<br> Enjoy kite-flying fun!</p>
                            <a href="equipment-rental.php">
                                <h2 class="whiteTitle">Equipment rental</h2>
                            </a>
                        </div>


                        <div class="col-md-4 levelpicture">
                            <a href="accommodation.php">
                                <img class="zoom" src="assets/images/kite-accommodation.webp">
                            </a>
                            <p>Stay comfortable at our kite school – affordable,<br> cozy accommodations available</p>
                            <a href="accommodation.php">
                                <h2 class="whiteTitle">Accommodation</h2>
                            </a>
                        </div>


                        <div class="col-md-4 levelpicture">
                            <a href="adventures.php">
                                <img class="zoom" src="assets/images/kite-adventures.webp">
                            </a>
                            <p>Kite adventures soar high, dancing with winds,<br> pure joy unfolds</p>
                            <a href="adventures.php">
                                <h2 class="whiteTitle">Adventures</h2>
                            </a>
                        </div>


                        <div class="col-md-4 levelpicture">
                            <a href="promotions.php">
                                <img class="zoom" src="assets/images/kite-promotions.webp">
                            </a>
                            <p>Discounts, Free Lessons, and <br> Exclusive Offers Await You!</p>
                            <a href="promotions.php">
                                <h2 class="whiteTitle">Promotions</h2>
                            </a>
                        </div>


                        <div class="col-md-4 levelpicture">
                            <a href="no-wind-activities.php">
                                <img class="zoom" src="assets/images/no-wind-activities.webp">
                            </a>
                            <p>Kite flying, quiet day fun. Colorful,<br> light kite lifts spirits high</p>
                            <a href="no-wind-activities.php">
                                <h2 class="whiteTitle">No.wind.activities</h2>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- <div id="parallax0" class="item item2 parallax slide" style="margin-top: -50px">
                <div class="whitebg">
                    <h2 class="fontblue" style="color: #2c2c2c;">Price List</h2>
                    <div class="fullinfo">
                        <div class="infolist">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Accusantium doloremque sequi aut velit repellendus,
                                asperiores perspiciatis inventore ex autem. Inventore
                                similique magni accusamus tenetur dolore perspiciatis
                                possimus consequuntur, eius saepe?
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
                        <a href="#">
                            <p class="mobileinfo"><strong>Your overnight B-kite, all included...starts at
                                    $100/week.</strong></p>
                        </a>
                        <a href="#"><button class="whitebutton">Book now!</button></a>
                        <a class="linksdark include-link" href="#">Learn more</a>
                    </div>
                </div>
            </div> -->

        <!-- <div class="item item3">
                <div class="scrolling-wrapper">
                    <div class="card"><a class="video1" href="#"><img class="mb-3"
                                src="assets/images/recommend1neew.png"></a>
                        <p><strong>West Coast - Best Coast</strong><br> With B-Kite, <br> Zanzibar</p>
                    </div>
                    <div class="card"><a class="video2" href="#"><img class="mb-3"
                                src="assets/images/recommend2new.png"></a>
                        <p><strong>All About Double Barrels</strong><br> With B-Kite<br>Zanzibar
                        </p>
                    </div>
                    <div class="card"><a class="video3" href="#"><img class="mb-3"
                                src="assets/images/recommend3new.png"></a>
                        <p><strong>Chill with Great People</strong><br> With B-Kite, <br> Zanzibar</p>
                    </div>
                    <div class="card"><a class="video4" href="#"><img class="mb-3"
                                src="assets/images/recommend4new.png"></a>
                        <p><strong>Review from Signe: <br>“You Cannot stop anymore”</strong><br>Signe,
                            Austria<br>Zanzibar</p>
                    </div>
                </div>
                <div class="maxcontainer">
                    <div class="swiper-container recommend">
                        <div class="row">
                            <div class="col-md-3"><a class="video1" href="#"><img class="mb-3"
                                        src="assets/images/recommend1neew.png"></a>
                                <p><strong>West Coast - Best Coast </strong><br> With B-Kite, <br> Zanzibar</p>
                            </div>
                            <div class="col-md-3"><a class="video2" href="#"><img class="mb-3"
                                        src="assets/images/recommend2new.png"></a>
                                <p><strong>All About Double Barrels</strong><br> With B-Kite<br>Zanzibar
                                </p>
                            </div>
                            <div class="col-md-3"><a class="video3" href="#"><img class="mb-3"
                                        src="assets/images/recommend3new.png"></a>
                                <p><strong>Chill with Great People</strong><br> With B-Kite, <br> Zanzibar</p>
                            </div>
                            <div class="col-md-3"><a class="video4" href="#"><img class="mb-3"
                                        src="assets/images/recommend4new.png"></a>
                                <p><strong>Not just a surf camp</strong><br> With B-Kite<br>Zanzibar</p>
                            </div>
                        </div>
                        <a class="links" href="#" target="_new">
                            <p class="tripadvisortext">Also, check out our reviews on TripAdvisor!</p>
                        </a>
                    </div>
                </div>
            </div> -->

        <div id="parallax1" class="item item4 parallax slide">
            <div class="bluebg">
                <a href="the-spots.php">
                    <h2>The Spots</h2>
                    <p>
                        <strong>
                            Zanzibar's kiteboarding is world-class, ideal for beginners or riders.
                            Mother nature gifts shallow lagoon, turquoise water, and endless beaches.
                            1.5km offshore, waves thrill enthusiasts. Perfect paradise awaits.
                        </strong>
                    </p>
                </a>
                <p class="notmobile">
                    Kiteboarding in Zanzibar has become a top world class destination.
                    The wind, the water, the weather makes an island an ideal place for
                    the complete beginners needing a stress-free experience, as well as
                    independent riders looking for untapped spot to session all day long. <br>
                    You will be amazed by possibilities that an island got from the mother
                    nature: shallow lagoon, flat turquoise water and endless beaches with
                    smooth white sand make this island a kiteboarders paradise. <br>
                    Barely 1.5km away from the shore you will find the reef where waves
                    can reach up to 3 meters height. Perfect treat for waves lovers.
                </p>
                <div class="row rowbuttons pl-3">
                    <a href="the-spots.php"><button type="button" class="bluebutton mr-3">Learn More</button></a>
                    <!-- <a href="#"><button type="button" class="bluebutton mr-3">Rooms</button></a>
                        <a href="#"><button type="button" class="bluebutton mr-3">Surfspots</button></a> -->
                </div>
            </div>
        </div>

        <!-- <div id="parallax2" class="item item5 parallax slide">
                <div class="bluebg">
                    <a href="#">
                        <h2>Download</h2>
                        <p>
                            <strong>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A reiciendis dolorum at quas
                                deserunt sed amet enim ratione obcaecati nostrum. Natus, quisquam ullam saepe enim odio
                                blanditiis placeat neque error!
                            </strong>
                        </p>
                        <p class="notmobile">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit delectus odio, commodi non
                            nemo neque est iste ad voluptatibus inventore quae modi deleniti fugit id cumque tempora
                            repellat. Iure, tempora.
                        </p>
                        <a href="#"><button type="button" class="bluebutton">Meet the guides</button></a>
                </div>
            </div> -->

        <!-- <div id="parallax3" class="item item6 parallax slide">
                <div class="bluebg">
                    <a href="#">
                        <h2>The Spots</h2>
                        <p>
                            <strong>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. A reiciendis dolorum at quas
                                deserunt sed amet enim ratione obcaecati nostrum. Natus, quisquam ullam saepe enim odio
                                blanditiis placeat neque error!
                            </strong>
                        </p>
                    </a>
                    <p class="notmobile">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis facere consequatur non
                        animi, eveniet optio, explicabo officia et minima, cumque eligendi reprehenderit unde esse
                        recusandae! Dolores qui quo quas ea!
                    </p>
                    <a href="#"><button type="button" class="bluebutton">The Surfspots</button></a>
                </div>
            </div> -->

        <div id="parallax4" class="item item7 parallax slide">
            <div class="bluebg">
                <a href="bkite-pricing.php">
                    <h2>Price List</h2>
                    <p>
                        <strong>
                            Bkite Zanzibar's price list for kiteboarding: lessons, gear rental.
                            Affordable options for all. Check the list for exciting packages and rates.
                        </strong>
                    </p>
                </a>
                <p class="notmobile">
                    Explore BKite Zanzibar's pricing: 'Private Lessons,'
                    'Semi-Private Lessons,' 'Rental,' and 'Storage.' <br>
                    Tailored rates ensure an affordable and enjoyable kiteboarding experience.
                    Discover the perfect option for you and your needs.
                </p>
                <a href="bkite-pricing.php"><button type="button" class="bluebutton">Learn More</button></a>
            </div>
        </div>

        <div id="parallax5" class="item item8 parallax slide" style="margin-top: 2.5rem;">
            <div class="contact-form">
                <h2>Reach us now</h2>
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="full-name">Full Name</label>
                        <input type="text" id="full-name" name="full-name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
            <!-- <div class="bluebg">
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

                </div> -->
        </div>
    </div>

</div>


<?php
require_once('./backend/footer-link.php');
?>