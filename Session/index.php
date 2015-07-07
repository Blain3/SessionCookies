<?php
session_start();

var_dump($_SESSION);


echo session_id();

echo '<br>';

$_SESSION['username'] = "Michael";
$_SESSION['Ort'] = "Hamburg";

echo $_SESSION['username'];
echo $_SESSION['Ort'];


if(isset($_SESSION['name']) || $_SESSION['name'] != ''){
    echo "stimmt";
}else{
    echo "not";
}

echo '<br>';

var_dump($_SESSION);
//echo session_id();

?>

