<?php
// display.php
// This file will display the user's details on the next page

// Get the user's photo and details from the form
$photo = $_FILES["photo"]["name"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$sex = $_POST["sex"];
$bio = $_POST["bio"];
$facebook = $_POST["facebook"];
$twitter = $_POST["twitter"];
$instagram = $_POST["instagram"];
$regnum = $_POST["regnum"];

// Get the last four digits of the registration number as the identity tag
$idtag = substr($regnum, -4);

// Move the uploaded photo to the images folder
move_uploaded_file($_FILES["photo"]["tmp_name"], "images/" . $photo);

// Display the user's details on the next page
echo "<html>";
echo "<head>";
echo "<title>CSC Champions</title>";
echo "</head>";
echo "<body>";
echo "<h1>CSC Champions</h1>";
echo "<h2>Your details</h2>";
echo "<p>Identity tag: $idtag</p>";
echo "<img src='images/$photo' alt='Your photo' width='200' height='200'>";
echo "<p>Name: $name</p>";
echo "<p>Phone number: $phone</p>";
echo "<p>Sex: $sex</p>";
echo "<p>Contact bio: $bio</p>";
echo "<p>Social media links:</p>";
echo "<ul>";
if ($facebook) {
    echo "<li><a href='$facebook'>Facebook</a></li>";
}
if ($twitter) {
    echo "<li><a href='$twitter'>Twitter</a></li>";
}
if ($instagram) {
    echo "<li><a href='$instagram'>Instagram</a></li>";
}
echo "</ul>";
echo "</body>";
echo "</html>";
?>
