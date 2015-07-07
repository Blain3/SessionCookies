<?php
session_start();
if (!$_SESSION['logged']) {
    header("Location: login_page.php");
    exit;
}
session_regenerate_id(true);
echo session_id();
?>
<!DOCTYPE html>
<html>
<body>
<br>
<?php
echo '<h1 class ="ueberschrift">Welcome, ' . $_SESSION['username'].'</h1>';
?>
<br><br>
Klick to <a href="logout.php">Logout</a>
</body>
</html>