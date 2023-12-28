<!DOCTYPE html>
<html>
<head>
    <title>Servic - Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h1>Contact Us</h1>
        <?php
        $contacts = file("contacts.txt");
        foreach ($contacts as $contact) {
            echo "<p>$contact</p>";
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>