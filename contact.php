<?php
include 'db.php';

// fetch pets from database
$pets_query = "SELECT * FROM pets";
$pets_result = mysqli_query($conn, $pets_query);

$message = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $pet_id = $_POST['pet'];
    $reason = $_POST['reason'];

    $sql = "INSERT INTO adoption_requests (user_name, email, pet_id, message)
            VALUES ('$name', '$email', '$pet_id', '$reason')";

    if(mysqli_query($conn, $sql)){
        $message = "Thank you! Your adoption request has been submitted.";
    } else {
        $message = "Error submitting request.";
    }
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
            <?php while($pet = mysqli_fetch_assoc($pets_result)): ?>
                <option value="<?php echo $pet['id']; ?>">
                    <?php echo $pet['name']; ?>
                </option>
            <?php endwhile; ?>
        </select>

        <label>Why do you want this pet?</label>
        <textarea name="reason" required></textarea>

        <button type="submit">Adopt</button>
    </form>
</section>

</body>
</html>
