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
    <h1>BEVERAGES</h1>
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
                <h3>COCA COLA</h3>
                <img src="coke.jpg" height="250" width="250">
                <button onclick="myFunction()" align="center">EXPLOREE ME!!! </button>
                <button onclick="window.location.href='http://localhost/HMI/controller1.php'"  align="right">BUY@ RS 40/- per kg</button>
                    <p id="demo"></p>
                    <script>
                        function myFunction() 
                        {
                            document.getElementById("demo").innerHTML = "Coca-Cola, is a carbonated, sweetened soft drink and is the world's best-selling drink";
                        }
                    </script>

        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>PEPSI</h3>
                <img src="pepsi.png" height="250" width="250">
                    <button onclick="myFunction1()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 35/- per kg</button>
                    <p id="demo1"></p>
                    <script>
                        function myFunction1() 
                        {
                            document.getElementById("demo1").innerHTML = "Pepsi is a carbonated soft drink manufactured by PepsiCo. ";  
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>FANTA</h3>
                <img src="fanta.jpg" height="250" width="250">
                    <button onclick="myFunction2()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 35/- per kg</button>
                    <p id="demo2"></p>
                    <script>
                        function myFunction2() 
                        {
                            document.getElementById("demo2").innerHTML = "Fanta is the soft drink that intensifies fun. Introduced in 1940, Fanta is the second oldest brand of The Coca-Cola Company. ";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>SPRITE</h3>
                <img src="sprite.jpg" height="250" width="250">
                    <button onclick="myFunction3()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 40/- per kg</button>
                    <p id="demo3"></p>
                    <script>
                        function myFunction3() 
                        {
                            document.getElementById("demo3").innerHTML = "Sprite is a lemon-lime flavored soft drink with a crisp, clean taste that gives you the ultimate cut-through refreshment. ";
                        }
                    </script>
        </div>
            <hr>
            <hr>
            <div id="comapre">
                <h3>SLICE</h3>
                <img src="slice.jpg" height="250" width="250">
                    <button onclick="myFunction4()" align="center">EXPLOREE ME!!! </button>
                    <button onclick="window.location.href='http://localhost/HMI/controller1.php'" align="right">BUY@ RS 45/- per kg</button>
                    <p id="demo4"></p>
                    <script>
                        function myFunction4() 
                        {
                            document.getElementById("demo4").innerHTML = "Slice is a line of fruit-flavored soft drinks originally manufactured by PepsiCo and introduced in 1984 ";
                        }
                    </script>
        </div>
    </body>
</html>
