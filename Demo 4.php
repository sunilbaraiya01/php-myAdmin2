<?php include 'Demo 1.php';
$id = $_GET['id'];
$select = "SELECT * FROM student WHERE id = '$id'";
$data = mysqli_query($con, $select);
$row = mysqli_fetch_array($data);
?>

<div>
    <form action="" method="POST">
        <input value="<?php echo $row['firstname'] ?>" type="text" name="firstname" placeholder="firstname"><br><br>
        <input type="text" name="lastname" value="<?php echo $row['lastname'] ?>" placeholder="lastname"><br><br>
        <input type="number" name="age" value="<?php echo $row['age'] ?>" placeholder="age"><br><br>
        <input type="submit" name="update_btn" value="Update">
        <button><a href="Demo 3.php">Back</a></button>
    </form>
</div>


<?php
if (isset($_POST['update_btn'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $age = $_POST['age'];

    $update = "UPDATE  student SET firstname = '$fname', lastname = '$lname', age = '$age' WHERE id = '$id'";
    $data = mysqli_query($con, $update);

    if ($data) {
?>
<script>
    alert("Data Update successfully");
    window.open("http://localhost/php/Demo/Demo%203.php", "_self");
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