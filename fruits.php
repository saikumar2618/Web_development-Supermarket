<!-- aj code compare -->
<?php require 'controller.php'; ?>
<style>
    #menu{
        background-color: greenyellow;
    }
    nav#menu ul{
        list-style: none;
        display: block
    }
    nav#menu li{
        list-style: none;
        padding: 0;
        display: inline;
        font-size: 25px;
        padding: 25px;
    }
</style>
<html>
    <h1>FRUITS</h1>
    <body>
        <div id="compare">
            <header>
                    
            </header>
            <nav id="menu">
                <ul>
				    <li class="menuitem"><a href="http://localhost/HMI/WDL2.php">Home</a></li>
				    <li class="menuitem"><a href="http://localhost/HMI/news.php">News</a></li>
                    <li class="menuitem"><a href="http://localhost/HMI/contact.php">Contact</a></li>
				    <li class="menuitem"><a href="http://localhost/HMI/about.php">About</a></li>
                </ul>
	       </nav>
        </div>    
            <div id="comapre">
                <h3>APPLES</h3>
                <img src="apple.jpg" height="250" width="250">
                <button onclick="myFunction()" align="center">EXPLOREE ME!!! </button>
                <button onclick="window.location.href='http://localhost/HMI/controller1.php'"  align="right">BUY@ RS 80/- per kg</button>
                    <p id="demo"></p>
                    <script>
                        function myFunction() 
                        {
                            document.getElementById("demo").innerHTML = "Crunchy and crispy Apples which make you go crazy and keep the doctor away";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>BANANA</h3>
                <img src="banana.jpg" height="250" width="250">
                    <button onclick="myFunction1()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 90/- per kg</button>
                    <p id="demo1"></p>
                    <script>
                        function myFunction1() 
                        {
                            document.getElementById("demo1").innerHTML = "A healthy snack which will kill your hunger";  
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>ORANGES</h3>
                <img src="orange.png" height="250" width="250">
                    <button onclick="myFunction2()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 60/- per kg</button>
                    <p id="demo2"></p>
                    <script>
                        function myFunction2() 
                        {
                            document.getElementById("demo2").innerHTML = "A juicy and refreshing fruit which would cool you in hot summer";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>MANGOES</h3>
                <img src="mangoes" height="250" width="250">
                    <button onclick="myFunction3()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 250/- per kg</button>
                    <p id="demo3"></p>
                    <script>
                        function myFunction3() 
                        {
                            document.getElementById("demo3").innerHTML = "An irresistible and the KING of fruits which will make you fall in love";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>GRAPES</h3>
                <img src="grapes.jpg" height="250" width="250">
                    <button onclick="myFunction4()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 55/- per kg</button>
                    <p id="demo4"></p>
                    <script>
                        function myFunction4() 
                        {
                            document.getElementById("demo4").innerHTML = "The sweet and sour fruit which will give a blst of taste in your mouth";
                        }
                    </script>
        </div>
    </body>
</html>
