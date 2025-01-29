<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login/LogIn.php"); 
        exit();
    }

    $username = $_SESSION['username'];
    $role = $_SESSION['role'];
    if ($role !== 'admin') {
        echo "Access Denied!";
        exit();
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popeye's Lab</title>
    <link rel="stylesheet" href="Subscription.css">
</head>
<body>
    <?php 
        include '../header.php';
    ?>
    <main>
        <div class="container">
            <div class="fitness">
                <h1>Fitness</h1>
                <div class="subscription">
                    <h3> 1 Month Subscription</h3>
                    <p>Achieve your fitness goals with our flexible one-month subscription, offering full access to gym facilities. Perfect for trying out our services </p>
                    <button type="submit">40€</button>
                </div>
                <div class="subscription">
                    <h3> 6 Month Subscription</h3>
                    <p>Stay consistent with your fitness journey with our six-month subscription, offering unlimited access to gym facilities. Commit to your goals with a plan that balances flexibility and long-term progress!</p>
                    <button type="submit">200€</button>
                </div>
                <div class="subscription">
                    <h3> 1 Year Subscription</h3>
                    <p>Transform your health with our one-year subscription, providing unlimited access to top-notch gym facilities. Enjoy the ultimate commitment to your fitness journey while unlocking exclusive perks and long-term savings! </p>
                    <button type="submit">350€</button>
                </div>
            </div>
           
            <div class="yoga">
                <h1>Yoga</h1>
                <div class="subscription">
                    <h3>1 Month Subscription</h3>
                    <p>Elevate your mind and body with our one-month yoga subscription, offering unlimited access to a variety of yoga classes for all skill levels. Experience relaxation, flexibility, and strength with expert guidance in a serene environment—no long-term commitment required!</p>
                    <button type="submit">50€</button>
                </div>
                <div class="subscription">
                    <h3>6 Month Subscription</h3>
                    <p>Deepen your practice with our six-month yoga subscription, offering unlimited access to a range of classes designed to enhance flexibility, strength, and mindfulness. Commit to long-term wellness and enjoy the balance and tranquility yoga brings to your life!</p>
                    <button type="submit">250€</button>
                </div>
                <div class="subscription">
                    <h3>1 Year Subscription</h3>
                    <p>Embrace a year of mindfulness and transformation with our one-year yoga subscription, granting unlimited access to diverse classes for all levels. Build strength, flexibility, and inner peace while committing to your well-being for the long term.</p>
                    <button type="submit">450€</button>
                </div>
            </div>
            
            <div class="crossfit">
                <h1> Crossfit</h1>
                <div class="subscription">
                    <h3>1 Month Subscription</h3>
                    <p>Kick-start your fitness journey with our one-month CrossFit subscription, offering high-intensity workouts designed to build strength, endurance, and confidence. Perfect for trying out our supportive community and expert coaching—no long-term commitment needed!</p>
                    <button type="submit">70€</button>
                </div>
                <div class="subscription">
                    <h3>6 Month Subscription</h3>
                    <p>Achieve your fitness goals with our six-month CrossFit subscription, providing access to dynamic workouts and personalized coaching. Commit to six months of progress, camaraderie, and results in a motivating environment.</p>
                    <button type="submit">350€</button>
                </div>
                <div class="subscription">
                    <h3>1 Year Subscription</h3>
                    <p>Transform your body and mind with our one-year CrossFit subscription, offering unlimited access to challenging workouts and expert guidance. Build lasting strength, resilience, and community connections while committing to your long-term fitness success!</p>
                    <button type="submit">650€</button>
                </div>
            </div>
           
            <div class="spinning">
                <h1>Spinning</h1>
                <div class="subscription">
                    <h3>1 Month Subscription</h3>
                    <p>Experience the energy and intensity of our spinning classes with a one-month subscription, offering unlimited access to high-energy cycling workouts. Perfect for anyone looking to boost their endurance and burn calories—no long-term commitment required!</p>
                    <button type="submit">60€</button>
                </div>
                <div class="subscription">
                    <h3>6 Month Subscription</h3>
                    <p>Push your limits with our six-month spinning class subscription, providing access to diverse cycling workouts that improve stamina, strength, and cardiovascular health. Stay motivated and track your progress as you commit to a healthier, fitter lifestyle!</p>
                    <button type="submit">330€</button>
                </div>
                <div class="subscription">
                    <h3>1 Year Subscription</h3>
                    <p>Take your fitness to the next level with a one-year spinning class subscription, offering unlimited access to high-intensity cycling sessions throughout the year. Commit to long-term fitness, improve your endurance, and enjoy the camaraderie of a dedicated cycling community!</p>
                    <button type="submit">600€</button>
                </div>
            </div>
        </div>
    </main>
    <?php 
        include '../footer.php';
    ?>
</body>
</html>