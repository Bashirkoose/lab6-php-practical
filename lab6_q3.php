
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q3 - PHP Functions</title>
</head>
<body>

<?php

// Function to calculate rectangle area
function calculateArea($width, $height) {
    $area = $width * $height;
    return $area;
}

// Call the function
$width = 4;
$height = 2;

$result = calculateArea($width, $height);

// Display the result
echo "<b>The area of a rectangle with a width of "
     . $width . " and " . $height . " is " . $result
     . "</b>";

?>

</body>
</html>

