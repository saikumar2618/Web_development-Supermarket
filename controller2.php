<?php

session_start();

require 'db.php';

$username = "";

$phone = "";
$address="";
$password="";
$username = $_POST['lusername'];
$password = $_POST['lpsw'];

$sql="SELECT * FROM market WHERE username=? LIMIT 1";
$stmt=$conn->prepare($sql);
$stmt->bind_param('s',$username);
$stmt->execute();
$result = $stmt->get_result();
$user= $result->fetch_assoc();

