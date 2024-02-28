<?php
include '../../config.php';
$header = $base_path . '/assets/header.php';
$footer_path = $base_path . '/assets/footer.php';
$navigation_path = $base_path . '/assets/navigation2.php';

include $header;
?>
>

<!--Page Specific Title and Description Information for SEO-->

<head>
    <title>Work Examples | Hire Alex Klausing in 2021!</title>
    <meta name="description" content="Examples of professional work Alex has produced.">

    <?php
    include($navigation_path);
    ?>

</head>


<section class="work-container">
    <div class="work-box">
        <img src="images/access/budget1.jpg" alt="">
        <img src="images/access/FOStracking.jpg" alt="">

    </div>


</section>



<?php
include($footer_path);
?>

<script type="text/javascript">
    var coll = document.getElementsByClassName("company");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>