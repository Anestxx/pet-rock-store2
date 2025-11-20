<?php
include 'pets.php';
$random_index = array_rand($stone_pets);
$pet_of_the_day = $stone_pets[$random_index];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Stone Pet Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Stone Pet Shop</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="about.php">About</a>
        <a href="contact.php">Adopt</a>
    </nav>
</header>

<section class="pet-of-the-day">
    <h2>Pet of the Day</h2>

    <div class="big-card">
        <img src="<?php echo $pet_of_the_day['image']; ?>" alt="">
        <h3><?php echo $pet_of_the_day['name']; ?></h3>
        <p><?php echo $pet_of_the_day['description']; ?></p>
    </div>
</section>


</body>
</html>
