<head>
<style>

<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/professional/css/global.css";
    include ($path);
?>

<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/professional/css/navigation.css";
    include ($path);
?>
</style>
</head>
<body>

<header class="header">
  
<a id="logo-box-link" href="index.php">
      <div id="logo-box">
          <img class="hiker" src="images/hiking_silhouette.png" alt="hiker">
          <p class="logo-text">Alex<br><span>Klausing</span></p>
      </div>
  </a>
  
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

<ul class="menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="pages/resume/resume.php">Resume</a></li>
    <li><a href="pages/references/references.php">References</a></li>
</ul>

<ul class="menu contact">
  <li><a href="pages/contact/contact.php">Contact</a></li>
</ul>

</header>

    
</body>
