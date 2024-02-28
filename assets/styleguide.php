<?php
include '../config.php';
$header = $base_path . '/assets/header.php';
$footer_path = $base_path . '/assets/footer.php';
$navigation_path = $base_path . '/assets/navigation2.php';

include $header;
?>


<head>
    <link rel="stylesheet" href="css/styleguide.css">

    <!-- //FONTS// -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <?php
    include $navigation_path;
    ?>
    <div class="container">
        <img src="/common_assets/brandkit/hiking_silhouette_003A66.png" alt="">
    </div>

    <div class="title">
        <h1>Style Guide</h1>
    </div>
    <!-- 
    ORIGINAL PALLET -->

    <div class="container">
        <div class="color">
            <div class="colorblock camp_blue"></div>
            <div class="colorinfo">
                <p class="t1">camp_blue</p>
                <p>var(--camp-blue)</p>
                <p>RGBA (0,113,133) <br>HEX #007185</p><br>
                <p class="t3">Main Brand Elements</p>
                <p>Logo, headers, primary navigation, and important brand-related components.</p>
            </div>
        </div>

        <div class="color">
            <div class="colorblock sunlight_yellow"></div>
            <div class="colorinfo">
                <p class="t1">sunlight_yellow</p>
                <p>var(--sunlight-yellow)</p>
                <p>RGBA (255,211,92) <br>HEX #FFD35C</p><br>
                <p class="t3">Call-to-Action</p>
                <p>Buttons, links, and other elements that require user interaction and attention.</p>
            </div>
        </div>

        <div class="color">
            <div class="colorblock sky_white"></div>
            <div class="colorinfo">
                <p class="t1">sky_white</p>
                <p>var(--sky-white)</p>
                <p>RGBA (245,245,245) <br>HEX #F5F5F5</p><br>
                <p class="t3">Background and Whitespace</p>
                <p>Backgrounds for sections, cards, and overall website backdrop. Also used for clean and minimalistic design.</p>
            </div>
        </div>

        <div class="color">
            <div class="colorblock forest_green"></div>
            <div class="colorinfo">
                <p class="t1">forest_green</p>
                <p>var(--forest-green)</p>
                <p>RGBA (37,143,118) <br>HEX #258F76</p><br>
                <p class="t3">Nature and Outdoor Elements</p>
                <p>Icons representing outdoor activities, secondary buttons, and borders.</p>
            </div>
        </div>

        <div class="color">
            <div class="colorblock dark_blue"></div>
            <div class="colorinfo">
                <p class="t1">dark_blue</p>
                <p>var(--dark-blue)</p>
                <p>RGBA (0,58,102) <br>HEX #003A66</p><br>
                <p class="t3">Text and UI Elements</p>
                <p>Primary text color, icons, and other UI components for a readable and professional appearance.</p>
            </div>
        </div>

        <div class="color">
            <div class="colorblock coral"></div>
            <div class="colorinfo">
                <p class="t1">coral</p>
                <p>var(--coral)</p>
                <p>RGBA (255,135,92) <br>HEX #FF875C</p><br>
                <p class="t3">Accent and Highlight</p>
                <p>Used to draw attention to important information, announcements, or specific features.</p>
            </div>
        </div>

        <div class="color">
            <div class="colorblock slate_grey"></div>
            <div class="colorinfo">
                <p class="t1">slate_grey</p>
                <p>var(--slate-grey)</p>
                <p>RGBA (107,123,140) <br>HEX #6B7B8C</p><br>
                <p class="t3">Subtle Accents</p>
                <p>Use sparingly for subtle design elements, borders, or backgrounds to add depth.</p>
            </div>
        </div>

        <div class="color">
            <div class="colorblock goldenrod"></div>
            <div class="colorinfo">
                <p class="t1">goldenrod</p>
                <p>var(--goldenrod)</p>
                <p>RGBA (218,165,32) <br>HEX #DAA520</p><br>
                <p class="t3">Secondary Accent</p>
                <p>Use for diversity and richness in select elements without overwhelming the primary palette.</p>
            </div>
        </div>
    </div>


    </div>
    <div class="container">
        <div class="text_container">
            <div class="font montserrat">
                <h1>H1 [Montserrat] Camp Curated </h1>
                <h2>H2 [Montserrat] Camp Curated </h2>
                <h3>H3 [Montserrat] Camp Curated </h3>
                <h4>H4 [Montserrat] Camp Curated </h4>
                <h5>H5 [Montserrat] Camp Curated </h5>
                <h6>H6 [Montserrat] Camp Curated </h6>
                <p class="t1">.t1 [Montserrat] Camp Curated</p>
                <p class="t2">.t2 [Montserrat] Camp Curated</p>
                <p class="t3">.t3 [Montserrat] Camp Curated</p>
                <p class="t4">.t4 [Montserrat] Camp Curated</p>
                <p class="roboto">P [Roboto] Camp Curated </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="buttons">
            <button class="call_to_action">Call to Action</button>
        </div>
    </div>
    </div>
</body>