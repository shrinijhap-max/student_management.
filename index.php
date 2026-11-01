<?php
include 'db.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
</head>
<body>

<h1>Student Details</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Course</th>
    </tr>

    <?php
    while ($row = $result->fetch_assoc()) {
    ?>

    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['name']); ?></td>
        <td><?php echo $row['age']; ?></td>
        <td><?php echo htmlspecialchars($row['course']); ?></td>
    </tr>

    <?php } ?>

</table>

</body>
</html>