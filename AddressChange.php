<?php

session_start();

require 'db.php';
$address="";
$username=$_SESSION['user'];
$address = $_POST['newaddress'];
    $sql="UPDATE market SET address=? WHERE username=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $address,$username);

    if ($stmt->execute()) {
        function function_alert() {
            echo "<script type='text/javascript'>alert('Address updated successfully.');</script>";
        }
        function_alert();
        

    } else {
        function function_alert() {
            echo "<script type='text/javascript'>alert('unknown error');</script>";
        }
        function_alert();
}