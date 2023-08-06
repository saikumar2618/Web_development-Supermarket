<!-- aj code compare -->

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
    <h1>EGG AND SEA FOOD</h1>
    <body>
        <div id="compare">
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
                <h3>EGG</h3>
                <img src="egg.jpg" height="250" width="250">
                <button onclick="myFunction()" align="center">EXPLOREE ME!!! </button>
                <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 8/- per egg</button>
                    <p id="demo"></p>
                    <script>
                        function myFunction() 
                        {
                            document.getElementById("demo").innerHTML = "Eggs are an excellent source of protein, with a single large egg containing six grams of it. ";
                        }
                    </script>

        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>CHICKEN</h3>
                <img src="chick.jpg" height="250" width="250">
                    <button onclick="myFunction1()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 90/- per kg</button>
                    <p id="demo1"></p>
                    <script>
                        function myFunction1() 
                        {
                            document.getElementById("demo1").innerHTML = "Chicken meat contains about two to three times as much polyunsaturated fat as most types of red meat when measured as weight percentage. ";  
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>GOAT</h3>
                <img src="goat.jpg" height="250" width="250">
                    <button onclick="myFunction2()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 110/- per kg</button>
                    <p id="demo2"></p>
                    <script>
                        function myFunction2() 
                        {
                            document.getElementById("demo2").innerHTML = "Goat meat is a healthier option and almost always free-range. ";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>POMFRET</h3>
                <img src="pomf.jpg" height="250" width="250">
                    <button onclick="myFunction3()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 150/- for Duet</button>
                    <p id="demo3"></p>
                    <script>
                        function myFunction3() 
                        {
                            document.getElementById("demo3").innerHTML = "Pomfrets are perciform fishes belonging to the family Bramidae";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>PRAWNS</h3>
                <img src="prawn" height="250" width="250">
                    <button onclick="myFunction4()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 180/- per kg</button>
                    <p id="demo4"></p>
                    <script>
                        function myFunction4() 
                        {
                            document.getElementById("demo4").innerHTML = "Prawns are shrimp-like seafood that are 3-5 cm in length.";
                        }
                    </script>
        </div>
    </body>
</html>
