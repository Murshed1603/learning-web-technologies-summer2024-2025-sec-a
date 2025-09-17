<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Employer</title>
</head>
<body>
    <h2>Register Employer</h2>
    <?php if(isset($_GET['msg'])) echo "<p style='color:green'>".$_GET['msg']."</p>"; ?>
    <?php if(isset($_GET['error'])) echo "<p style='color:red'>".$_GET['error']."</p>"; ?>

    <form method="post" action="../controller/register_employer.php">
        <label>Employer Name:</label>
        <input type="text" name="employer_name" required><br><br>

        <label>Company Name:</label>
        <input type="text" name="company_name" required><br><br>

        <label>Contact No:</label>
        <input type="text" name="contact_no" required><br><br>

        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit" name="register">Register</button>
    </form>

    <br>
    <a href="dashboard.php">⬅️ Back to Dashboard</a>
</body>
</html>
