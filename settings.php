<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>
<?php include 'includes/header.php'; ?>
<h1>Settings</h1>
<p>Settings will be displayed here.</p>
<?php include 'includes/footer.php'; ?>