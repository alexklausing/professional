<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/nav3.css" type="text/css">
</head>

<body>
    <nav>
        <div class="nav-container" id="nav-container">
            <div class="nav-flex">
                <a id="logo-box-link" href="index.php">
                    <div id="logo-box">
                        <img class="hiker" src="media/brandkit/hiking_silhouette.png" alt="hiker">
                        <img class="hiker coral" src="media/brandkit/logo_coral.png" alt="hiker">
                        <p class="logo-text">Alex<br><span>Klausing</span></p>
                    </div>
                </a>
            </div>
            <div class="nav-flex nav-links">
                <ul>
                    <!-- <li><a href="#home">Home</a></li> -->
                    <li class="dropdown">
                        <a href="#about">Resume</a>
                        <div class="dropdown-container">
                            <ul class="dropdown-content">
                                <li><a href="#team">Online Resume</a></li>
                                <li><a href="#team">Download PDF Version</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#about">Consulting Services</a>
                        <div class="dropdown-container">
                            <ul class="dropdown-content">
                                <li><a href="#team">Fundraising</a></li>
                                <li><a href="#team">Summer Camp Administration</a>
                                    <div class="dropdown-container">
                                        <ul class="dropdown-content">
                                            <li><a href="#team">Purchasing Services</a></li>
                                            <li><a href="#team">Staff Training</a></li>
                                            <li><a href="#contact">Program Design</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#contact">Nonprofit Leadership</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#about">About Me</a>
                        <div class="dropdown-container">
                            <ul class="dropdown-content">
                                <li><a href="#team">About Me</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="nav-flex nav-contact">
                <li><a class="" href="#contact">Contact</a></li>
            </div>
        </div>

        <div class="hamburger">
            <input type="checkbox" class="menubtn" id="menubtn" onclick="menutoggle()">
            <div class="line bar1"></div>
            <div class="line bar2"></div>
            <div class="line bar3"></div>
        </div>
    </nav>

    <script>
        function menutoggle() {
            let check = document.getElementById("menubtn");
            let nav = document.getElementById("nav-container");

            if (check.checked == true) {
                nav.style.display = "flex";
                nav.style.visibility = "visible";
            } else {
                nav.style.display = "none";
                nav.style.visibility = "hidden";
            }
        }
    </script>
</body>

</html>