<?php
$conn = mysqli_connect("localhost", "root", "", "stone_pet_shop");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
