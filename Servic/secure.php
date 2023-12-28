
<?php
$admin_id = "admin";
$admin_password = "password";  // This is a simple example. In a real-world scenario, avoid hardcoding passwords.

// Check if user is submitting the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_id = $_POST["userid"];
    $input_password = $_POST["password"];

    if ($input_id == $admin_id && $input_password == $admin_password) {
        $authenticated = true;
    } else {
        $error_message = "Invalid login credentials.";
    }
}

include 'header.php';

?>
<link rel='stylesheet' type='text/css' href='style.css'>

<main class="container" style="padding: 20px;">
    <h2>Admin Login</h2>

    <?php if (isset($authenticated) && $authenticated): ?>
        <li><a href="curl.php">All our partner companies users</a></li>
        <li><a href="register.php">Create a Users</a></li>
        <li><a href="user_search.php">Search Users</a></li>

    <?php else: ?>
        <?php if (isset($error_message)): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form action="secure.php" method="post" style="background-color: #f9f9f9; padding: 20px; border-radius: 5px; max-width: 300px;">
            <label for="userid">User ID:</label>
            <input type="text" style="width: 100%; padding: 10px; margin-bottom: 10px;" id="userid" name="userid" required>
            <br><br>
            <label for="password">Password:</label>
            <input type="password" style="width: 100%; padding: 10px; margin-bottom: 10px;" id="password" name="password" required>
            <br><br>
            <input type="submit" style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;" value="Login">
        </form>
    <?php endif; ?>
</main>

<?php include 'footer.php'; ?>
