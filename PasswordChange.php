<?php

session_start();

require 'db.php';
$password="";
$username=$_SESSION['user'];
$password = $_POST['newpsw'];
    $sql="UPDATE market SET password=? WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $password,$username);

    if ($stmt->execute()) {
        function function_alert() {
            echo "<script type='text/javascript'>alert('Password updated successfully');</script>";
        }
        function_alert();
        

    } else {
        function function_alert() {
            echo "<script type='text/javascript'>alert('unknown error');</script>";
        }
        function_alert();
}