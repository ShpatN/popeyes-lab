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
    <title>Stores</title>
    <link rel="stylesheet" href="store.css">
</head>
<body>
    <?php
        include '../header.php';
    ?>
    <main>
        <h2 class="item-title">Suplements</h2>
        <div class="suplement-container" id="suplements">
            <div class="suplement-item">
                <h4>Creatine</h4>
                <img src="levrone-gold-creatine-300-g.jpg">
                <div class="suplement-info">
                    <button>20€</button>
                </div>
            </div>
            <div class="suplement-item">
                <h4>Mass Protein</h4>
                <img src="gold-super-mass-7-kg.jpg">
                <div class="suplement-info">
                    <div class="cmimi">
                        <button>80€</button>
                    </div>
                </div>
            </div>
        
            <div class="suplement-item">
                <h4>Whey Protein</h4>
                <img src="levrone-gold-whey-908-g.jpg">
                <div class="suplement-info">
                    <button>60€</button>
                </div>
            </div>
    
            <div class="suplement-item">
                <h4>Aminoacid</h4>
                <img src="levrone-gold-amino-rebuild-400-g.jpg">
                <div class="suplement-info">
                    <button>20€</button>
                </div>
            </div>
        
            <div class="suplement-item">
                <h4>Glutamine</h4>
                <img src="levrone-gold-glutamine-60.jpg">
                <div class="suplement-info">
                    <button>10€</button>
                </div>
            </div>
    
            <div class="suplement-item">
                <h4>Fat Burner</h4>
                <img src="gold-lipo-fatburner-60.jpg">
                <div class="suplement-info">
                    <button>60€</button>
                </div>
            </div>
    
            <div class="suplement-item">
                <h4>Preworkout</h4>
                <img src="gold-full-blown-energizer.jpg">
                <div class="suplement-info">
                    <button>40€</button>
                </div>
            </div>
        </div>

        <h2 class="item-title">Equipment</h2>
        <div class="equipment-container"id="equipment">
            <div class="equipment-item">
                <h4>Dumbbell</h4>
                <img src="dumbell-rack.jpg">
                <div class="equipment-info">
                    <button>1600€</button>
                </div>
            </div>

            <div class="equipment-item">
                <h4>Weight Tree</h4>
                <img src="weight.jpg">
                <div class="equipment-info">
                    <button>1400€</button>
                </div>
            </div>

            <div class="equipment-item">
                <h4>Biceps Curl</h4>
                <img src="bicepscurl.jpg">
                <div class="equipment-info">
                    <button>3700€</button>
                </div>
            </div>

            <div class="equipment-item">
                <h4>Bench</h4>
                <img src="karrik.png">
                <div class="equipment-info">
                    <button>1300€</button>
                </div>
            </div>

            <div class="equipment-item">
                <h4>Chest Press</h4>
                <img src="chestpress.jpg">
                <div class="equipment-info">
                    <button>2800€</button>
                </div>
            </div>

            <div class="equipment-item">
                <h4>Incline Chest Press</h4>
                <img src="incchest.jpg">
                <div class="equipment-info">
                    <button>3900€</button>
                </div>
            </div>

            <div class="equipment-item">
                <h4>Shoulder press</h4>
                <img src="shoulder.jpg">
                <div class="equipment-info">
                    <button>3400€</button>
                </div>
            </div>

            <div class="equipment-item">
                <h4>Dual Adjustable Pulley</h4>
                <img src="cable.png">
                <div class="equipment-info">
                    <button>8500€</button>
                </div>
            </div>

            <div class="equipment-item">
                <h4>Adjustable Cable Crossover</h4>
                <img src="dualcable.jpg">
                <div class="equipment-info">
                    <button>5200€</button>
                </div>
            </div>
    
            <div class="equipment-item">
                <h4>Leg Extension</h4>
                <img src="legextension.jpg">
                <div class="equipment-info">
                    <button>6000€</button>
                </div>
            </div>
    
            <div class="equipment-item">
                <h4>Seated Leg Curl</h4>
                <img src="leg curl.jpg">
                <div class="equipment-info">
                    <button>6300€</button>
                </div>
            </div>
    
            <div class="equipment-item">
                <h4>Linear Leg Press</h4>
                <img src="leg press.jpg">
                <div class="equipment-info">
                    <button>8100€</button>
                </div>
            </div>
    
            <div class="equipment-item">
                <h4>Smith Machine</h4>
                <img src="smith.jpg">
                <div class="equipment-info">
                    <button>3100€</button>
                </div>
            </div>
    
            <div class="equipment-item">
                <h4>Squat/Deadlift Rack</h4>
                <img src="squatrack.jpg">
                <div class="equipment-info">
                    <button>2300€</button>
                </div>
            </div>
    
            <div class="equipment-item">
                <h4>Pectoral Fly</h4>
                <img src="pec fly.jpg">
                <div class="equipment-info">
                    <button>6400€</button>
                </div>
            </div>    
        </div>
        
        <h2 class="item-title">Gymwear</h2>
        <div class="gymwear-container" id="gymwear">
            <div class="gymwear-item">
                <h4>T-shirt</h4>
                <img src="maica 1.png">
                <div class="gymwear-info">
                    <div class="cmimi"></div>
                    <button>30€</button>
                </div>
            </div>

            <div class="gymwear-item">
                <h4>Tank</h4>
                <img src="tanktop 1.png">
                <div class="gymwear-info">
                    <button>25€</button>
                </div>
            </div>

            <div class="gymwear-item">
                <h4>Shorts</h4>
                <img src="shorts.png">
                <div class="gymwear-info">
                    <button>30€</button>
                </div>
            </div>

            <div class="gymwear-item">
                <h4>Hoodie</h4>
                <img src="hoodie.png">
                <div class="gymwear-info">
                    <button>60€</button>
                </div>
            </div>

            <div class="gymwear-item">
                <h4>Joggers</h4>
                <img src="joggers.png">
                <div class="gymwear-info">
                    <button>60€</button>
                </div>
            </div>

            <div class="gymwear-item">
                <h4>Liftingstraps</h4>
                <img src="straps.png">
                <div class="gymwear-info">
                    <button>15€</button>
                </div>
            </div>

            <div class="gymwear-item">
                <h4>Liftinggloves</h4>
                <img src="gloves.png">
                <div class="gymwear-info">
                    <button>20€</button>
                </div>
            </div>

            <div class="gymwear-item">
                <h4>Liftingbelt</h4>
                <img src="belt.png">
                <div class="gymwear-info">
                    <button>70€</button>
                </div>
            </div>  
    </main>
    <?php 
        include '../footer.php';
    ?>
</body>
</html>


