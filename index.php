<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>
<?php include 'includes/header.php'; ?>
<h1>Welcome to the Dormitory Management System</h1>
<ul>
    <li><a href="student_list.php">Student List</a></li>
    <li><a href="accounts.php">Accounts</a></li>
    <li><a href="dorm_list.php">Dorm List</a></li>
    <li><a href="rooms_list.php">List of Rooms</a></li>
    <li><a href="user_list.php">User List</a></li>
    <li><a href="settings.php">Settings</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
<?php include 'includes/footer.php'; ?>