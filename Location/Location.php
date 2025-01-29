<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login/LogIn.php"); 
        exit();
    }

    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
    <link rel="stylesheet" href="location.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="../Main/Home.php"><img src="../images/PopeyeSpinach.png" alt="logo" class="title"></a>
            <a href="../Main/Home.php" class="title">Popeye's Lab</a>
            <div class="nav">
                <a href="../Main/Home.php">Home</a>
                <a href="../Subscriptions/Subscriptions.php">Services</a>
                <a href="../Stores/Store.php">Store</a>
                <a href="../Location/Location.php">Locations</a>
                <a href="../Gallery/Gallery.php">Gallery</a>
                <a href="#fund">About Us</a>
                <a href="../login/logout.php">
                    <button type="button" class="login-button"><?php echo "Logout ($username)"; ?></button>
                </a>
            </div>
        </nav>
        <nav class="second-nav">
            <a href="#prishtine">Prishtine</a>
            <a href="#ferizaj">Ferizaj</a>
            <a href="#gjilan">Gjilan</a>
            <a href="#mitrovice">Mitrovice</a>
            <a href="#peje">Peje</a>
            <a href="#prizren">Prizren</a>
            <a href="#gjakove">Gjakove</a>
        </nav>
    </header>
    <main>
        <div id="container">
            <div id="prishtine"> 
                <img src="Prishtina01.png" alt="Prishtine">
                <p>Location Prishtine: Str. Eqrem Çabej <a href="https://maps.app.goo.gl/zZ1ECeD1ytvCKndC8" >Open in Google Maps</a>
                <br> Contact: +383 (0) 44888991
                <br> Email: popeyespr@ubt-uni.net</p>
            </div>
            
            <div id="ferizaj"> 
                <img src="Ferizaj05.png" alt="Ferizaj">
                <p>Location Ferizaj: Str. Emin Duraku <a href="https://maps.app.goo.gl/YRK3DPaE6u2nBna5A" >Open in Google Maps</a>
                <br> Contact: +383 (0) 44888995
                <br> Email: popeyesfr@ubt-uni.net</p>
            </div>
    
            <div id="gjilan"> 
                <img src="Gjilani06.png" alt="Gjilan">
                <p>Location Gjilan: Str. 15 Qershori <a href="https://maps.app.goo.gl/YcMfSD1GYUxNBEVT7" >Open in Google Maps</a>
                <br> Contact: +383 (0) 44888996
                <br> Email: popeyesgl@ubt-uni.net</p>
            </div>
            
            <div id="mitrovice"> 
                <img src="Mitrovica02.png" alt="Mitorvice">
                <p>Location Mitrovice: Str. Mbreteresha Teutë <a href="https://maps.app.goo.gl/QdieDRBVqDHePem18" >Open in Google Maps</a>
                <br> Contact: +383 (0) 44888992
                <br> Email: popeyesmt@ubt-uni.net</p>
            </div>
    
            <div id="peje"> 
                <img src="Peja03.png" alt="Peje">
                <p>Location Peje: Str. Bekim Berisha <a href="https://maps.app.goo.gl/hKxhRqWVMc9tqb9WA" >Open in Google Maps</a>
                <br> Contact: +383 (0) 44888993
                <br> Email: popeyespj@ubt-uni.net</p>
            </div>
    
            <div id="prizren"> 
                <img src="Prizreni04.png" alt="Prizren">
                <p>Location Prizren: Str. Tirana <a href="https://maps.app.goo.gl/c6f5MKP2fcLb35ns5" >Open in Google Maps</a>
                <br> Contact: 0+383 (0) 44888994
                <br> Email: popeyespz@ubt-uni.net</p>
            </div>
            
            <div id="gjakove"> 
                <img src="Gjakova07.png" alt="Gjakove">
                <p>Location Gjakove: Str. Yjet e Erenikut <a href="https://maps.app.goo.gl/Lm5diWU9hugFJUot5" >Open in Google Maps</a>
                <br> Contact: +383 (0) 44888997
                <br> Email: popeyesgj@ubt-uni.net</p>
            </div>
        </div>
    </main>
    <footer id="fund">
        <div class="footer">
            <div class="about">
                <h3>About Popeye's Lab</h3>
                <p>Founded in 2024, Popeye's Lab is a top fitness center offering Fitness, Spinning, CrossFit, and Yoga classes, with advanced equipment and expert trainers to help you reach your goals.</p>
                <br>
                <p>© 2024 Popeye's Lab. All rights reserved. Powered By DeniShpati.</p>
            </div>
            <div class="footer-links">
                <h3>Our Services</h3>
                <ul>
                    <li><a href="">Advertise</a></li>
                    <li><a href="">Support</a></li>
                    <li><a href="">Our Company</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <div class="contact">
                <h3>Contact</h3>
                <ul>
                    <li><a href="">Phone: +383 (0) 44888999</a></li>
                    <li><a href="">Office: Str.Xhevdet Doda</a></li>
                    <li><a href="">Email: popeyeslab@ubt-uni.net</a></li>
                </ul>
            </div>
            
            <div class="follow-us">
                <h3>Follow Us</h3>
                <div class="social-icons">
                    <img src="../images/facebook.png" alt="Facebook">
                    <img src="../images/twitter.png" alt="Twitter">
                    <img src="../images/instagram.png" alt="Instagram">
                </div>
            </div>
            
            <div class="footer-policies">
                <p>Terms of use</p>
                <p>Privacy and Policy</p>
            </div>
        </div>
    </footer>
</body>
</html>