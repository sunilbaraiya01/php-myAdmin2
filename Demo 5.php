<?php include 'Demo 1.php';
$id = $_GET['id'];
$query="DELETE FROM student WHERE id = '$id'";
$data = mysqli_query($con, $query);
if ($data) {
    ?>
    <script>
        alert("Data Deleted Successfully");
        window.open("http://localhost/php/Demo/Demo%203.php", "_self");
    </script>
    <?php
} else {
    ?>
    <script>
        alert("Plase try again");
    </script>
    <?php
}
?>