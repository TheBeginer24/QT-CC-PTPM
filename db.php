<?php

$connection = mysqli_connect('localhost', 'root', '1234', 'salesweb');
mysqli_query($connection, "SET NAMES 'utf8'");

if (!$connection) {
    exit('Kết nối không thành công!');
}
?>
