<?php
include 'pets.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shop - Stone Pet Shop</title>
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

<section class="shop">
    <h2>Our Stone Pets</h2>
    <div class="pet-grid">
        <?php foreach ($stone_pets as $pet): ?>
            <div class="pet-card">
                <img src="<?php echo $pet['image']; ?>" alt="<?php echo $pet['name']; ?>">
                <h3><?php echo $pet['name']; ?></h3>
                <p><?php echo $pet['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>
</body>
</html>
