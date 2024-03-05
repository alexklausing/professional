<?php
include '../../config.php';
$header = $base_path . '/assets/header.php';
$footer_path = $base_path . '/assets/footer.php';
$navigation_path = $base_path . '/assets/navigation.php';

include $header;
?>


<!--Page Specific Title and Description Information for SEO-->

<head>
    <title>Hire Alex Klausing in 2023! | Nonprofit | Outdoor Recreation</title>
    <meta name="description" content="A professional portfolio of Alex Klausing, nonprofit, camping, and outdoor recreation programs professional with ten years of experience.">

    <?php
    include($navigation_path);
    ?>

    <link rel="stylesheet" href="css/about/about.css" type="text/css">

</head>

<body>
    <div class="about-container">
        <div class="content-box">
            <img src="media/brandkit/headshot.png" class="about-img" alt="">
            <div class="about-text">
                <h2 id="headline3">Nonprofit Manager. Program Specialist. Leadership.</h2>
                <p id="para1">Alex Klausing has been in the camping and outdoor industry since working his first season on a summer camp staff in 2003 and continued through 2010. From 2010 to 2020, Alex served as a full-time professional with the Boy Scouts of America. He focused his career on program and outdoor adventure. He has a proven record of success in all non-profit operations functions, including volunteer recruitment, fundraising, and board engagement.

                    Some of his notable assignments and positions include serving as the Camp Director of Camp Crooked Creek (Shepherdsville, Kentucky), Training Director and Day Camp staff advisor with the Lincoln Heritage Council (Louisville, Kentucky), Associate Director of Program at Northern Tier National High Adventure Base (Ely, Minnesota), and Program Director of the Three Fires Council (St. Charles, Illinois).
                </p>
            </div>
        </div>
    </div>

    <section class="photo-container">
        <div class="photo-box">
            <img src="media/photos/alexrowing1.jpg" alt="">
            <caption id="para1">Collegiate Athlete | Murray State Rowing (4 Years)</caption>
        </div>

        <div class="photo-box">
            <img src="media/photos/alexhiking5.jpg" alt="">
            <caption></caption>
        </div>
        <div class="photo-box">
            <img src="media/photos/alexmap.jpg" alt="">
            <caption></caption>
        </div>

        <div class="photo-box">
            <img src="media/photos/ntrecruit.jpg" alt="">
            <caption></caption>
        </div>

    </section>

</body>

<?php
include($footer_path);
?>