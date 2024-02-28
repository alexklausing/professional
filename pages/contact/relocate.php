<?php
//insert this php code before any other code on each page. This determines the current server and root path.

//Used 'CHANGEALLTAG_' before extensions to increase integrity of a future use of search-> "change all" operation in the event the file paths need to be changed on all pages accross the website. In the event this is need search full extension to avoid unintentional overwrites | ex: $CHANGETAG_header = "/assets/header/.php"

    $CHANGEALLTAG_header = "/assets/header.php";
    $CHANGEALLTAG_nav = "/assets/navigation.php";
    $CHANGEALLTAG_footer = "/assets/footer.php";
    $CHANGEALLTAG_liveserver = "/home/aklausin/";
    $CHANGEALLTAG_current = $_SERVER['DOCUMENT_ROOT'];

//If the file path is different between computers you might need to alter the "nested path" to create a different extension to get to the header, nav, and footer "relative" paths.
    $CHANGEALLTAG_nestedpath = "";

    if ($CHANGEALLTAG_current == $CHANGEALLTAG_liveserver){
        $headerpath = $CHANGEALLTAG_liveserver;
        $headerpath .= $CHANGEALLTAG_header;
        $navpath = $CHANGEALLTAG_liveserver;
        $navpath .= $CHANGEALLTAG_nav;
        $footerpath = $CHANGEALLTAG_liveserver;
        $footerpath .= $CHANGEALLTAG_footer;
    }

    else {$headerpath = $CHANGEALLTAG_current;
        $headerpath .= $CHANGEALLTAG_nestedpath.$CHANGEALLTAG_header;
        $navpath = $CHANGEALLTAG_current;
        $navpath .= $CHANGEALLTAG_nestedpath.$CHANGEALLTAG_nav;
        $footerpath = $CHANGEALLTAG_current;
        $footerpath .= $CHANGEALLTAG_nestedpath.$CHANGEALLTAG_footer;
         }
include_once $headerpath;
?>

<!--Page Specific Title and Description Information for SEO-->

<head>
    <title>Relocation Preferences | Hire Alex Klausing in 2021!</title>
    <meta name="description" content="Alex Klausing's relocation preferences.">

<?php 
    include ($navpath);
?>

<link rel="stylesheet" href="css/contact/relocate.css" type="text/css">

<body>
    
<section class="cover-container">
    <div class="cover-box" id="headline5">Relocation Preference</div>
</section>

<section class="relocation-container">
    <div class="explanation" id="para1">
         <p>I am most concerned about finding an excellent place to raise a family. For me, that means being in a community that offers an exceptional quality of life. Our top priorities are availability and quality of childcare, schools, and the community's safety. I am open to considering all opportunities; however, the geographic areas I am most interested in are listed below.
    </p>
    </div>
    <div class="sub-container">
        <p class="title">States</p>
    </div>
    <div class="sub-container">

        <div class="relocation-box state">
            <img src="media/icons/florida-silhouette.png" alt="Florida">
            <p>Florida</p>
        </div>

        <div class="relocation-box state">
            <img src="media/icons/kentucky-silhouette.png" alt="Kentucky">
            <p>Kentucky</p>
        </div>

        <div class="relocation-box state">
            <img src="media/icons/north-carolina-silhouette.png" alt="North Carolina">
            <p>North Carolina</p>
        </div>

        <div class="relocation-box state">
            <img src="media/icons/virginia-silhouette.png" alt="Virginia">
            <p>Virginia</p>
        </div>
    </div>
    <div class="sub-container">
        <p class="title">Regions</p>
    </div>
    <div class="sub-container">
        <div class="relocation-box region">
            <p>Rocky Mountain Area</p>
        </div>
        <div class="relocation-box region">
            <p>Blue Ridge Mountain Area</p>
        </div>
        <div class="relocation-box region">
            <p>Along the Appalachian Trail</p>
        </div>
    </div>
    
    
</section>

</body>
<?php
include ($footerpath);
?>