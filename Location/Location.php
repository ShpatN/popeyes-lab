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
    <?php 
        include '../header.php';
    ?>
    <nav class="second-nav">
        <a href="#prishtine">Prishtine</a>
        <a href="#ferizaj">Ferizaj</a>
        <a href="#gjilan">Gjilan</a>
        <a href="#mitrovice">Mitrovice</a>
        <a href="#peje">Peje</a>
        <a href="#prizren">Prizren</a>
        <a href="#gjakove">Gjakove</a>
    </nav>
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
    <?php 
        include '../footer.php';
    ?>
</body>
</html>