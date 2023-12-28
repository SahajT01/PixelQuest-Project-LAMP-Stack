<?php
session_start();
// Check if user is logged in
$is_logged_in = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
$is_admin_logged_in = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Marketplace</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .header { background-color: #333; color: white; padding: 10px 0; text-align: center; }
        .nav { padding: 15px; background: #444; }
        button {
                    background-color: #ffcd29;
                    border: none;
                    color: black;
                    font-family: "Arial Rounded MT Bold", sans-serif;
                    font-size: 15px;
                    padding: 10px 20px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    cursor: pointer;
                    border-radius: 16px;
                    width: 10%;
                    min-width: 100px;
                    height: 40px;
                    transition: background-color 0.3s;
                    display: inline-block;
                }
        .main { padding: 20px; }
        .card { background: white; text-align: center; padding: 20px; margin-bottom: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .footer { background-color: #333; color: white; text-align: center; padding: 10px 0; margin-top: 30px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to the Online Marketplace</h1>
    </div>
    <div class="nav">
    <?php if ($is_logged_in || $is_admin_logged_in): ?>
        <!-- Display Logout Button for logged-in users -->
        <button class="button" onclick="location.href='logout.php';">Log out</button>
    <?php else: ?>
        <!-- Display Sign In Button for guests -->
        <button class="button" onclick="location.href='login.php';">Log in</button>
    <?php endif; ?>
        <button class="button" onclick="location.href='register.html';">register</button>
        <button class="button" onclick="location.href='track.php';" style="width: 250px;">Recently Visited Website</button>
        <button class="button" onclick="location.href='global_recently_viewed.php';" style="width: 250px;">Recently Visited Product</button>
        <button class="button" onclick="location.href='global_most_viewed.php';" style="width: 250px;">Most Visited Product</button>
    </div>
    <div class="main">
        <div class="card">
            <h2>PixelQuest</h2>
            <p>Description of PixelQuest...</p>
            <button class="button" onclick="location.href='pixelquest/index.php';">PixelQuest</button>
        </div>
        <div class="card">
            <h2>Servic</h2>
            <p>Description of Servic...</p>
            <button class="button" onclick="location.href='Servic/index.php';">Servic</button>
        </div>
        <div class="card">
            <h2>Gen AI Wear</h2>
            <p>Description of Gen AI Wear...</p>
            <button class="button" onclick="location.href='GenAI/index.php';">GenAI</button>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2023 Online Marketplace</p>
    </div>
</body>
</html>
