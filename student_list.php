<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>
<?php include 'includes/header.php'; ?>
<h1>Student List</h1>
<p>List of students will be displayed here.</p>
<?php include 'includes/footer.php'; ?>