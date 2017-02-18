<?php
require 'connect.php';
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$login = $_POST['login'];
$location = $_POST['location'];
$email = $_POST['email'];
$password = $_POST['password'];
$insert_sql = "INSERT INTO `user` (first_name, last_name, login, password, location, email) " .
    "VALUES ('{$first_name}','{$last_name}','{$login}','{$password}','{$location}','{$email}');";
print $insert_sql;
mysqli_query($link, $insert_sql);

if ($insert_sql) {
    header( 'Location:http://localhost/', true, 303);
} else {
    echo "Ваши данные не добавлены";
}

?>

