<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/professional/assets/header.php";
    include ($path);
?>

<!--Page Specific Title and Description Information for SEO-->

<head>
    <title>Hire Alex Klausing in 2021! | Nonprofit | Outdoor Recreation</title>
    <meta name="description" content="A professional portfolio of Alex Klausing, nonprofit, camping, and outdoor recreation programs professional with ten years of experiance.">

<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/professional/assets/navigation.php";
    include($path);
?>



<style>
<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/professional/css/contact/contact.css";
    require $path;
?>
</style>

</head>

<div class="contact-container">
<div class="contact-box">
    <div id="name">
        <p>Alex Klausing</p>
    </div>
    <div class="contact-box-sub">
        <div class="contact-item" id="phone">
            <img src="images/baseline_call_black_18dp.png" alt="">
            <p>Cell: </p><a class="phone" href="tel:123-456-7890"> 502-930-2694</a>
        </div>
        <div class="contact-item" id="email">
            <img src="images/baseline_email_black_18dp.png" alt="">
            <a href="mailto:alex.klausing@outlook.com">alex.klausing@outlook.com</a>
        </div>
        <div class="contact-item" id="address">
            <address>2824 Mc Duffee Circle <br>North Aurora, Illinois 60542</address>
        </div>
        <a href="pages/contact/relocate.php" class="relocate-link">
           <div class="relocate">
            <p>Yes I'm willing to relocate! <br><span>Learn More</span></p>
        </div></a>
    </div>

</div>
</div>
