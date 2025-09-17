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
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Welcome Admin, <?php echo $_SESSION['admin']; ?> 🎉</h2>
    <p>Select an option below:</p>
    <ul>
        <li><a href="register_employer.php">➕ Register Employer</a></li>
        <li><a href="update_employer.php">✏️ Update Employer</a></li>
        <li><a href="delete_employer.php">🗑 Delete Employer</a></li>
        <li><a href="search_employer.php">🔍 Search Employer</a></li>
        <li><a href="../controller/logout.php">🚪 Logout</a></li>
    </ul>
</body>
</html>
