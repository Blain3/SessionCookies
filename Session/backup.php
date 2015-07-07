<?php
session_start();
echo session_id();
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "<br>";
var_dump($_SESSION);
$_SESSION['name'] = "Michal";

if(isset($_SESSION['name']) || $_SESSION['name'] != ''){
    echo "stimmt";
}else{
    echo "not";
}

//session_unset();
//session_destroy();
?>
</body>
</html> 