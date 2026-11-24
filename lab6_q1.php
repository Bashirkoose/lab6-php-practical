
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q1</title>
</head>
<body>

<?php
    $name = "BASHIR AHMED BASHIR";
    $matric = "AI240242";
    $course = "BIC21203 Web Development";
    $year = "2026/2027";
    $address = "12, Jalan Cempaka 3aman Bunga Cempaka Biru, Parit Raja, 86400, Sri Gading";
?>

<table border="1">
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matric; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $year; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
