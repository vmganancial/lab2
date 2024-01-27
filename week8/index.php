<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi! I'm Victor Angelo Ganancial</title>
    <link rel="icon" href="favicon.png" type="image/png" alt="Website Icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
</head>
<body>

    <header>
        <h1 id="greeting">Welcome to My Personal Website!</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#aboutme">About Me</a>
            <a href="#gallery">Gallery</a>
            <a href="#resource">Resources</a>
        </nav>
    </header>

    <section id="home" class="home-page">
        <img src="profilepic.png" alt="Profile Picture" class="profile-image">
        <div class="profile-text">
            <p id="greeting-text">Hi! I'm Victor Angelo Ganancial</p>
        </div>
        <div class="profile-details">
            <p>IT Student | Gamer | Tech Enthusiast</p>
        </div>
        <button id="clickMeButton">Click Me</button>
	<button id="formButton">Form</button>
    </section>
    <section id="aboutme" class="about-me">
	<div class="about-me-content">
	<h2>About Me</h2>
	<?php

echo "How's it going?<br>";
echo "I hope my developing website satisfies your preferences, and do let me know if you have any questions.\n<br>";

?>

<?php

$name = "Victor Angelo";
$age = 20;

echo "Quick Information:\n<br>";
echo "Name: $name\n<br>";
echo "Age: $age\n<br>";

?>

<?php

$floatNumber = 20.5;
$intNumber = (int)$floatNumber;

echo "Casting\n<br>";
echo "Original Float Number: $floatNumber\n<br>";
echo "Casted Integer Number: $intNumber\n<br>";

?>

<?php

$originalString = "Hello World!";
$modifiedString = strtoupper($originalString);

echo "Strings\n<br>";
echo "Original String: $originalString\n<br>";
echo "Modified String: $modifiedString\n<br>";

?>

<?php

$marks = 80;
$result = ($marks >= 60) ? "Pass" : "Fail";

echo "Value Check\n<br>";
echo "Marks: $marks\n<br>";
echo "Result: $result\n<br>";

?>
</section>

    <section id="gallery" class="gallery">
        <h2>Gallery</h2>
        <!-- Add your gallery content here -->
    </section>

    <section id="resource" class="resources">
        <h2>Resources</h2>
        <!-- Add your resources content here -->
    </section>
    <footer>
        <a href="https://www.linkedin.com/in/victor-angelo-ganancial-797850244/" target="_blank"><img src="Linkedin.png" alt="LinkedIn"></a>
        <a href="https://www.tiktok.com/@victor_gnncl" target="_blank"><img src="Tiktok.png" alt="TikTok"></a>
        <a href="https://www.instagram.com/victor_gnncl/" target="_blank"><img src="Instagram.png" alt="Instagram"></a>
        <a href="https://www.facebook.com/victor.ganancial" target="_blank"><img src="Facebook.png" alt="Facebook"></a>
    </footer>

    <script src="script.js"></script>
</body>
</html>
