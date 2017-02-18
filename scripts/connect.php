<?php
$link=mysqli_connect("localhost","root","","sa_register_form") ;
if (mysqli_connect_errno())
{
    echo 'Ошибка к подключению к базе данных ('.mysqli_connect_errno(). '): '.mysqli_connect_error();
    exit();
}
?>