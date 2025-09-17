<?php
include "db.php";

if (isset($_POST['query'])) {
    $search = $_POST['query'];
    $sql = "SELECT * FROM employers WHERE employer_name LIKE '%$search%' OR company_name LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<p>".$row['employer_name']." - ".$row['company_name']."</p>";
        }
    } else {
        echo "No results found.";
    }
}
?>
