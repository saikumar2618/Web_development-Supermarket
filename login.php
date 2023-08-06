<?php require 'controller.php'; ?>
<!DOCTYPE html>
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
.customer {
  z-index: 1;
  position: absolute;
  border: none;
  color: yellow;
  text-align: center;
  left: 650px;
  font-size: 17px;
  top:1px;
  opacity: 1;
  transition: 0.3s;
  transform-origin: 0;
}

</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="http://localhost/HMI/login.php">Home</a>
  <a class="active" href="http://localhost/HMI/news.php">News</a>
  <a class="active" href="http://localhost/HMI/contact.php">Contact</a>
  <a class="active" href="http://localhost/HMI/about.php">About</a>
</div>

<div class="customer">
<p>WELCOME <?php echo $_POST['lusername']; ?></p>
</div>

<?php 
 $_SESSION['user']=$_POST['lusername'];
    ?>    

    
<div style="padding-left:16px">

</div>

<!---for change address---->
<style>
.open-button {
  z-index: 1;
  cursor: pointer;
  position: absolute;
  background-color: #f4511e;
  border: none;
  color: white;
  text-align: center;
  padding: 10px 10px;
  left: 900px;
  top:10px;
  opacity: 1;
  transition: 0.3s;
  transform-origin: 0;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 200px;
  right: 500px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .ua-btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add some hover effects to buttons */
.form-container .ua-btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

<button class="open-button" onclick="openForm()">Change Address</button>

<div class="form-popup" id="myForm">
  <form action=AddressChange.php method="post" class="form-container">
    <h1>Update Address</h1>

    <label for="newaddress"><b>New Address</b></label>
    <input type="text" placeholder="Enter new address" name="newaddress" required>

    <button type="submit" name="addr-btn" class="ua-btn">Update</button>
    <button type="butt" class="cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<!----for change pswrd---->
<style>
.open-pbutton {
  z-index: 1;
  cursor: pointer;
  position: absolute;
  background-color: #f4511e;
  border: none;
  color: white;
  text-align: center;
  padding: 10px 10px;
  left: 1050px;
  top:10px;
  opacity: 1;
  transition: 0.3s;
  transform-origin: 0;
}

/* The popup form - hidden by default */
.pform-popup {
  display: none;
  position: fixed;
  bottom: 200px;
  right: 500px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.pform-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.pform-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.pform-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.pform-container .up-btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.pform-container .cancel {
  background-color: red;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add some hover effects to buttons */
.pform-container .up-btn:hover, .open-pbutton:hover {
  opacity: 1;
}
.logout {
  z-index: 1;
  cursor: pointer;
  position: absolute;
  background-color: #f4511e;
  border: none;
  color: white;
  text-align: center;
  padding: 10px 10px;
  left: 1250px;
  top:10px;
  opacity: 1;
  transition: 0.3s;
  transform-origin: 0;
}
</style>

<button class="open-pbutton" onclick="openForm1()">Change password</button>

<div class="pform-popup" id="myForm1">
  <form action=PasswordChange.php method="post" class="pform-container">
    <h1>Update password</h1>

    <label for="newpassword"><b>New password</b></label>
    <input type="password" placeholder="Enter new password" name="newpsw" required>

    <button type="submit" name="psw-btn" class="up-btn">Update</button>
    <button type="butt" class="cancel" onclick="closeForm1()">Close</button>
    
  </form>
</div>

<button class="logout" onclick="openForm2()">Logout</button>
<div class="pform-popup" id="myForm2">
  <form action="WDL2.php" class="pform-container">

    <b>Do you want to log out?</b></label>

    <button type="submit" name="logout" class="up-btn">Logout</button>
    <button type="butt" class="cancel" onclick="closeForm2()">Close</button>
  </form>
</div>

<script>
function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}
</script>

<script>
function openForm2() {
  document.getElementById("myForm2").style.display = "block";
  session_destroy();
  unset($_SESSION['username']);
  unset($_SESSION['phone']);
}

function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}
</script>


</body>
    
<!--  search   -->
    
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}
    
#container {
  position: absolute;
  top: 26%;
  left: 7%;
  margin-top: -150px;
  margin-left: -148px;
}
    
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>


<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

</body>
    
<body>
    <script>
        var el = document.getElementById("container");
       
    </script>
    <div id="container">
        <p>
        <a class="active" href="http://localhost/HMI/news.php">News</a>
                <img src="ss" width="380" height="100">
        </a>
        </p>    
    </div>
            
</body>

<!-- left menu -->
      <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 55%;
  width: 170px;
  position: fixed;
  z-index: 1;
  top: 250;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>
<br>
    <br>
    
<div class="sidebar">
  <a href="http://localhost/HMI/fruits.php">FRUITS</a>
  <a href="http://localhost/HMI/vegetables.php">VEGETABLES</a>
  <a href="http://localhost/HMI/foodgrains.php"><i></i>FOODGRAINS</a>
  <a href="http://localhost/HMI/beverage.php"><i></i>BEVERAGES</a>
  <a href="http://localhost/HMI/snacks.php"><i></i>SNACKS</a>
  <a href="http://localhost/HMI/egg.php"><i></i>EGG MEAT AND FISH</a>
  <a href="http://localhost/HMI/gourmet.php"><i></i>GOURMET</a>
  <a href="http://localhost/HMI/dairy.php"><i></i>DAIRY</a>
    
  
</div>
                    
</body>
    
<!-- slideshow bar-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0
    }
</style>
<body>


<div class="w3-content w3-display-container" style = "position:relative; left:80px; top:20px; background-color:yellow;">
  <img class="mySlides" src="img.jpg" height="200"  width="1000">
  <img class="mySlides" src="img1.jpg" height="200" width="1000">
  <img class="mySlides" src="img2" height="200" width="1000">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:70%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
     
</body>

<style>
body {
  background-image: url('image2.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
    
    
<div class="ticker-wrap">
<div class="ticker">
  <div class="ticker__item">S.A.S supermarket - It's all about your need.</div>
  <div class="ticker__item">Shop, Relax, Enjoy </div>
  <div class="ticker__item">Just shop the way you want !</div>
</div>
</div>

<style>
    
.ticker-wrap {
  position: fixed;
  bottom: 00;
    left: 0;
  width: 100%;
  overflow: hidden;
  height: 5rem;
  background-color: #e41b17;
  box-sizing: content-box;
}
    
.ticker-wrap .ticker {
  display: inline-block;
  height: 4rem;
  line-height: 4rem;
  white-space: nowrap;
  padding-right: 100%;
  box-sizing: content-box;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-name: ticker;
  animation-name: ticker;
  -webkit-animation-duration: 30s;
  animation-duration: 30s;
  animation-play-state: paused;
}
    
.ticker-wrap .ticker__item {
  display: inline-block;
  padding: 0 2rem;
  font-size: 2rem;
  color: white;
}
    
@-webkit-keyframes ticker {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: visible;
  }
  100% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}
@keyframes ticker {
  0% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    visibility: visible;
  }
  100% {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
  }
}
</style>


</html>