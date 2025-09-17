<?php
include "db.php";

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM employers WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Employer Deleted!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="post">
    <h2>Delete Employer</h2>
    Employer ID: <input type="text" name="id"><br><br>
    <button type="submit" name="delete">Delete</button>
</form>
