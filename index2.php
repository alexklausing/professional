<?php
include 'config.php';
$header = $base_path . '/assets/header.php';
$footer_path = $base_path . '/assets/footer.php';
$navigation_path = $base_path . '/assets/navigation2.php';

include $header;
?>

<!--Page Specific Title and Description Information for SEO-->

<head>
    <title>Hire Alex Klausing | Nonprofit | Outdoor Recreation</title>
    <meta name="description" content="A professional portfolio of Alex Klausing, nonprofit, camping, and outdoor recreation programs professional with ten years of experience.">
    <link rel="stylesheet" href="css/index2.css" type="text/css">
</head>

<!--Navigation Bar-->
<header>
    <?php
    include $navigation_path;
    ?>
</header>

<body>

    <section class="cover">
        <!-- Hero image background -->
    </section>

    <div class="focus_container">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">Fundraising</p>
                    <p>Hover Me</p>
                </div>
                <div class="flip-card-back">
                    <p class="title">BACK</p>
                    <p>Leave Me</p>
                    <div class="learn_more">
                        <p>Learn More</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">Project Management</p>
                    <p>Hover Me</p>
                </div>
                <div class="flip-card-back">
                    <p class="title">BACK</p>
                    <p>Leave Me</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title"></p>
                    <p>Hover Me</p>
                </div>
                <div class="flip-card-back">
                    <p class="title">BACK</p>
                    <p>Leave Me</p>
                </div>
            </div>
        </div>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <p class="title">FLIP CARD</p>
                    <p>Hover Me</p>
                </div>
                <div class="flip-card-back">
                    <p class="title">BACK</p>
                    <p>Leave Me</p>
                </div>
            </div>
        </div>
        <!-- Add more cards as needed -->
    </div>



    <section class="intro-container">
        <p id="para3">I have been in the camping and outdoor industry since my first season on a summer camp staff in 2003. From 2010 to 2023, with a break due to COVID-19 I served as a full-time professional with the Boy Scouts of America focusing on membership growth, program delivery, and outdoor adventure. I have a proven record of success in all non-profit operations functions, including volunteer recruitment, fundraising, and board engagement. I can't wait to put my experience to work for you!</p>
        <div class="signature">
            <img src="media/brandkit/AlexSign.png" alt="Alex Klausing's Signature">
        </div>
    </section>


    <!-- 
    <section class="endorsement-container">
        <div class="endorsement-box">
            <div class="endorsement-photo">
                <img src="images/alex1.jpg" alt="Endorsed by Picture">
            </div>
            <p id="para1">Alex is Great! You should hire him.</p>
        </div>
    </section>
 -->

    <div class="section-break-container">
        <div class="section-break-box">
            <p id="title1">Previous Full-Time Employers</p>
        </div>
    </div>


    <section class="trustedby-container">
        <div class="trustedby-box">
            <img src="media/partner-logos/Lincoln_Heritage_Stack_4C.jpg" alt="Lincoln Heritage Council, BSA Logo">
            <p id="para1"><span>Lincoln Heritage Council</span><br>Boy Scouts of America <br>Louisville, Kentucky <br></p>
        </div>
        <div class="trustedby-box">
            <img src="media/partner-logos/logo-northern-tier-high-adventure.png" alt="Northern Tier High Adventure, BSA Logo">
            <p id="para1"><span>Northern Tier High Adventure</span><br>Boy Scouts of America <br>Ely, Minnesota</p>
        </div>
        <div class="trustedby-box">
            <img src="media/partner-logos/threefirescouncil_logo.png" alt="Three Fires Council, BSA Logo">
            <p id="para1"><span>Three Fires Council</span><br>Boy Scouts of America <br>St. Charles, Illinois</p>
        </div>
        <div class="trustedby-box">
            <img src="media/partner-logos/Greater Tampa Bay Area Council_Stack_4C.jpg" alt="Greater Tampa Bay Area Council, BSA Logo">
            <p id="para1"><span>Greater Tampa Bay Area Council</span><br>Boy Scouts of America <br>Tampa, Florida</p>
        </div>
    </section>

    <div class="section-break-container">
        <div class="section-break-box">
            <p id="title1">Previous Seasonal Employers</p>
        </div>
    </div>
    </div>
    <section class="trustedby-container">
        <div class="trustedby-box">
            <img src="media/partner-logos/CCClogo.jpg" alt="Camp Crooked Creek, BSA Logo">
            <p id="para1"><span>Camp Crooked Creek</span><br>Lincoln Heritage Council <br>Boy Scouts of America<br>Shepherdsville, Kentucky</p>
        </div>
        <div class="trustedby-box">
            <img src="media/partner-logos/philmont-colorlogo.jpg" alt="Northern Tier High Adventure, BSA Logo">
            <p id="para1"><span>Philmont Scout Ranch</span><br>Boy Scouts of America <br>Cimarron, New Mexico</p>
        </div>
        <div class="trustedby-box">
            <img src="media/partner-logos/Bradford_Woods_Logo.png" alt="Northern Tier High Adventure, BSA Logo">
            <p id="para1"><span>Bradford Woods</span><br>Indiana University<br>Martinsville, Indiana</p>
        </div>
    </section>

    <!--</section>
<p id="headline3"></p>
    <section class="skills-container">
        <div class="skills-box">Volunteer Recruitment<br><span>10 Years</span></div>
        <div class="skills-box">Summer Camp Management<br><span>6 Years</span></div>
        <div class="skills-box">Volunteer Training<br><span>6 Years</span></div>
        <div class="skills-box">Fundraising<br><span>10 Years</span></div>
        <div class="skills-box">SQL<br><span>10 Years</span></div>
        
        
    </section>-->



</body>

<footer>
    <!-- <script src="js/js.js"></script> -->
</footer>
<?php
include $footer_path;
?>