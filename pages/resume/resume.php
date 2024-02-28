<?php
include '../../config.php';
$header = $base_path . '/assets/header.php';
$footer_path = $base_path . '/assets/footer.php';
$navigation_path = $base_path . '/assets/navigation2.php';

include $header;
?>


<!--Page Specific Title and Description Information for SEO-->

<head>
    <title>Hire Alex Klausing in 2024! | Nonprofit | Outdoor Recreation</title>
    <meta name="description" content="A professional portfolio of Alex Klausing, nonprofit, camping, and outdoor recreation programs professional with ten years of experience.">

    <?php
    include($navigation_path);
    ?>

    <link rel="stylesheet" href="css/resume/resume.css" type="text/css">

</head>

<!--Navigation Bar-->


<body>

    <div class="download-containter">
        <div class="download-btn">
            <a href="media/documents/Alex%20Klausing%20Resume.pdf" download>Download Resume</a>
        </div>
    </div>
    <div class="pdf">


        <iframe src="media/documents/Alex%20Klausing%20Resume.pdf" frameborder="0" height="800px" allowfullscreen="true" marginheight="300px"></iframe>
    </div>
</body>