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
    <title>Gallery</title>
    <link rel="stylesheet" href="gallery.css">
</head>
<body>
    <?php 
        include '../header.php';
    ?>
    <main>            
        <section class="gallery-photos">
            <h2>Our Gallery</h2>
            <div class="Gallery">

                <div class="gallery-item">
                    <img src="Prishtina1.jpg" alt="Photo 1">
                    <img src="Prishtina2.jpg" alt="Photo 2">
                    <img src="Prishtina3.jpg" alt="Photo 3">
                    <img src="Prishtina4.jpg" alt="Photo 4">
                    <div class="gallery-info">
                        <p>Prishtine</p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <img src="Ferizaj1.jpg" alt="Photo 5">
                    <img src="Ferizaj2.jpg" alt="Phoyo 6">
                    <img src="Ferizaj3.jpg" alt="Photo 7">
                    <img src="Ferizaj4.jpg" alt="Photo 8">
                    <div class="gallery-info">
                        <p>Ferizaj</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="Gjilan1.jpg" alt="Photo 9">
                    <img src="Gjilan2.jpg" alt="Photo 10">
                    <img src="Gjilan3.jpg" alt="Photo 11">
                    <img src="Gjilan4.jpg" alt="Photo 12">
                    <div class="gallery-info">
                        <p>Gjilan</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="Mitrovice1.jpg" alt="Photo 13">
                    <img src="Mitrovice2.jpg" alt="Photo 14">
                    <img src="Mitrovice3.jpg" alt="Photo 15">
                    <img src="Mitrovice4.jpg" alt="Photo 16">
                    <div class="gallery-info">
                        <p>Mitrovice</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="Peje1.jpg" alt="Photo 17">
                    <img src="Peje2.jpg" alt="Photo 18">
                    <img src="Peje3.jpg" alt="Photo 19">
                    <img src="Peje4.jpg" alt="Photo 20">
                    <div class="gallery-info">
                        <p>Peje</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="Prizren1.jpg" alt="Photo 21">
                    <img src="Prizren2.jpg" alt="Photo 22">
                    <img src="Prizren3.jpg" alt="Photo 23">
                    <img src="Prizren4.jpg" alt="Photo 24">
                    <div class="gallery-info">
                        <p>Prizren</p>
                    </div>
                </div>

                <div class="gallery-item">
                    <img src="Gjakove1.jpg" alt="Photo 25">
                    <img src="Gjakove2.jpg" alt="Photo 26">
                    <img src="Gjakove3.jpg" alt="Photo 27">
                    <img src="Gjakove4.jpg" alt="Photo 28">
                    <div class="gallery-info">
                        <p>Gjakove</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php 
        include '../footer.php';
    ?>
</body>
</html>