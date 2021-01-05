<head>
<link rel="stylesheet" href="css/navigation.css" type="text/css">
</head>   

<div class="menu-btn">
    <div class="menu-btn_hamburger" id="bar1"></div>
    <div class="menu-btn_hamburger" id="bar2"></div>
    <div class="menu-btn_hamburger" id="bar3"></div>
</div>

<nav>

<a class="logo-box-link" href="index.php">
<div class="logo-box">
   <img class="hiker" src="images/hiking_silhouette.png" alt="hiker">
    <p class="logo-text">Alex<br><span>Klausing</span></p>
</div></a>

<ul class="links">
  <li><a href="index.php">Home</a></li>
  <li><a href="pages/resume/resume.php">Resume</a></li>
  <li><a href="pages/workexamples.php">Work Examples</a></li>
  <li><a href="pages/references.php">References</a></li>
</ul>


<ul class="contact">
  <li><a href="pages/contact/contact.php">Contact</a></li>
</ul>

</nav>

<script>

    const menuBtn = document.querySelector('.menu-btn');
    let menuOpen = false;
    menuBtn.addEventListener('click',()=>{
        if(!menuOpen){
            menuBtn.classList.add('open');
            menuOpen = true;}
    else {
        menuBtn.classList.remove('open');
        menuOpen = false;
    }                                     
    });
    
</script>

