<?php include 'Demo 1.php'; ?>
<a href="Demo 2.php">Home</a>
<table border="1px" cellpadding="10px" callspacing="0">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    $query = "SELECT * FROM student";
    $data = mysqli_query($con,$query);
    $result = mysqli_num_rows($data);

    if ($result) {
        while ($row = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['age']; ?></td>

                <td><a href="Demo 4.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure, you want to delete?')" href="Demo 5.php?id=<?php echo $row['id']; ?>">Delete</a></td>
            </tr>
            <?php
        }
    } else {
        ?>
        <tr>
            <td>
                No Record Found
            </td>
        </tr>
        <?php
    }
    ?>
</table>