<?php
include "db.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['employer_name'];
    $company = $_POST['company_name'];
    $contact = $_POST['contact_no'];

    $sql = "UPDATE employers SET employer_name='$name', company_name='$company', contact_no='$contact' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Employer Updated!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="post">
    <h2>Update Employer</h2>
    Employer ID: <input type="text" name="id"><br><br>
    New Name: <input type="text" name="employer_name"><br><br>
    New Company: <input type="text" name="company_name"><br><br>
    New Contact: <input type="text" name="contact_no"><br><br>
    <button type="submit" name="update">Update</button>
</form>
