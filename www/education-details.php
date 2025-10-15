<?php

require 'database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM educations WHERE id =$id";
$result = mysqli_query($conn,$sql);
$education = mysqli_fetch_assoc($result);









?>