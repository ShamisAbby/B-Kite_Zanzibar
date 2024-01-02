<?php
require_once('./backend/header-link.php');
?>

<div class="header-container">
    <img class="windowimg" src="assets/images/desktop-adventures-img.webp">
    <img class="mobileimg" src="assets/images/mobile-adventures-img.webp">
    <div class="menu">
        <h4>Adventures</h4>
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
    <div class="flexcontainer">
        <div class="item item1 item1content">
            <img class="wave" src="assets/demandit/Image/waves.png">
            <div class="maxcontainer">
                <div class="contentinformation">
                    <h2 class="bigTitle">Rock and Roll Downwinder</h2>
                    <div class="information">
                        <p>
                            Are you an IKO level 3N /independent ridder who wants to improve and experience the beauty
                            of the east coast. Probably this is the best option for you, its all about 12km riding
                            through the stunning lagoons or passing by the reef for the waves lover, approximation of
                            1 hour to 1.5 hours from Paje beach toward the one of the most popular restaurants in Zanzibar
                            “The Rock restaurant”. <br>
                            Minimum of 3 persons to make it fan and more secured. Once we made to our destination we will
                            have time to take some pictures and have a drink just opposite of The Rock restaurant “Upendo”. <br>
                            After all we will jump to our van and head back to our home destination!
                        </p>

                        <h5 class="infotitle">50$ per person </h5>

                        <p>
                            <a href="https://www.therockrestaurantzanzibar.com" class="links">Click to visit The Rock.</a>
                        </p>

                        <div class="row buttonrow">
                            <a href="booking.php" class="bluebutton">Book Now!</a>
                        </div>

                    </div>



                    <style>
                        .rateslist {
                            color: #fff;
                            font-size: 14px;
                            margin-top: 40px;
                        }

                        .ratestable {
                            width: 100%;
                            text-align: center;
                        }

                        tr {
                            background-color: #1a3148;
                            border-top: 4px solid #001a33;
                        }

                        td {
                            padding: 5px 0px;
                        }

                        @media only screen and (min-width: 1000px) {
                            .ratestable {
                                width: 66%;
                            }
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once('./backend/footer-link.php');
?>