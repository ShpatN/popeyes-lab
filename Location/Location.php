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
    <main>
        <h1>Our Locations</h1>
        <div id="slider-container">
            <div class="slider">
                <div id="prishtine" class="slide"> 
                    <img src="Prishtina01.png" alt="Prishtine">
                    <p><b>PRISHTINE</b>: Str. Eqrem Çabej <a href="https://maps.app.goo.gl/zZ1ECeD1ytvCKndC8" >Open in Google Maps</a>
                </div>
                
                <div id="ferizaj" class="slide"> 
                    <img src="Ferizaj05.png" alt="Ferizaj">
                    <p><b>FERIZAJ</b>: Str. Emin Duraku <a href="https://maps.app.goo.gl/YRK3DPaE6u2nBna5A" >Open in Google Maps</a>
                </div>

                <div id="gjilan" class="slide"> 
                    <img src="Gjilani06.png" alt="Gjilan">
                    <p><b>GJILAN</b>: Str. 15 Qershori <a href="https://maps.app.goo.gl/YcMfSD1GYUxNBEVT7" >Open in Google Maps</a>
                </div>
                
                <div id="mitrovice" class="slide"> 
                    <img src="Mitrovica02.png" alt="Mitrovica">
                    <p><b>MITROVICE</b>: Str. Mbreteresha Teutë <a href="https://maps.app.goo.gl/QdieDRBVqDHePem18" >Open in Google Maps</a>
                </div>

                <div id="peje" class="slide"> 
                    <img src="Peja03.png" alt="Peje">
                    <p><b>PEJE</b>: Str. Bekim Berisha <a href="https://maps.app.goo.gl/hKxhRqWVMc9tqb9WA" >Open in Google Maps</a>
                </div>

                <div id="prizren" class="slide"> 
                    <img src="Prizreni04.png" alt="Prizren">
                    <p><b>PRIZREN</b>: Str. Tirana <a href="https://maps.app.goo.gl/c6f5MKP2fcLb35ns5" >Open in Google Maps</a>
                </div>
                
                <div id="gjakove" class="slide"> 
                    <img src="Gjakova07.png" alt="Gjakove">
                    <p><b>GJAKOVE</b>: Str. Yjet e Erenikut <a href="https://maps.app.goo.gl/Lm5diWU9hugFJUot5" >Open in Google Maps</a>
                </div>
            </div>
            <div class="nav-buttons">
                <button class="prev">Prev</button>
                <button class="next">Next</button>
            </div>
        </div>
    </main>

    <?php 
        include '../footer.php';
    ?>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        function showSlide(index) {
            if (index >= totalSlides) {
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = totalSlides - 1;
            } else {
                currentSlide = index;
            }

            document.querySelector('.slider').style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }

        setInterval(nextSlide, 5000);

        document.querySelector('.next').addEventListener('click', nextSlide);
        document.querySelector('.prev').addEventListener('click', prevSlide);

        showSlide(currentSlide);
    </script>
</body>
</html>
