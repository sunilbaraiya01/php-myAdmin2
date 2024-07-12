<?php include 'Demo 1.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Data connection</title>
</head>
<body>

    <h2>Student Information</h2>
<div>
    <form action="" method="POST">
        <input type="text" name="firstname" placeholder="firstname"><br><br>
        <input type="text" name="lastname" placeholder="lastname"><br><br>
        <input type="number" name="age" placeholder="age"><br><br>
        <input type="submit" name="save_btn" value="Save">
        <button><a href="Demo 3.php">View</a></button>
    </form>
</div>

<?php
if (isset($_POST['save_btn'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $age = $_POST['age'];

    $query = "INSERT INTO student (
        firstname, lastname, age) VALUES('$fname', '$lname', '$age')";
    $data = mysqli_query($con, $query);

    if ($data) {
?>
<script>
    alert("Data saved successfully");
</script>
<?php

    } else {
        ?>
        <script>
            alert("pleas try agen");
        </script>
        <?php
    }
}
?>

</body>
</html>