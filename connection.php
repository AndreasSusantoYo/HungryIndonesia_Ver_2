<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'hungry_indonesia');

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "success";
}
