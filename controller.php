<?php

session_start();

require 'db.php';

$username = "";

$phone = "";
$address="";
$password="";

if(isset($_POST['signup-btn'])) {
    $username = $_POST['name'];
    $password = $_POST['psw'];
    $address = $_POST['addr'];
    $phone = $_POST['phno'];

$phoneQuery="SELECT * FROM market WHERE phone=? LIMIT 1";
$stmt = $conn->prepare($phoneQuery);
$stmt->bind_param('s',$phone);
$stmt->execute();
$result = $stmt->get_result();
$userCount = $result->num_rows;

if ($userCount>0) {
        function function_alert() {
            echo "<script type='text/javascript'>alert('Phone number already exists');</script>";
        }
        function_alert();
}

if ($userCount === 0) {

    $sql="INSERT INTO market (username, address, phone, password) VALUES(?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssis',$username, $address, $phone, $password);

    if ($stmt->execute()) {
        function function_alert() {
            echo "<script type='text/javascript'>alert('You are successfully registered. Please log in to your account');</script>";
        }
        function_alert();
        $user_name = $conn->insert_id;
        $_SESSION['username'] = $username;
        $_SESSION['phone'] = $phone;
        header('location:http://localhost/HMI/WDL2.php');
        exit();

    } else {
        function function_alert() {
            echo "<script type='text/javascript'>alert('Database error');</script>";
        }
        function_alert();
    }

}



}


if(isset($_POST['login-btn'])) {
    $username = $_POST['lusername'];
    $password = $_POST['lpsw'];

$sql="SELECT * FROM market WHERE username=? LIMIT 1";
$stmt=$conn->prepare($sql);
$stmt->bind_param('s',$username);
$stmt->execute();
$result = $stmt->get_result();
$user= $result->fetch_assoc();

if(password_verify($password, $user['password'])) {

    $_SESSION['username'] = $user['username'];
    $_SESSION['phone'] = $user['phone'];
    exit();



} 
}

if(isset($_POST['addr-btn'])) {
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
}

if(isset($_POST['psw-btn'])) {
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
}

if(isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['phone']);
    header('location: WDL2.php');
    exit();

}




