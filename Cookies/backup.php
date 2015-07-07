<?php
setcookie('username', 'Michael Heinemann', time() + (60*60*24*30));


//setcookie('username', 'Michael Heinemann', time() - 100);

setcookie("cookie[0]", "cookieone");
setcookie("cookie[1]", "cookietwo");
setcookie("cookie[2]", "cookiethree");
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "<br>";
//var_dump($_COOKIE);
echo $_COOKIE['username']."<br>";

if (isset($_COOKIE['cookie'])) {
    foreach ($_COOKIE['cookie'] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name : $value <br />\n";
    }
}
//echo '<br>';
//echo 'Hello '.($_COOKIE['username']!='' ? $_COOKIE['username'] : 'Guest');
?>
</body>
</html> 