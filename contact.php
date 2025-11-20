<?php include 'pets.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $pet = $_POST['pet'];
    $reason = $_POST['reason'];

    $entry = "Name: $name | Email: $email | Age: $age | Pet: $pet | Color: $color | Reason: $reason\n";
    file_put_contents('orders.txt', $entry, FILE_APPEND);

    $message = "Thank you for adopting $pet!";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Adopt a Stone Pet</title>
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

<section class="adopt-form">
    <h2>Adopt a Stone Pet</h2>
    <?php if($message) echo "<p class='success'>$message</p>"; ?>

    <form method="post" action="">
        <label>Your Name:</label>
        <input type="text" name="name" required>

        <label>Your Email:</label>
        <input type="email" name="email" required>

        <label>Your Age:</label>
        <input type="number" name="age" min="1" required>

        <label>Choose Pet:</label>
        <select name="pet" required>
            <?php foreach($stone_pets as $pet): ?>
                <option><?php echo $pet['name']; ?></option>
            <?php endforeach; ?>
        </select>


        <label>Why do you want this pet?</label>
        <textarea name="reason" required></textarea>

        <button type="submit">Adopt</button>
    </form>
</section>

</body>
</html>
