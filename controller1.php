<?php require 'controller.php'; ?>
<?php
if(empty($_SESSION['username']))
{
    function function_alert1() {
            echo "<script type='text/javascript'>alert('Please SignIn');</script>";
        }
        function_alert1();

}
else
{
    function function_alert2() {
            echo "<script type='text/javascript'>alert('Will be delivered to your registered address');</script>";
        }
        function_alert2();

}

?>