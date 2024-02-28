<?php
include '../../config.php';
$header = $base_path . '/assets/header.php';
$footer_path = $base_path . '/assets/footer.php';
$navigation_path = $base_path . '/assets/navigation2.php';

include $header;
?>



<!--Page Specific Title and Description Information for SEO-->

<head>
    <title>Hire Alex Klausing in 2023! | Nonprofit | Outdoor Recreation</title>
    <meta name="description" content="A professional portfolio of Alex Klausing, nonprofit, camping, and outdoor recreation programs professional with ten years of experience.">

    <?php
    include($navigation_path);
    ?>

    <link rel="stylesheet" href="css/contact/contact.css" type="text/css">

</head>

<body>
    <div class="contact-container">
        <div class="contact-box">
            <div id="name">
                <p>Alex Klausing</p>
            </div>
            <div class="contact-box-sub">

                <div class="contact-item" id="phone">
                    <img src="media/icons/baseline_call_black_18dp.png" alt="">
                    <p>Cell: </p><a class="phone" href="tel:+1 502-930-2694"> 502-930-2694</a>
                </div>

                <div class="contact-item" id="email">
                    <img src="media/icons/baseline_email_black_18dp.png" alt="">
                    <a href="mailto:alex.klausing@outlook.com">alex.klausing@outlook.com</a>
                </div>

                <div class="contact-item" id="linkedin">
                    <a class="contact-box-linkedin" href="https://www.linkedin.com/in/alexklausing/">
                        <img src="media/icons/LI-In-Bug.png" alt="LinkedIn Logo">
                        <p>/alexklausing</p>
                    </a>
                </div>

                <div class="contact-item" id="address">
                    <address>Lakeland, Florida USA</address>
                </div>
                <!--<a href="pages/contact/relocate.php" class="relocate-link">
                <div class="relocate">
                    <p>Yes I'm willing to relocate! <br><span>Learn More</span></p>
                </div>
            </a>-->


            </div>

        </div>
    </div>

</body>

<?php
include($footer_path);
?>