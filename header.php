<header>
    <nav class="navbar">
        <a href="../Main/Home.php"><img src="../images/PopeyeSpinach.png" alt="logo" class="title"></a>
        <a href="../Main/Home.php" class="title">Popeye's Lab</a>
        <div class="nav">
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                <a href="../admin/dashboard.php">Admin Dashboard</a>
            <?php endif; ?>
            <a href="../Main/Home.php">Home</a>
            <a href="../Subscriptions/Subscriptions.php">Subscriptions</a>
            <a href="../Stores/Store.php">Store</a>
            <a href="../Location/Location.php">Locations</a>
            <a href="../Gallery/Gallery.php">Gallery</a>
            <a href="#fund">About Us</a>
            <a href="../login/logout.php">
                <button type="button" class="login-button">
                    <?php echo "Logout ($username \"$role\")"; ?>
                </button>
            </a>
        </div>
    </nav>
</header>
